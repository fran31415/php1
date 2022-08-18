<?php
/*2. Calcule el aumento de sueldos para 50 empleados de una empresa, bajo el siguiente criterio:
a. Si el sueldo es menor a $1000: aumento 12%
b. Si el sueldo está comprendido entre $1000 y $25000: aumento 10%
c. Si el sueldo es mayor a $25000: aumento 8%
d. Imprima el nuevo sueldo del trabajador y el monto total de la nómina considerando el aumento. */
$aumento=0;
for ($i=1; $i <=20 ; $i++) { 
    echo "\n ";
    $sueldo =readline("ingrese el sueldo el empleado n°". $i);
    if($sueldo>=0 && $sueldo<1000) {$aumento=$sueldo*0.12; }
    else if ($sueldo>=1000 && $sueldo<=2500) {$aumento=$sueldo*0.1; }
    else if ($sueldo>2500) {$aumento=$sueldo*0.08; }
    else { echo "digite un sueldo mayor o igual a cero";}
    echo "\n ___________ empleado N° ". $i. "______________";
echo " \n salario $ ". ($sueldo). "--------- ";
echo " \n salario con aumento es de  $". ($sueldo+$aumento). "--------- ";
}

?>