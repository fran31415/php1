<?php
/*En un supermercado se hace una promoción mediante la cual el cliente obtiene un descuento dependiendo de
un número que escoge al azar. Si el número escogido es menor a 74 el descuento es del 15% sobre el total de la
compra y si es mayor o igual a 74 es de 20%. Obtener cuánto dinero se le descuenta y el pago final. */
   
    $descuento=0;
    $compra=5;
    $numero=75;
    if($numero>=0 && $numero<74){
        $descuento=$compra*0.15;}
    else if($numero>=74 && $numero<=100){ $descuento=$compra*0.25;}
    else {echo "ingrese un numero comprendido de 0 a 100";}
    echo "valor de la compra ". $compra."<br>";
    echo "numero selecciomado  ". $numero."<br>";
    echo "descuento aplicado: $". $descuento. "<br>";
    echo "valor total de la compra es de $" .($compra-$descuento)."<br>";

?>