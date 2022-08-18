
<?php
//Declaraciones o asignaciones de variables y datos

$nombreVendedor="";
$nombreCliente="";
$numeroFactura="";
$fechaFactura=("");
$ventas=0;
$descuento=0;
$totalPago=0;


if(isset($_POST['enviar'])){
    $nombreVendedor=$_POST["nombrev"];
    $nombreCliente=$_POST["nombrec"];
    $numeroFactura=$_POST["numerof"];
    $fechaFactura=$_POST["fecha"];
    $ventas=$_POST ["ventas"];


//Procedimientos y condiciones
if($ventas>0 && $ventas<100)
{$descuento=$ventas*0.0;}
elseif($ventas>=100 && $ventas<=500)
{$descuento=$ventas*0.15;}
elseif($ventas>500 && $ventas<=1000)
{$descuento=$ventas*0.20;}
elseif ($ventas>1000)
{$descuento=$ventas*0.30;}
else{echo "No aplica a nuestra promocion de descuento";}

$totalPago= $ventas -$descuento;
/*
//salidas
echo "Nombre Vendedor:".$nombreVendedor."<br>";
echo "Nombre Cliente:".$nombreCliente."<br>";
echo "Fecha de Facturacion:".$fechaFactura."<br>";
echo "Numero de Factura:".$numeroFactura."<br>";
echo "VENTOS: $".$ventas."<br>";
echo "DECUENTOS: $".$descuento."<br>";
echo "<strong>TOTAL A PAGAR: $".$totalpago."<strong><br>";*/

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejemplo</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        EJEMPLO DE FACTURA
    </div>
    <div class="container">
        <form method="POST" action="ejemplo3.php">
            <div class="form-group">
                <label for="">Nombre del vendedor</label>
                <input type="text" class="form-control" placeholder="Escribe el nombre del vendedor" name="nombrev" required>
            </div>
            <div class="form-group">
                <label for="">Nombre del cliente</label>
                <input type="text" class="form-control" placeholder="Escribe el nombre del cliente" name="nombrec" required>
            </div>
            <div class="form-group">
                <label for="">Numero de factura</label>
                <input type="text" class="form-control" placeholder="0000-00000-0000" name="numerof" required>
            </div>
            <div class="form-group">
                <label for="">Fecha de facturacion</label>
                <input type="date" class="form-control" name="fecha" value="<?php  echo date('Y-m-a')?>">
            </div>
            <div class="form-group">
                <label for="">Compras realizadas</label>
                <input type="text" class="form-control" placeholder="0.00" name="ventas" required>
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">CALCULAR</button>
        </form>
        <br>
        <table class="table table-hover table-bordered">
            <thead class="btn-primary">
                <tr>
                    <th>NOMRE DEL VENDEDOR</th>
                    <th>NOMBRE DEL CLIENTE</th>
                    <th>NUMERO DE FACTURA</th>
                    <th>FECHA</th>
                    <th>COMPRA</th>
                    <th>DESCUENTO</th>
                    <th>TOTAL A PAGAR</th>

                </tr>
            </thead>
   <tbody>

   <tr>
                    <td> <?php echo $nombreVendedor  ?> </td>
                    <td> <?php echo $nombreCliente  ?> </td>
                    <td> <?php echo  $numeroFactura?> </td>
                    <td> <?php  echo $fechaFactura ?> </td>
                    <td> $ <?php  echo number_format($ventas, 2)?> </td>
                    <td> $  <?php  echo number_format($descuento,2) ?> </td>
                    <td> $  <?php  echo number_format($totalPago,2) ?> </td>
                </tr>
   </tr>
   </tbody>
</table>
    
    </div>
</body>

</html>







