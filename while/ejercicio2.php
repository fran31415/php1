<?php
/* En un supermercado una señora pone en su carrito los artículos que va tomando de los estantes. La señora
quiere asegurarse de que el cajero le cobre bien lo que ella ha comprado, por lo que cada vez que toma un
artículo anota su precio junto con la cantidad de artículos iguales que ha tomado y determina cuánto dinero
gastará en ese artículo; a esto le suma lo que irá gastando en los demás artículos, hasta que decide que ya tomó
todo lo que necesitaba. Ayúdale a esta señora a obtener el total de sus compras.*/
$numeroaticulos=0;
$precio=0;
$opcion="";
$total=0;
$acumulador=0;
$opcion =readline("¿desea iniciar las compras si o no?");
while ($opcion=="si") {
    $numeroaticulos =readline("¿cuantos articulos llevara?");
    $precio =readline("Escriba el precio del articulo :$");
    $total=$numeroaticulos*$precio;
    $acumulador+=$total;
    echo "el valor de la compra actual es de : $". $total;
    $opcion =readline("\n ¿desea seguir comprando si o no?");

}

echo"\n -----------el valor de las compras totales es de : \n $". $acumulador;
?>