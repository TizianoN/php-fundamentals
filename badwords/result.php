<?php 

// controllo l'esistenza del parametro GET paragraph
$paragraph = $_GET["paragraph"] ?? "";
$censored_word = $_GET["censored_word"] ?? "";

// calcolo la lunghezza del paragrafo
$paragraph_length = strlen($paragraph);

// censuro il paragrafo
$censored_paragraph = str_replace($censored_word, "***", $paragraph);

// calcolo la lunghezza del paragrafo
$censored_paragraph_length = strlen($censored_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Badwords - form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <?php if(!empty($paragraph)) : ?>

        <h3>Il paragrafo originale è</h3>
        <p><?= $paragraph ?></p>
        <p>
          La lunghezza del paragrafo originale è: 
          <strong><?= $paragraph_length ?></strong>
        </p>
        <hr>

        <h3>Il paragrafo censurato è</h3>
        <p><?= $censored_paragraph ?></p>
        <p>
          La lunghezza del paragrafo censurato è: 
          <strong><?= $censored_paragraph_length ?></strong>
        </p>
        <?php else : ?>
          
        <h2>Errore</h2>
        <p>Parametri non ricevuti</p>

      <?php endif ?>
    </div>

  </body>
</html>