<?php


// while ($a <= 10){
//   echo "$a <br>";
//   $a++;
// }
// $a = 2;
// $tabla = 10;
// $divisible = 0;

// while ($a <= 10){ 
//   $a++;
//   if ($tabla % $a == 0){
//     $divisible += 1;
//   }
// }

// $a = 1;

// if ($divisible > 2){
//       while ($a <= 10){
//         echo "$tabla * $a =".$tabla * $a."<br>";
//         $a++;
//       }
//     }

// $tabla = 10;
// $c = 1;

// while ($tabla <= 100){
//   while ($c <= 10){
//     echo "$tabla * $c = ".$tabla * $c."<br>"; 
//     $c++;
//   }
//   $tabla+= 10;
//   $c = 1;
//   echo "<br> <br>";
// }

// function esPrimo($numero) {
//   $a = 1;
//   $divisible = 0;
//   while ($a <= $numero){
//     echo $numero % $a;
//     if ($numero % $a == 0){
//       $divisible += 1;
//     }
//     $a++;
//   }
//   if ($divisible > 2){
//       return false;
//     }
//     else{
//       return true;
//     }
// }

// function esPrimo($numero) {
//   $a = 2;
//   $primo = true;
//   while ($a < $numero/2 && $primo){
//     if ($numero % $a == 0){
//       $primo = false;
//     }
//     $a++;
//   }
//   return $primo;
// }

function esPrimo($numero) {
  $a = 2;
  $primo = true;
  do{
    if ($numero % $a == 0){
      $primo = false;
    }
    $a++;
  }while ($a < $numero/2 && $primo);
  return $primo;
}

$primo = esPrimo(729000) ? "Si" : "No";

echo $primo;