<?php
/*Dados como datos 300 números enteros, obtener la suma de los números impares y el promedio de los números
pares.*/
$acumimpares=0;
$acumpares =0;;
$sumapares=0;
$sumaimpares=0;
for ($i=1; $i <=300 ; $i++) { 
    echo "\n ";
    $entero =readline("ingrese el entero correspondiente a la posicion ". $i.":");
    if($entero % 2==0) 
    {$sumapares+=$entero;
    $acumimpares++;
    }
    
    else{  $sumaimpares+=$entero;}   }
echo "\n  la suma de los impares es :". $sumaimpares;
echo " \n  el promedio de los pares es :". ($sumapares/ $acumimpares);
echo " \n _______________________";
?>
