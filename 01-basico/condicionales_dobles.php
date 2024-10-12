<?php

/**
 * Estructura condicional doble (if - else)
 * 
 * if (expresion){
 *  [Codigo a ejecutar si la expresion es verdadera]
 * }else{
 *  Codigo si es falsa
 * }
 * 
 * if (expresion):
 *  Si es verdadera
 * else:
 *  Si es falsa
 * endif;
 */

 if (1 > 7){
  echo "Condicion evalua a verdadero";
 }else{
  echo "Condicion evalua a false";
 }

 echo "<br>";

 if (9 == 12):
  echo "Condicion evalua a verdadero";
 else:
  echo "Condicio evalua a false";
 endif;

 echo "<br>";

//  calcular el total que una persona debe pagar en un montallantas, el precio de cada llanta es de 800 si se compra menos de 5 llantas
//  y de 700 si se compran 5 o mas
$cantidad = 4;

if ($cantidad < 5){
  echo $cantidad * 800;
}else{
  echo $cantidad * 700;
}

 echo "<br>";

// Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobara si su promedio de 3 calificaciones o es mayor o igual a 3.0, caso contrario reprueba

$calif1 =  3;
$calif2 =  3;
$calif3 =  3;

if (($calif1 + $calif2 + $calif3) / 3 >= 3.0):
  echo "APROBADO";
else:
  echo "REPROBADO";
endif;

 echo "<br>";

// (1 > 7) ? echo "Mayor" : echo "Menor";

/**
 * Operador ternario
 *  operador ? true : false;
 */

$a = 8;
$b = 7;
$resultado = ($a > $b) ? $a*$b : $a/$b;

echo $resultado;


