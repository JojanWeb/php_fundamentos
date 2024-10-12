<?php

/**
 * 
 * Operadores de incremento y decremento
 * 
 * Simbolo                Nombre
 *   ++                   Incremento
 *   --                   Decremento
 * 
 * Ejemplo
 * 
 *  ++$variable           Pre-incremento  (incremento unario)
 *  --$variable           Pre-decremento
 * 
 * 
 */

 $numero = 10;

 echo "Pre incremento ".++$numero; //Incrementa la variable primero y luego realiza la operacion
 
 echo "<br>";

 echo "Post incremento ".$numero++;  // Primero realiza la operacion y luego incremento

 echo "<br>";
 echo $numero;

 echo "<br>";

 echo "Pre decremento ".--$numero;  // Primero resta el valor y luego realiza la operacion

 echo "<br>";

 echo "Post decremento ".$numero--; //Primero realiza la operacion y luego resta el valor

 echo "<br>";


 $resultado = ++$numero;

 echo $resultado;

 echo "<br>";

 $resultado = $numero++; //Primero se le asigna $numero y luego $numero se incrementa
 echo "Linea 51 ¿?".$resultado;