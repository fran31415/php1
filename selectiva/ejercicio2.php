<?php
/*Dado el sueldo de un empleado, encontrar el nuevo sueldo si obtiene un aumento del 10% si su sueldo es
inferior a $600, en caso contrario no tendrá aumento.. */

    $sueldo=500;
    $aumento=0;
   

    if($sueldo<600){$aumento=$sueldo*0.10;}
    else{$aumento=0;}
    echo "EL SUELDO SIN AUMENTO ES DE $: " . $sueldo."<br>";
    echo "AUMENTO: " . $aumento."<br>";
    echo "EL SUELDO CON AUMENTO ES DE $: " . ($sueldo+$aumento)."<br>";

    
?>