<!-- Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php
 
 $posts = [

  '13/18/2020' => [
    [
      'title' => 'Post 1',
      'author' => 'Steve Jobs',
      'text' => 'Testo post 1'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Steve Jobs',
      'text' => 'Testo post 2'
    ],
  ],
  '28/04/2021' => [
    [
      'title' => 'Post 3',
      'author' => 'Steve Jobs',
      'text' => 'Testo post 3'
    ]
  ],
  '17/11/2021' => [
    [
      'title' => 'Post 4',
      'author' => 'Steve Jobs',
      'text' => 'Testo post 4'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Steve Jobs',
      'text' => 'Testo post 5'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Steve Jobs',
      'text' => 'Testo post 6'
    ]
  ],
];

$keys = array_keys($posts);
var_dump($keys);
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
     <section class="snack3">
    <h2>Snack 3</h2>

    <?php for ($i = 0; $i < count($keys); $i++) :
      $key = $keys[$i]; ?>

      <h3><?php echo $key; ?></h3>

      <?php for ($j = 0; $j < count($posts[$key]); $j++) :
        
        $post = $posts[$key][$j]; ?>

        <h4><?php echo $post['title']; ?></h4>
        <p><?php echo $post['text']; ?></p>

    <?php
      endfor;
    endfor;


    ?>
  </section>
</body>
</html>