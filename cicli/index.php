<?php 

$li_classes = "text-danger";

	
$animals_all = [
  "mammals" => [
    "cow",
    "pig",
    "horse",
    "dog"
  ],
  "birds" => ["duck", "chicken"]
];

// foreach($animals_all as $animal_family) {
//   // var_dump($animal_family);

//   foreach($animal_family as $animal) {
//     var_dump($animal);
//   }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
  />
</head>
<body>
  <ul>
  <?php foreach($animals_all as $animal_family_key => $animal_family) : ?>
    <li><h3>Famiglia: <?= $animal_family_key ?></h3></li>

    
    <?php foreach($animal_family as $animal) : ?>
      <li><?= $animal ?></li>
    <?php endforeach ?>


  <?php endforeach ?>
  </ul>
</body>
</html>