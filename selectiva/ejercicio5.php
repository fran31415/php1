<?php

    $horas=46;
    $PagoNormal=0;
    $horasExtras=0;
    $pagoExtra=0;

    if($horas<=40){$PagoNormal=$horas*4;}
    else{$pagoNormal=40*4; $horasExtras=$horas-40;
    $pagoExtra=$horasExtras *6;}

    $totalpago=$pagoNormal+$pagoExtra;
    echo "CANTIDAD DE HORAS: " . $horas."<br>";
    echo "HORAS EXTRAS: " . $horasExtras."<br>";
    echo "PAGO NORMAL DE LAS PRIMERAS 40 HORAS: " . $PagoNormal."<br>";
    echo "CANTIDAD DE HORAS: " . $horas."<br>";

    
?>