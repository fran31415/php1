<?php
/*Resolver el problema anterior considerando además el promedio de la altura y del peso en función del sexo. Es
decir, obtener el promedio de la altura y peso de la población femenina y masculina.*/
$peso=0;
$altura=0;
$sexo="";
$contadorh=0;
$contadorm=0;
$acumuladorpesoh=0;
$acumuladorpesom=0;
$acumuladoralturah=0;
$acumuladoralturam=0;

for ($i=1; $i <=50 ; $i++) { 
    echo "\n ";
    $sexo =readline("escriba Masculino(M) o Femenino(F)  n° ". $i);
    $sexo = strtoupper($sexo);
    $peso =readline("ingrese el peso de la persona  n° ". $i. " en kilogramos");
    $altura =readline("ingrese la altura de la persona  n° ". $i. " en metros");
    echo "\n ";
    if($sexo=="F"){ $contadorm++;
        $acumuladoralturam+=$altura;
        $acumuladorpesom+=$peso;}
        
        else if ($sexo=="M") { $contadorh++;
            $acumuladoralturah+=$altura;
            $acumuladorpesoh+=$peso;}
        
        else {echo "escriba el genero presionando F o M";}
    }
    echo "__________________analisis de datos_________________________";
    echo "\n -------------- m u j e r e s----------- \n";
    echo "\n el total de mujeres: ". $contadorm;
    echo "\n el promedio de peso en kg es : ".  ($acumuladorpesom/$contadorm);
   echo "\n la altura promedio de las personas en m es" . ($acumuladoralturam/$contadorm);
   echo "\n -------------- h o m b r e s----------- \n";
   echo "\n el total de hombres son : ". $contadorh;
   echo "\n el promedio de peso en kg es : ".  ($acumuladorpesoh/$contadorh);
  echo "\n la altura promedio de las personas en m es" . ($acumuladoralturah/$contadorh);

?>