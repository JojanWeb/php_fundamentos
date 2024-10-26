<?php

$precio = $_REQUEST['precio'];

function farmacia($precio){
  $descuento = $precio * 0.1;
  $resultado = ["Descuento" => $descuento,
                    "Precio Final" => $precio - $descuento];

   return $resultado;
}

$resultado = farmacia($precio);

echo "<pre>";
print_r($resultado);
echo "</pre>";

// en una farmacia aplica al precio de los remedios el 10% de descuento, hacer un programa que ingrese el costo y calcule el descuento  y preico final
