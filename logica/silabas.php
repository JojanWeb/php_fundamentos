<?php

// crea una funcion para calcular cuantas silabas tiene una palabra

$texto = "AaDsSoO1a345";

// $expresion = "/PRUEBA/i";
// $expresion = "/^PRUEBA/i";
// $expresion = "/l[aeiou]{2,4}r/";
// $expresion = "/[0-9]/";
// $expresion = "/[\d]/";
// $expresion = "/[A-Z]{4}/";  
// $expresion = "/./";  

// $RESULTADO = preg_match_all($expresion, $texto,$coincidencias, PREG_OFFSET_CAPTURE);

// if ($RESULTADO){
//   echo "Si tiene resultado";
// }else{
//   echo "NO tiene resultado";
// }

// echo "<pre>";
// print_r($coincidencias);
// echo "</pre>";

// $expresion = "/(?=(?:.*[A-Z]){4})(?=(?:.*\d){4})/";  
$expresion = "/((?:.*?[A-Z]){4}).*((?:.*?\d){4})/";  

$RESULTADO = preg_match_all($expresion, $texto,$coincidencias, PREG_OFFSET_CAPTURE);

if ($RESULTADO){
  echo "Si tiene resultado";
}else{
  echo "NO tiene resultado";
}

echo "<pre>";
print_r($coincidencias);
echo "</pre>";


// if (preg_match('/^(?=(?:.*[A-Z]){4})(?=(?:.*\d){4})/', $texto)) {
//     echo "El texto tiene al menos 4 letras mayúsculas y 4 números.";
// } else {
//     echo "El texto no cumple con los requisitos.";
// }



// $passwd = "r69@gl.cm";
// $contraseñaR = "/{1,20}@[A-Za-z].[A-Za-z]/";

// $contra = preg_match_all($contraseñaR, $passwd,$coincide, PREG_OFFSET_CAPTURE);

// echo "<pre>";
// print_r($coincide);
// echo "</pre>";