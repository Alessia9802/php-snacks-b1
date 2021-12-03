<?php
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
    <form action="./file_2.php" method="get" <?php echo $invitati == $invitati ? "ok" : "ko" ?>" >
       <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Inserisci Nome">
         <input type="submit" value="Invia dati">
    </form>
</body>
</html>