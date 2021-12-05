<?php

/* 
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/


$students = [
  [
    'name' => 'Alessandro',
    'lastname' => 'Del re',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ],
  [
    'name' => 'Chiara',
    'lastname' => 'Papagni',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ],
  [
    'name' => 'Valentna',
    'lastname' => 'Trebbi',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ],
  [
    'name' => 'Andrea',
    'lastname' => 'Bellatreccia',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ],
  [
    'name' => 'Gaetano',
    'lastname' => 'Sciurti',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ]

]
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
    <div class="sn7">
    <h2>Snack 7</h2>


    <?php for ($i = 0; $i < count($students); $i++) : ?>
      <h4><?= $students[$i]['name'] . ' ' . $students[$i]['lastname'] ?> </h4>
      <p> <?= array_sum($students[$i]['votes']) / count($students[$i]['votes'])  ?> </p>

    <?php endfor; ?>
  </div>
</body>
</html>