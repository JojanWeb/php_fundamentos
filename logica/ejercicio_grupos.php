<?php

$nombre =  $_REQUEST['nombre'];
$sexo = $_REQUEST['sexo'];


function grupo($nombre, $sexo)
{
  if (((strtoupper($nombre[0]) <= "N") && $sexo == 'mujer') || 
  ((strtoupper($nombre[0]) >= "N") && $sexo == 'hombre'))
  {
    return "GRUPO A";
  }
  else{
    return "GRUPO B";
  }
}

$grupo = grupo($nombre, $sexo);
echo $grupo;
// // si los alumnos de un grupo de han divido en 2 grupos A y B, de acuerdo con el sexo y el nombre, el grupo A esta formado por mujeres con nombre anterior a la N, y los Hombres con nombre posterior a la N y el B por el resto;

// // nombre, sexo;