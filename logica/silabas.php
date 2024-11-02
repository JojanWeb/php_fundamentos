<?php

// crea una funcion para calcular cuantas silabas tiene una palabra

$texto = "!";

// $expresion = "/PRUEBA/i";
// $expresion = "/^PRUEBA/i";
// $expresion = "/l[aeiou]{2,4}r/";
// $expresion = "/[0-9]/";
// $expresion = "/[\d]/";
// $expresion = "/[A-Z]{4}/";  
$expresion = "/./";  

$RESULTADO = preg_match_all($expresion, $texto,$coincidencias, PREG_OFFSET_CAPTURE);

if ($RESULTADO){
  echo "Si tiene resultado";
}else{
  echo "NO tiene resultado";
}

echo "<pre>";
print_r($coincidencias);
echo "</pre>";





// $passwd = "r69@gl.cm";
// $contraseñaR = "/{1,20}@[A-Za-z].[A-Za-z]/";

// $contra = preg_match_all($contraseñaR, $passwd,$coincide, PREG_OFFSET_CAPTURE);

// echo "<pre>";
// print_r($coincide);
// echo "</pre>";