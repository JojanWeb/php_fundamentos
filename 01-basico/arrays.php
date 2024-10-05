<?php

$estudiantes = array('Carlos', 'Jose', 'Maria', 'Luis');
// $estudiantes = array('Carlos', 'Jose', 'Maria', 'Luis');

echo "<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo "</pre>";

echo $estudiantes[2];


$aprendiz = [
  'nombre' => 'Johan',
  'apellido' => 'Delgado',
  'edad' => 15,
  'deudas' => '3.700.000.00'
];

echo "<pre>";
print_r($aprendiz);
echo "</pre>";

$tutor = [
  'nombre' => 'John Freddy',
  'Apellido' => 'Becerra',
  'edad' => 38,
  'direccion' => [
    'ciudad' => 'Bucaramanga',
    'barrio' => 'San francisco',
    'nomemclatura' => 'carrera 25 No 18 - 65',
    'zipcode' => 666545
  ],
  'habilidades' => [
    'git', 'html', 'css', 'js', 'php', 'python', 'sql'
  ]
];

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo "<pre>";
print_r($tutor['direccion']['nomemclatura']);
echo "</pre>";

$tutor['habilidades'][3] = 'JavaSript';

echo "<pre>";
print_r($tutor['habilidades']);
echo "</pre>";

$tutor['direccion']['departamento'] = 'Santander';

echo "<pre>";
print_r($tutor['direccion']);
echo "</pre>";

unset($tutor['habilidades'][4]);

echo "<pre>";
print_r($tutor['habilidades']);
echo "</pre>";

echo count($tutor['habilidades']);