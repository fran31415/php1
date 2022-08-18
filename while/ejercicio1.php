<?php
/*Obtener suma de los términos de la serie: 2, 5, 7, 10, 12, 15, 17, .... 1800.*/
/* la serie la vamos a trabajar por separado s1: 2, 7, 12, ...1797 , la otra serie es s2:5, 10, 15, 20, ...1800 */
$a=1;
$b=0;
$c=0;
$d=0;
$s1 =0;
$s2=0;
while ($a <= 360) {$b=5*$a;
    $s1+=$b;
    $a++;
    echo $b. ", ";

}
echo"\n -----------la suma de la serie s1 es: \n". $s1. "\n";
while ($c <= 359) {$d=5*$c+2;
    $s2+=$d;
    $c++;
    echo $d. ", ";

}
echo"\n -----------la suma de la serie s2 es: \n". $s2;
echo "\n ---- la suma total de s1 y s2 es : ". ($s1+$s2);

?>