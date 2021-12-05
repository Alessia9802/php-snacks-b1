<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php


$partite = [
    [
        "squadraCasa" => "Lakers",
        "squadraOspite" => "Chicago Bulls",
        "squadraCasa_punti" => rand(1, 100),
        "squadraOspite_punti" => rand(1, 100)
    ],
    [
        "squadraCasa" => "Golden State",
        "squadraOspite" => "Olimpia Milano",
        "squadraCasa_punti" => rand(1, 100),
        "squadraOspite_punti" => rand(1, 100)
    ],
    [
        "squadraCasa" => "Boston Celtics",
        "squadraOspite" => "Miami Heats",
        "squadraCasa_punti" => rand(1, 100),
        "squadraOspite_punti" => rand(1, 100)
    ],
    [
        "squadraCasa" => "Phoenix Suns",
        "squadraOspite" => "Indiana Pacers",
        "squadraCasa_punti" => rand(1, 100),
        "squadraOspite_punti" => rand(1, 100)
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

    <section class="snack1">
    <h2>Snack 1</h2>

    <?php for ($i = 0; $i < count($partite); $i++) :
      $partita = $partite[$i];
      # Olimpia Milano - Cantù | 55-60 
    ?>
      <p><?php echo $partita['squadraCasa']  . ' - ' . $partita['squadraOspite'] . ' | ' .  $partita['squadraCasa_punti'] . ' - ' . $partita['squadraOspite_punti'] ?> 
    </p>

    <?php endfor; ?>

  </section>
</body>
</html>