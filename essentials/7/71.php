<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom7.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

  <!-- exercici -->

  <!-- form -->
  <!-- inputs text sense pattern i required per test validació php -->
  <div class="container">
    <form method='post' action='71v.php'>
      <div class="row">
        <div class="col-10">
          <label for="data_a">Data A: </label>
        </div>
        <div class="col-25">
          <input type='date' name='data_a' value=''>
        </div>
      </div>
      <div class="row">
        <div class="col-10"></div>
      </div>
      <div class="row">
        <div class="col-10">
          <label for="data_b">Data B: </label>
        </div>
        <div class="col-25">
          <input type='date' name='data_b' value=''>
        </div>
      </div>
      <div class="row">
        <div class="col-10"></div>
      </div>

      <div class="row">
        <input type="submit" name='envia' value='Envia'>
      </div>
    </form>
  </div>

  <div class='resultat'>* <?php echo ($_SESSION['resultat']) ?? '' ?></div>

  <?php

  //netegem sessió pel refresc navegador
  session_unset();
  session_destroy();

  ?>
  <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>