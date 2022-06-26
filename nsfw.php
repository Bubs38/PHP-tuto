<?php 
$age = null;

// 2- persister la date de naissance dans un cookie
if (!empty($_POST['birthday'])) {
  setcookie('birthday', $_POST['birthday']);
  $_COOKIE['birthday'] = $_POST['birthday'];
}

// 3- si utilisateur est assez agé montrer contenu 
if (!empty($_COOKIE['birthday'])){
  $birthday = (int)$_COOKIE['birthday'];
  $age = (int)date('Y') - $birthday;
}



require 'elements/header.php'; 
?>

<!-- 1- demander à l'utilisateur sa date de naissance avec un select  -->

<?php if ($age >= 18): ?>

  <h1>Contenu reservé</h1>

<!-- 4- sinon message d'erreur  -->
<?php elseif ($age !== null) : ?>

  <div class="alert alert-danger">Vous n'avez pas l'age requis.</div>

<?php else : ?>
<form action="" method="post">
  <div class="form-group">
    <label for="bithday">Section reservée aux personnes majeures entrer votre année de naissance :</label>
    <select name="birthday" id="birthday" class="form-control">
      <?php for($i = 2010; $i > 1919; $i--): ?>
      <option value="<?= $i ?>"><?= $i ?></option>
      <?php endfor ?>
    </select>
  </div> 
  <button class="btn btn-primary" type="submit">Envoyer</button> 
</form>
<?php endif ?>


<?php require 'elements/footer.php'; ?>