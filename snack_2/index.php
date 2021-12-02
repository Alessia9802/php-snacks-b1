<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

#var_dump($_GET['email']);

$email = $_GET['email'];
$name = $_GET['name'];
$age = $_GET['age'];

var_dump(strpos($email,'@'), strpos($email,'.'));

if(strpos($email,'@') && strpos($email,'.')){
    $result='Accesso riuscito';
} else{
    $result='Accesso negato';
}

if(strlen($name) > 3){
     $nameLength = "è maggiore di tre caratteri";
} else{
    $nameLength = "Non è maggiore di tre caratteri"
}

if($age <= 0){
    $num = "è un numero";
}else{
    $num="Non è un numero";
}
   
?>