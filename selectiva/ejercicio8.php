<?php
//1.VOLSKWAGEN
//2.TOYOTA
//3.HYUNDAI
//4.MAZDA
//DEFAULT:
//*NO APLICA EN NUESTRA PROMOCION DE DESCUENTO*/
$modelo="TOYOTA";
$precio=25000;
$descuento=0;
$total=0;
$modelo=strtoupper($modelo);

if($modelo=="VOLSKWAGEN"){$descuento=$precio*0.08;}
else if($modelo=="TOYOTA"){$descuento=$precio*0.09;}
else if($modelo=="HYUNDAI"){$descuento=$precio*0.05;}
 else{"NO APLICA EN NUESTRA PROMOCION DE DESCUENTO  <br>";}

 $total=$precio-$descuento;
 //salidas
 echo "MODELO DE CARRO:" . $modelo . "<br>";
 echo "PRECIO:" . $precio . "<br>";
 echo "DECUENTO:" . $descuento . "<br>";
 echo "TOTAL A PAGAR:" . $total . "<br>";
?>