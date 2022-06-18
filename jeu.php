<?php
require 'header.php';
?>

 


<form action="/jeu.php" method="POST">
  <div class="form-group">
    <input type="checkbox" name="parfum[]" value="fraise">Fraise <br>
    <input type="checkbox" name="parfum[]" value="vanille">Vanille <br>
    <input type="checkbox" name="parfum[]" value="chocalat">Chocolat <br>
  </div>
  <button type="submit" class="btn btn-primary">Deviner</button>
</form>



<h2>$_GET</h2>
<pre>
  <?php var_dump($_GET)?>
</pre>

<h2>$POST</h2>
<pre>
  <?php var_dump($_POST)?>
</pre>

<?php require 'footer.php' ?>
