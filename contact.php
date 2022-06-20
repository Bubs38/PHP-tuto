<?php 
$title = "Nous contacter";
require_once 'config.php';
require_once 'functions.php';
$creneaux = creneaux_html(CRENEAUX);
require 'header.php'; 
?>


<div class="row">
  <div class="col-md-8">
    <h2>Nous contacter</h2>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eveniet similique blanditiis iusto voluptas illo accusantium aperiam quas mollitia! Nobis optio provident tenetur ad ipsam quibusdam impedit voluptatibus doloribus rerum.</p>
  </div>
  <div class="col-md-4">
    <h2>Horaires d'ouverture</h2>
    <?= $creneaux ?>
  </div>
</div>




<?php require 'footer.php'; ?>