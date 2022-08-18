<?php
$ingresos = 0.0;
$pediatria = 0.0;
$oncologia = 0.0;
$trau = 0.0;

$mensaje = "";
if (isset($_POST['enviar'])) {
    //echo "<script>alert('hola');</script>";
    $ingresos = $_POST['ingreso'];
    $pediatria = $ingresos * 0.3;
    $oncologia = $ingresos * 0.4;
    $trau = $ingresos * 0.3;
    $mensaje = '<div class="alert alert-success" role="alert">
    Datos procesados
  </div>';
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
        EJEMPLO
    </div>
    <div class="container">
        <div class="form-group">
                <form method="POST" action="ejercico.php"><!--Donde est la informacion-->
                <label for="">INGRESOS ANUALES</label>
                <input type="text" class="form-control" placeholder="0.00" name="ingreso" required>
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">CALCULAR</button>
        </form>
        <br>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>AREA</th>
                    <th>PORCENTAJES</th>
                    <th>$ DINERO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PEDIATRÍA</td>
                    <td>30%</td>
                    <td>$ <?php echo number_format($pediatria, 2) ?></td>
                </tr>
                <tr>
                    <td>ONCOLOGÍA</td>
                    <td>40%</td>
                    <td>$ <?php echo number_format($oncologia, 2) ?></td>
                </tr>
                <tr>
                    <td>TRAUMATOLOGÍA</td>
                    <td>30%</td>
                    <td>$ <?php echo number_format($trau, 2) ?></td>
                </tr>
            </tbody>
        </table>

        <?php echo $mensaje; ?>
    </div>
</body>

</html>