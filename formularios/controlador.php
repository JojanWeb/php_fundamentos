<?php

  $nombre = "";
  $apellido = "";
  $edad = "";
  $telefono = "";
  $errores = [];

  if (isset($_REQUEST['nombre']) && empty($_REQUEST['nombre'])){
    array_push($errores, "El campo nombre es requerido");
  }

  if (isset($_REQUEST['apellido']) && empty($_REQUEST['apellido'])){
    array_push($errores, "El campo apellido es requerido");
  }

  if (isset($_REQUEST['edad']) && empty($_REQUEST['edad'])){
    array_push($errores, "El campo edad es requerido");
  }

  if (isset($_REQUEST['numero']) && empty($_REQUEST['numero'])){
    array_push($errores, "El campo telefono es requerido");
  }

  if (count($errores) > 0) {

    echo "<ul>";
    for ($i=0; $i < count($errores); $i++) { 
      echo "<li>".$errores[$i]."</li>";
    }
    echo "</ul>";
  }
  else{
    echo "<ul>";
      echo "<li>".$_REQUEST['nombre']."</li>";
      echo "<li>".$_REQUEST['apellido']."</li>";
      echo "<li>".$_REQUEST['edad']."</li>";
      echo "<li>".$_REQUEST['telefono']."</li>";
    echo "</ul>";
  }

  // $contador = 0;
  // if (isset($_REQUEST['html'])){
  //   $contador += 1;
  // }else if (isset($_REQUEST['python'])){
  //   $contador += 1;
  // }else if (isset($_REQUEST['java'])){
  //   $contador += 1;
  // }else if (isset($_REQUEST['php'])){
  //   $contador += 1;
  // }

  // if ($contador < 2){
  //   echo "<h1> SELECCIONE 2 O MAS LENGUAJES </h1>";
  // }


  print_r( $_REQUEST['checkbox']);

  // echo count($_REQUEST['checkbox']);

  if (count($_REQUEST['checkbox']) < 2 || isset($_REQUEST['checkbox'])) {
    echo "<h1> SELECCIONE 2 O MAS LENGUAJES </h1>";
  }