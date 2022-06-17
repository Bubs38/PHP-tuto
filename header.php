<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  <?php if (isset($title)): ?>
    <?= $title ?>
  <?php else: ?>
    Mon site
  <?php endif ?>
  </title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>

  <nav>
    <div class="nav-container">
      <h2>Mon site</h2>
      <a href="./#">Accueil</a>
      <a href="./contact.php">Contact</a>
    </div>
  </nav>