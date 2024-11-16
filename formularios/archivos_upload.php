<?php

$nombre_usu = $_REQUEST['nombre'];
$archivos = $_FILES['archivo'] ?? [];

$contador = 0;
$errores_total = array();

// echo "<pre>";
//   print_r($archivos['name'][0]);
//   echo "</pre>";

  $numero_arch = count($archivos['name']);

  // echo "<br> $numero_arch";

  
  function cargar(int $i){

    global $nombre_usu, $errores_total;
    
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
        $errores["Extencion"] = "Extencion no permitida";
      }
      
      echo "<br>";
      
      // var_dump($tamaño_archivo);
      if ($tamaño_archivo > 2097152) {
        $errores["Tamaño"] = "El tamaño maximo permitido es de 2MB";
      }
      
      if (empty($errores)) {
        global $contador;
        $contador += 1;
        move_uploaded_file($temporales, "imagenes/$nombre_usu".$bandera[0].".$archivo_extension");
      }
      else{
        $errores_total["Archivo #" . ($i + 1)] = $errores; 
      }
      
    }else{
    echo "no envio archivo";
  }
}

// echo $type_archivo;
for ($i=0; $i < $numero_arch; $i++) { 
  cargar($i);
}

if ($contador >= 3){
  echo " <br> Se almacenaron correctamente $contador archivos";
}else{
  echo "<pre>";
    print_r($errores_total);
  echo "</pre>";
}