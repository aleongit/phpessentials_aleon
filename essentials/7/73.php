<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom7.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

  <!-- exercici -->
  <?php require_once 'includes/header.php'; ?>

  <!-- form crea fake -->
  <h4>Crear CSV</h4>
  <div class="container">
    <form action="fakeCSV.php" method="post">

      <div class="row">
        <input type="submit" name='envia' value='fake CSV'>
      </div>

    </form>
  </div>

  <!-- form -->
  <h4>Afegir nou usuari a CSV</h4>
  <div class="container">
    <form action="appendCSV.php" method="post">

      <div class="row">
        <div class="col-20">
          <label for="data_a">Nom: </label>
        </div>
        <div class="col-75">
          <input type="text" name="nom" id="nom">
        </div>
      </div>

      <div class="row">
        <div class="col-20">
          <label for="data_a">Cognoms: </label>
        </div>
        <div class="col-75">
          <input type="text" name="cognoms" id="cognom">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="data_a">Data naixement: </label>
        </div>
        <div class="col-25">
          <input type='date' name='data_n' id='data_n'>
        </div>
      </div>

      <div class="row ">
        <input type="submit" name='envia' value='Crea User'>
      </div>

    </form>
  </div>

  <!--missatges-->
  <div class='resultat'> <?php echo ($_SESSION['resposta']) ?? '' ?></div>

  <?php
  //netegem sessió pel refresc navegador
  session_unset();
  session_destroy();
  ?>

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>