<?php

function calculadora($a, $b){

  try{

    if ($b === 0 || $a === 0)
    {
      throw new Exception('Division por cero');
    }else if (!is_int($a) || !is_int($b))
    {
      throw new Exception('Cadenas de texto detectadas');
    }

    $suma = $a + $b;
    $resta = $a - $b;
    $multiplicacion = $a * $b;
    $division = $a / $b;

    return array(
    "Suma" => $suma,
    "Resta" => $resta,
    "Multiplicacion" => $multiplicacion,
    "Division" => $division);

  }catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  }
}

$resultados = calculadora("hola", 5);

echo "<pre>";
print_r($resultados);
echo "</pre>";

// // si los alumnos de un grupo de han divido en 2 grupos A y B, de acuerdo con el sexo y el nombre, el grupo A esta formado por mujeres con nombre anterior a la N, y los Hombres con nombre posterior a la N y el B por el resto;

// // nombre, sexo;
$hola = "hola";

echo $hola[1];

