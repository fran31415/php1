<?php
/*Un vendedor ha hecho una serie de ventas y desea saber cuántas de éstas fueron de $200 o menos; cuántas
fueron mayores a 200 pero inferiores a 400 y cuántas de 400 o más. Elabore la información para ese
vendedor después de leer los datos de entrada. */
$nventas=0;
$ventas=0;
$contador200=0;
$contador400=0;
$contador400mas=0;
do{ 
    echo "bienvenido!!!";
       echo "\n";
       $nventas = readline("ingresa el numero de ventas que se realizo ");
       for ($i=1; $i <=$nventas ; $i++) 
       { $ventas=readline("ingrese el monto de la venta". $i);
           if ($ventas>0 && $ventas<200) {$contador200++;}
           else if ($ventas>=200 && $ventas<400) {$contador400++;}
           else if ($ventas>=400 ) {$contador400mas++;}
           else {echo "digite una opcion validad";}
       }
       
       echo "\n las ventas menores de $200 son ". $contador200;
       echo "\n las ventas mayores de $200 y menores de $400 son ". $contador400;
       echo "\n las ventas mayores de $400 son ". $contador400mas;
       $pregunta =readline("\n  desea ingresar otro numero de ventas ?  SI/N0");
       $pregunta =strtoupper($pregunta); //para convertir una palabra a mayuscula
   }
   while ($pregunta=="SI");
?>