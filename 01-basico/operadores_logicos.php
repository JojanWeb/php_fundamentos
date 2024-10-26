<?php

/**
 * ------------Simbolo-------------------Nombre--------
 *             AND                       and (y)
 *             OR                        or (o)                   
 *             !                         not (no)
 *             &&                        and (y)
 *             ||                        or (o)
 * 
 * 
 * ------------ Tabla de operadores AND
 * Expresion 1                Expresion 2         Resultado
 *    false         &&          false               false
 *    false         &&          true                false
 *    true          &&          true                true
 *    true          &&          false               false
 */

 $valor1 = 7;
 $valor2 = 2;

 var_dump($valor1 == 7 && 2 > 3);
 echo "<br>";
 var_dump($valor1 == 7 && 9 > 3);


 /**
  * ---------- Tabla de operador OR
 * Expresion 1                Expresion 2         Resultado
 *    false          ||         false               false
 *    false          ||         true                true
 *    true           ||         false               true
 *    true           ||         true                true
 */

 var_dump($valor1 == 7 or 2 > 3);
 echo "<br>";
 var_dump($valor1 == 5 || 9 > 3);
 echo "<br>";
 var_dump($valor1 == 5 || 1 > 3);

/**
 * ------------ Tabla de operador NOT
 * 
 * Expresion 1                Resultado
 * false                        true
 * true                         false
 * 
 */

 var_dump(!($valor1 >= $valor2));