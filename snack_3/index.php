<!-- Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php
 
 $array = [
     [
         "date" => "01-01-2007",
         "post" => "Post_1"
     ],
     [
         "date" => "02-06-2008",
         "post" => "Post_2"
     ],
     [
         "date" => "03-07-2009",
         "post" => "Post_3"
     ],
     [
         "date" => "14-09-2019",
         "post" => "Post_4"
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
    <p> <?php echo $array ?> </p>
</body>
</html>