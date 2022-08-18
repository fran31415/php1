<?php
/*3. Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos.*/
$acump=0;
$acumn =0;
$acumc=0;
for ($i=1; $i <=100 ; $i++) { 
    echo "\n ";
    $entero =readline("ingrese el entero correspondiente a la posicion ". $i.":");
    if($entero>0) {$acump=$acump+1; }
    else if($entero=0) {$acumc=$acumc+1; }
    else if($entero<0) {$acumn=$acumn+1; }
}
echo "\n  los enteros positivos son :". $acump;
echo " \n  los enteros nulos son :". $acumc;
echo " \n los enteros negativos son :". $acumn;
?>