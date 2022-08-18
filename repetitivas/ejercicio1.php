<?php
/*Dado el sueldo de 20 trabajadores, considere un aumento del 15% a cada uno de ellos, si su sueldo es inferior a
$800. Imprima el sueldo con el aumento incorporado. */
$aumento=0;
for ($i=1; $i <=20 ; $i++) { 
    echo "\n ";
    $sueldo =readline("ingrese el sueldo el empleado n°". $i);
    if($sueldo<=800) {$aumento=$sueldo*0.15; }
    else { $aumento =0;}
    echo "\n ___________ empleado N° ". $i. "______________";
echo " \n salario $ ". ($sueldo). "--------- ";
echo " \n salario con aumento es de  $". ($sueldo+$aumento). "--------- ";
}

?>