<?php 

$received_password = $_POST["password"] ?? "";
$received_username = $_POST["username"] ?? "";

$form_sent = !empty($_POST);
$is_user_logged = false;

if($form_sent) {
  $correct_password = "boolean";
  if($correct_password === $received_password) {
    $is_user_logged = true;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agenzia viaggi Vattelappesca</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container py-5">
      <?php if($is_user_logged) : ?>
        <h1>Benvenuto utente!</h1>
        <h2>Scopri <?= $_POST["destination"] ?></h2>
        <a href="/travel_agency">Torna indietro</a>
      <?php else : ?>
        <h1>Scopri informazioni sulle nostre mete</h1>
        <form method="POST" autocomplete="off">
          <div class="mb-3">
            <select class="form-select" id="destination" name="destination">
              <option>Londra</option>
              <option>Parigi</option>
              <option>New York</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input
              type="text"
              class="form-control"
              id="username"
              name="username"
              value="<?= $received_username ?>"
            />
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              value="<?= $received_password ?>"
            />

            <?php if($form_sent) : ?>
            <div class="text-danger">
              La password è sbagliata
            </div>
            <?php endif ?>
          </div>

          <div class="mb-3">
            <button class="btn btn-primary">Vola</button>
          </div>
        </form>
      <?php endif ?>
    </div>
  </body>
</html>
