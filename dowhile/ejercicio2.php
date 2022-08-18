<?php
/*2) Determinar la media de ventas de X empleados. Cada empleado hace N ventas, el proceso se debe repetir si el
usuario lo requiere. */
$nventas=0;
$ventas =0;
$contador=0;
$acumulador=0;
do{ 
 echo "bienvenido!!!";
    echo "\n";
    $nventas = readline("ingresa el numero de ventas que se realizo ");
    for ($i=1; $i <=$nventas ; $i++) { $ventas=readline("ingrese el monto de la venta". $i);
        $contador++;
        $acumulador+=$ventas;
        
    }
    
    echo "el promedio de las ventas es :$". ($acumulador/$contador);
    $pregunta =readline("desea ingresar otro vendedor ?  SI/N0");
    $pregunta =strtoupper($pregunta); //para convertir una palabra a mayuscula
}
while ($pregunta=="SI");
?>