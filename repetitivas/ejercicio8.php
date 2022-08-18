<?php
/*Dado el peso, la altura y el sexo de 50 personas que pertenecen a Sonsonate, obtenga el promedio del peso y
de la altura de esta población.*/
$peso=0;
$altura=0;
$sexo="";
$contador=0;
$acumuladorpeso=0;
$acumuladoraltura=0;

for ($i=1; $i <=3 ; $i++) { 
    echo "\n ";
    $peso =readline("ingrese el peso de la persona  n° ". $i. " en libras");
    $altura =readline("ingrese la altura de la persona  n° ". $i. " en metros");
    $sexo =readline("escriba Masculino(M) o Femenino(F)  n° ". $i);
    $contador++;
    $acumuladoraltura+=$altura;
    $acumuladorpeso+=$peso;

    }
   echo "\n el peso promedio de las personas en kg es :" . ($acumuladorpeso/$contador);
   echo "\n la altura promedio de las personas en m es" . ($acumuladoraltura/$contador);
   
?>