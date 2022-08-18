<?php
/*En una librería, los clientes hacen pedidos de libros, cuadernos y revistas con las condiciones siguientes: los
libros tienen un descuento del 22%, las revistas del 16% y los cuadernos del 10%. Los datos que se ingresan
para cada tipo de artículo son: la cantidad pedida, el precio unitario y el tipo de pago. Si el pago es al contado,
se tiene un descuento de 6% en cualquiera de los casos. Calcular e imprimir el costo total del pedido
considerando el tipo de pago para cada cliente y el total que pagan al final del día N clientes. */
$subtotal=0;
$descuento =0;
do{ 
 echo "bienvenido!!!";
    echo "1. cuaderno \n";
    echo "2. revista \n";
    echo "3. libros \n";
    $opc = readline("seleccione una opcion");
    $cantidad = readline("cantidad de productos ");
    $precio = readline("precio del producto ");
    $tipooago = readline("tipo de pago: contado/ credito ");
    $totalapagar=0;
    $acumtotal=0;
    if (($tipooago == "contado"))
    $subtotal = $cantidad *$precio;
    switch ($opc)
    { case "1":
        $descuento =$subtotal*0.1;
        break;
    
    case "2":
        $descuento =$subtotal*0.16;
        break;

    case "3":
        $descuento =$subtotal*0.22;
        break;
default:
echo " digite una opcion una valida";
    }
    $totalapagar = $subtotal-$descuento;
    $acumtotal+=$totalapagar;
    $pregunta =readline("desea ingresar otro cliente ?  S/N");
    $pregunta =strtoupper($pregunta); //para convertir una palabra a mayuscula
}
while ($pregunta=="SI");


?>