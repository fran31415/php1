<?php
/*declaracion de variables */
$colorbolita ="";
$descuento = 0;
$valorcompra = 0;
$totalcompra =0;
                                                                     


echo  "color de la bolita seleccionada". $colorbolita. "<br>";
echo  "Total de la compra sin descuento es :". $descuento. "<br>";
echo "descuento es de $". $descuento. "<br>";
echo "el total a pagar es : $". $totalcompra;

if(isset($_POST["procesar"])) {/*recibir los datos del formulario */

$valorcompra=$_POST["compra"];
$colorbolita=$_POST["colorbolita"];
$colorbolita =strtolower($colorbolita);
/* procesos*/
if ($colorbolita=="blanca") {$descuento = $valorcompra*0;}
else if ($colorbolita=="verde") {$descuento = $valorcompra*0.10;}
else if ($colorbolita=="amarilla") {$descuento = $valorcompra*0.25;}
else if ($colorbolita=="azul") {$descuento = $valorcompra*0.5;}
else if ($colorbolita=="roja") {$descuento = $valorcompra*1;}


$totalcompra = $valorcompra - $descuento;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bolitas de color </title>
</head>
<body>
    <form action="ejemplo4.php" method="POST">
        <label for="">VALOR DE LA COMPRA</label>
        <input type="text" name="compra" placeholder="0.0" required> <br>
        <label for="">eliga un color de la lista </label>
        <select name="colorbolita" >
            <option value="">seleccione</option>
            <option value="blanca">blanca</option>
            <option value="verde">verde</option>
            <option value="amarila">amarilla</option>
            <option value="azul">azul</option>
            <option value="roja">roja</option>
        </select>
        <br>
        <button type="submit" name="procesar"> procesar datos</button>
    </form>
    <br>
    <table border="1">
        <thead>
           <tr>
           <th>color de la bolita </th>
           <th> total de la compra sin descuento </th>
           <th> descuennto</th>
           <th> total a pagar </th>
           </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php echo $colorbolita  ?></td>
            <td><?php echo $valorcompra  ?></td>
            <td><?php echo $descuento  ?></td>
            <td><?php echo $totalcompra  ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>