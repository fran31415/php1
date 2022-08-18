<?php
/*En un hospital se ingresa un paciente cobrándole $25 diarios por hospitalización. Si el paciente es operado
deberá además cancelar $1000 por los gastos más 20% del pago total por honorarios del doctor. Dados n días
que estuvo el paciente, escriba el nombre, número de días que estuvo ingresado y el detalle de todos los pagos
hechos. */

    $ndias=5;
    $nombre="marcos Daniel Lozano";
    $operado="si";
    $gastos=25*$ndias;
    $hono =$gastos*0.2;
    $fijo=1000;
    if($operado=="si"){$total=$hono+$gastos+$fijo;}
    else if($operado=="no"){ $total=$gastos;}
    echo "Nombre del paciente " . $nombre."<br>";
    echo "los dias que se estuvo en el hospital son : " . $ndias."<br>";
    echo "los gatos por los dias en el hospital : $" . ($ndias*25). "<br>";
    echo "fue operado: " . $operado."<br>";
    echo "los gastos totales son de : $" . $total."<br>";
    
?>