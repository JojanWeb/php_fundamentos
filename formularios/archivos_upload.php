<?php

$nombre_usu = $_REQUEST['nombre'];
$archivos = $_FILES['archivo'] ?? [];

echo "<pre>";
  print_r($archivos['name'][0]);
  echo "</pre>";

  $numero_arch = count($archivos['name']);

  echo "<br> $numero_arch";

  for ($i=0; $i < $numero_arch; $i++) { 
    # code...
  }

function cargar(){
  if (isset($_FILES['archivo'])){
    $errores = array();

    $temporales = $_FILES['archivo']['tmp_name'][$i];
    $nombre_archivo = $_FILES['archivo']['name'][$i];
    $tamaño_archivo = $_FILES['archivo']['size'][$i];
    $type_archivo = $_FILES['archivo']['type'][$i];
    $error_archivo = $_FILES['archivo']['error'][$i];

    $bandera = explode('.', $nombre_archivo);
    $archivo_extension = strtolower(end($bandera));
    $extensiones = array("jpeg","jpg","png");

    // echo $archivo_extension;

    if (!in_array($archivo_extension,$extensiones)){
      $errores[] = "Extencion no permitida";
    }

    echo "<br>";

    // var_dump($tamaño_archivo);
    if ($tamaño_archivo > 2097152) {
      $errores[] = "El tamaño maximo permitido es de 2MB";
    }

    if (empty($errores)) {
      move_uploaded_file($temporales, "imagenes/$nombre_usu".$bandera[0].".$archivo_extension");
    }
    else{
      echo "<pre>";
        print_r($errores);
      echo "</pre>";
    }

  }else{
    echo "no envio archivo";
  }
}

// echo $type_archivo;