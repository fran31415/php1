<?php
/*Dados 24 números reales que representan las temperaturas del exterior en un período de 24 horas. Encuentre la
temperatura media del día y las temperaturas más alta y más baja del día.*/
$contadort=0;
$sumat=0;
$t=0;
$mayor=-1000;
$menor=1000;
for ($i=1; $i <=24 ; $i++) { 
    echo "\n ";
    $t =readline("ingrese el valor correspondiente a la posición ". $i." de temperartura:");
    $contadort++;
    $sumat+=$t; 
   
    if ($t > $mayor)
    {
        $mayor = $t;
    }
    else if($t < $menor)
    {
        $menor = $t;
    } 
   } 
  
echo '\n  Maxima temperatura: ' . $mayor;
echo '\n Minima temperatura: ' . $menor;
echo " \n  el promedio de temperatura registrada es :". ($sumat/ $contadort);
?>