<?php

/* 

Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/
$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];

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
  <section class="sn6">

    <h2>Snack 6</h2>


    <?php
    $keys = array_keys($db);
    for ($i = 0; $i < count($keys); $i++) {
      $key = $keys[$i];
    ?>

      <div style="background-color: <?php echo $key === 'teachers' ? 'grey' : 'green' ?> ">

        <h3><?= $key; ?></h3>

        <?php for ($j = 0; $j < count($db[$key]); $j++) {
          $user = $db[$key][$j];
        ?>
          <p><?= $user['name']  . ' '  . $user['lastname'] ?></p>

        <?php
        }
        ?>


      </div>


    <?php }

    ?>
  </section>  
</body>
</html>