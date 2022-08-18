<?php
/*6. Una compañía de seguros tiene contratados a 30 vendedores. Cada uno hace tres ventas a la semana. Su política
de pagos es que un vendedor recibe un sueldo base y 10% extra por comisiones de sus ventas. El gerente de su
compañía desea saber cuánto dinero obtendrá en la semana cada vendedor por concepto de comisiones por las
tres ventas realizadas y cuánto tomando en cuenta su sueldo base y sus comisiones.*/
$sueldo=0;
$ventas=0;
$comision=0;
for ($i=1; $i <=3 ; $i++) { 
    echo "\n ";
    $sueldo =readline("ingrese el valor correspondiente al sueldo del empleado n° ". $i);
    $ventas =readline("ingrese el valor correspondiente a la ventas del empleado n°". $i);
    $comision= $ventas*0.10;
    echo '\n  el valor del sueldo es de : $' . $sueldo;
    echo '\n el valor de sus comisiones es de : $' . $comision;
    echo " \n  el sueldo total es de  :$". ($sueldo +$comision);
   } 
  

?>