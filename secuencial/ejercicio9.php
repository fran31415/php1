<?php
echo " <br> ------------------- ejercicio 9------------------------";
$parciales = 5;
$examen = 7;
$trabajofinal= 6;
$promedio = ($parciales*0.55+$examen*0.3+$trabajofinal*0.15);
echo " <br> la calificacion de parciales es : ". $parciales. " <br>";
echo " la calificacion del examen  es : ". $examen. " <br>";
echo " la calificacion del trabajo final  es : ". $trabajofinal. " <br>";
echo " El promedio de la materia es : ". $promedio. " <br>";
echo " <br> ------------------- ____fin___------------------------";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{text-align: center; border-collapse: collapse;}
    
        table,th,td {
    border: 2px solid black;}

    .prom{color: red; font: size 150px;}
    th,
td {
    padding: 5px;
}
    </style>
</head>
<body>
    <table>
        <th colspan="4">DETALLE DE CALIFICACIONES</th>
        <tr>
        <td ><strong>Calificaciones parciales</strong> </td>
        <td><strong>C. Examen Final</strong> </td>
        <td><strong>C. Examen Trabajo Final</strong></td>
        <td><strong>Promedio</strong></td>
        </tr>
        <tr>
       <td> <?php echo $parciales ?> </td>
       <td><?php echo $examen ?></td>
       <td><?php echo $trabajofinal ?></td>
       <td class="prom"><?php echo $promedio?></td>
        </tr>
    </table>
</body>
</html>