<?php

/* 
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/


$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui minus quae, ut tenetur doloremque molestias corporis laboriosam repudiandae modi tempore deleniti neque assumenda repellat nostrum quod, deserunt, aut quidem. Repellendus quaerat ea accusamus magnam officia impedit molestias sit repudiandae, culpa quisquam voluptatibus omnis, consectetur recusandae similique maiores esse ex vero. Cum omnis, sunt obcaecati dicta illum quia, laboriosam repellat quaerat ratione nostrum quas odio animi! Laudantium molestias, necessitatibus impedit enim debitis inventore commodi ex facere, nobis quo odio nam praesentium eveniet itaque. Quod esse rerum error, earum quo quae reprehenderit eveniet velit vel facere facilis natus ea culpa porro sunt at ex odit ut eaque sapiente consequuntur, magnam laudantium incidunt? Tenetur, delectus. Consectetur placeat eveniet ad recusandae deserunt illo. Impedit aperiam voluptatibus ipsa, et obcaecati consectetur tempore nam vero eaque maxime? Hic, facere. Molestias modi corrupti nobis necessitatibus! Esse eveniet laboriosam exercitationem est nobis in, assumenda enim neque accusantium eum qui velit possimus at ipsum illo minima? Autem accusamus labore dolorum quis iusto ad. Commodi, sint quaerat. Sunt, ab voluptatibus id quos dolorem, numquam laboriosam, officiis rerum quisquam error sapiente repudiandae possimus distinctio harum suscipit necessitatibus beatae alias sit accusamus modi. Voluptas commodi assumenda nam odit corporis, quibusdam nostrum aut.';


$paragraphs = explode('.', $paragraph);
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
    <section class="snack_5">
    <h2>Snack 5</h2>

    <?php for ($i = 0; $i < count($paragraphs); $i++) : ?>

      <p><?= $paragraphs[$i]; ?>.</p>

    <?php endfor; ?>
  </section>
</body>
</html>