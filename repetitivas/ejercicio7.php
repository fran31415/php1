<?php
/*Dados 100 números enteros como datos, obtener:
a) Cuántos números leídos fueron mayores que cero.
b) el promedio de los números positivos
c) el promedio de todos los números.*/
$n=0;
$contadorp=0;
$contadorn=0;
$sumap=0;
$suman=0;
for ($i=1; $i <=3 ; $i++) { 
    echo "\n ";
    $n =readline("ingrese el valor correspondiente del numero en la posicion  n° ". $i);
    if($n>0) {$contadorp=$contadorp+1;
    $sumap+=$n;}
    else {$contadorn=$contadorn+1;
        $suman+=$n;
    }
    
   } 
  
   echo '\n  los numeros mayores que cero son en total' . $contadorp;
   echo '\n el promedio de los numeros positivos es ' . $sumap/$contadorp;
   echo " \n  el promedio de todos los números es :". (($sumap+$suman)/($contadorn+$contadorp));
?>