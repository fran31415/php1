<?php
/* En una tienda de descuento, las personas que van a pagar el importe de su compra llegan a la caja y sacan una
olita de color, que les dirá qué descuento tendrán sobre el total de su compra. Determinar la cantidad que
pagará cada cliente desde que la tienda abre hasta que cierra. Se sabe que, si el color de la bolita es roja, el
cliente tendrá un 40% de descuento; si es amarilla, un 25% y si es blanca no tendrá descuento.*/
$descuento=0;
$compra=0;
$opcion=0;
$total=0;
$acumulador=0;
$opcion =readline("¿desea iniciar las operaciones de compras si o no?");
while ($opcion=="si") {
    $compra =readline("¿cual es el valor de su compra?");
    echo " eliga un color de bolita para aplicarle el descuento \n 1.rojo \n 2.amarilla \n 3. blanco";
    $opcion =readline("\n Escriba el color seleccionado :$");
    if ($opcion==1) {$descuento=$compra*0.40;}
    else if ($opcion==2) {$descuento=$compra*0.25;}
    else if ($opcion==3) {$descuento=$compra*0.0;}
    else {echo "digite un valor numerico: 1, 2 y 3";}
    $total=$compra-$descuento;;
    $acumulador+=$total;
    echo "\n el valor de la compra actual es de : $". $compra;
    echo "\n el valor de la compra actual con descuento es de  : $". $total;
    $opcion =readline("\n ¿desea seguir comprando si o no?");

}

echo"\n -----------el valor de las compras totales es de : \n $". $acumulador;
?>