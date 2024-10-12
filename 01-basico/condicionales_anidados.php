<?php

/**
 * 
 * Estructura
 * if (?){
 *    if(?){
 *        Codigo a ejecutar
 *    }else{
 *        Codigo a ejecutar
 *    }
 * }
 * 
 */

 $a = 300;
 $b = 300;
 $c = 300;
 if ($a > $b && $a > $c){
  echo $a;
 }else{
   if ($b > $c){
    echo $b;
  }else{
    echo $c;
  }
 }

 echo "<br>";

 echo ($a > $b && $a > $c) ? $a : 
    (($b > $c) ? $b :
     (($c > $b) ? $c: 
    (($a == $b && $a == $c) ? "Todos son iguales" : "2 son iguales")));

 echo "<br>";

 if ($a > $b && $a > $c): 
  echo $a;
 else:
  if ($b > $c):
    echo $b;
  else:
    echo $c;
  endif;
endif;

$dia = 5;

 echo "<br>";

echo ($dia == 1) ? "Lunes": 
  (($dia == 2) ? "Martes": 
  (($dia == 3) ? "Miercoles":
  (($dia == 4) ? "Jueves":
  (($dia == 5) ? "Viernes":
  (($dia == 6) ? "Sabado" : "Domingo")))));

 echo "<br>";

  if ($dia == 1){
    echo "Lunes";
  }else if ($dia == 2){
    echo "Martes";
  }else if ($dia == 3){
    echo "Miercoles";
  }else if ($dia == 4){
    echo "Jueves";
  }else if ($dia == 5){
    echo "Viernes";
  }else if ($dia == 6){
    echo "Sabado";
  }else{
    echo "Domingo";
  }
