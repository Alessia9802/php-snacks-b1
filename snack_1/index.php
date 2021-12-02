<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
 $partita_uno =[
    'squadraCasa' => 55,
    'squadraOspite'=> 60,
];

echo $partita_uno;
var_dump($partita_uno, $partita_uno['squadraCasa']);
var_dump($partita_uno, $partita_uno['squadraOspite']);

$partita_due =[
    'squadraCasa' => 50,
    'squadraOspite'=> 30,
];

var_dump($partita_due, $partita_due['squadraCasa']);
var_dump($partita_due, $partita_due['squadraOspite']);

echo $partita_due;

$partita_tre =[
    'squadraCasa' => 70,
    'squadraOspite'=> 20,
];

echo $partita_tre;
var_dump($partita_tre, $partita_tre['squadraCasa']);
var_dump($partita_tre, $partita_tre['squadraOspite']);

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