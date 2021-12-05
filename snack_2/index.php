<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php


if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['mail'])) {
  $name = $_GET['name'];
  $age = intval($_GET['age']);
  $mail = $_GET['mail'];

  var_dump($name, $age, $mail);

  if (strlen($name) > 3 &&  is_numeric($age) && strpos($mail, '@') && strpos($mail, '.')) {
    echo 'Accesso Riuscito';
  } else {
    echo 'Accesso negato!';
  }
}
   
?>