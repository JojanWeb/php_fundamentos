<!-- escriba una funcion que tome una cadena, debe retornar una nueva cadena sin vocales -->

<?php

function cadena_sin_vocales($palabra){
  $palabra = strtolower($palabra);
  ECHO $palabra;
  $vocales = str_replace (array("a","e","i","o","u","á","é","í","ó","ú"),
    array("","","","","","","","","",""),
    $palabra);

  return $vocales;
}

$resultado = cadena_sin_vocales("HOLÁ");

// echo $resultado;

Edixon David Castillo Torres 1140424793


crea una funcion para calcular cuantas silabas tiene una palabra