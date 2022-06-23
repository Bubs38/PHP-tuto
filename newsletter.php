<?php
require 'functions.php';
$title = 'Newsletter';
$error = null;
$success = null;
$email = null;

if (!empty($_POST['email'])) {
  $email = $_POST['email'];
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d');
    file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
    $success = "Votre email a bien été enregitré.";
    $email = null;
  } else {
    $error = "Email invalide";
  }
}

require (__DIR__) . DIRECTORY_SEPARATOR . 'elements'. DIRECTORY_SEPARATOR . 'header.php';
?>

<h1>S'inscrire à la newsletter</h1>

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus pariatur rerum totam esse debitis, deleniti a dolor veritatis eos atque similique laudantium illo deserunt molestiae!</p>

<?php if ($error): ?>
  <div class="alert alert-danger">
    <?= $error ?>
  </div> 
<?php endif ?>

<?php if ($success): ?>
  <div class="alert alert-success">
    <?= $success ?>
  </div> 
<?php endif ?>


<form action="/newsletter.php" method="post" class="form-inline">
  <div class="form-group">
    <input class="form-control" type="email" name="email" placeholder="Entrer votre email" require <?php if ($error):?> value="<?= htmlentities($email) ?>" <?php endif ?>>
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<?php
require (__DIR__) . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'footer.php';
?>