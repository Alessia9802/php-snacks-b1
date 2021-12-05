<?php

/*
4 
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$numbers_array = [];

while (count($numbers_array) < 15) {
  $random_number = rand(1, 100);
  if (!in_array($random_number, $numbers_array)) {
    // $numbers_array[] = $random_number
    array_push($numbers_array, $random_number);
  }
}
echo '<pre>';
var_dump($numbers_array);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>