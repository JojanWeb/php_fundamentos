<?php

/**
 * Estructura condicional simple
 * 
 * if (expresion){
 *  Condigo a ejecutar
 * }
 * 
 * if (expresion):
 *  Codigo a ejecutar
 * endif;
 * 
 */

 $edad = 18;
 $saludo = "Hola Persona";

 if ($edad >= 18) {
  echo "Hola, usted es mayor de edad";
 }

 echo "<br>";
 ?>

 <div>
  <?php if ($edad >= 18): ?>
      <h1> 
        <?= $saludo ?> 
      </h1>
  <?php endif; ?>
 </div>

 <!-- Realice un programa donde se pida un numero y si el numero es par, diga que es par -->
  <?php $numero = 2; ?>

 <div>
  <?php if ($numero % 2 === 0): ?>
    <h1> El numero es PAR</h1>
  <?php endif; ?>
 </div>

 <!-- En un almacen se hace un 20% de descuento a los clientes cuya compra supere los 100$ ¿cual sera la cantidad que pagara una persona por su compra? -->
  <?php $compra = 10000; ?>

 <div>
    <h1> 
      <?php
      if ($compra > 100) :
        echo $compra - ($compra * 0.2);
      endif;
      ?>
    </h1>
 </div>


