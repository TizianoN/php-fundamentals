<?php 
$user_firstname = "Tiziano";
$user_lastname = "Nicolai";

$user_fullname = $user_firstname;
$user_fullname .= " ";
$user_fullname .= $user_lastname;

// $lorem = "lorem ipsum. dolor sit amet. Consectetur adipisicing elit";
// $lorem_ucfirst = ucfirst($lorem);
// var_dump($lorem);
// var_dump($lorem_ucfirst);

// $lorem = "lorem ipsum. dolor sit amet. Consectetur adipisicing elit";
// $lorem_ucwords = ucwords($lorem);
// var_dump($lorem);
// var_dump($lorem_ucwords);

// $lorem = "Lorem ipsum. Dolor sit amet. Consectetur adipisicing elit";
// $word = "doLoR";
// $contains_the_word = str_contains(strtolower($lorem), strtolower($word));
// var_dump($contains_the_word);

// $lorem = "Lorem ipsum. Dolor sit amet. Consectetur adipisicing elit";
// var_dump(strlen($lorem));

// $lorem = "Lorem ipsum. Dolor sit amet. Consectetur adipisicing elit";
// $lorem_replaced = str_replace(". ", " - ", $lorem);
// var_dump($lorem);
// var_dump($lorem_replaced);

// $lorem = "    Lorem ipsum. Dolor sit amet. Consectetur adipisicing elit       ";
// $lorem_trimmata = trim($lorem);
// var_dump($lorem);
// var_dump($lorem_trimmata);

// $lorem = "Lorem ipsum. Dolor sit amet. Consectetur adipisicing elit";
// $lorem_array = explode(". ", $lorem);
// var_dump($lorem_array);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <body>
    <h1>Ciao <?= $user_fullname ?></h1>
    
  </body>
</html>
