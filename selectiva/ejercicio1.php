<?php
/*Dado como dato el sueldo de un trabajador, aplique un aumento del 15% si su sueldo es mayor o igual a $550.
Imprimir en ese caso el nuevo sueldo del trabajador. */

    $sueldo=50;
    $aumento=0;
   

    if($sueldo>=550){$aumento=$sueldo*0.15;}
    else{$aumento=0;}
    echo "EL SUELDO SIN AUMENTO ES DE $: " . $sueldo."<br>";
    echo "AUMENTO: " . $aumento."<br>";
    echo "EL SUELDO CON AUMENTO ES DE $: " . ($sueldo+$aumento)."<br>";

    
?>