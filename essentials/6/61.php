<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom6.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

  <!-- exercici -->
  <h3>Formulari</h3>
  <div class='ok'>* <?php echo ($_SESSION['ok']) ?? '' ?></div>
  <!-- form -->
  <!-- inputs text sense pattern i required per test validació php -->
  <div class="container">
    <form method='post' action='61v.php'>
      <div class="row">
        <div class="col-10">
          <label for="nom">Nom: </label>
        </div>
        <div class="col-25">
          <input type='text' name='nom' placeholder="El teu nom.." value=''>
        </div>
      </div>
      <div class="row">
        <div class="col-10"></div>
        <div class="error">* <?php echo ($_SESSION['errors']['nom']) ?? '' ?></div>
      </div>
      <div class="row">
        <div class="col-10">
          <label for="pass">Password: </label>
        </div>
        <div class="col-25">
          <input type='password' name='pass' value=''>
        </div>
      </div>
      <div class="row">
        <div class="col-10"></div>
        <div class="error">* <?php echo ($_SESSION['errors']['pass']) ?? '' ?></div>
      </div>
      <div class="row">
        <div class="col-10">
          <label for="forma">Formació: </label>
        </div>
        <div class="col-25">
          <!-- select -->
          <select name="forma">
            <option value="ESO">ESO</option>
            <option value="FP" selected>FP</option>
            <option value="BAT">BAT</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-10"></div>
        <div class="error"></div>
      </div>
      <div class="row">
        <div class="col-10">
          <label for="idi">Idiomes: </label>
        </div>
        <div class="col-75">
          <!-- checkbox -->
          <!-- https://stackoverflow.com/questions/4997252/get-post-from-multiple-checkboxes -->
          <label>
            <input type="checkbox" checked="checked" name="idiomes[]" value="cat"> Català
          </label>
          <label>
            <input type="checkbox" name="idiomes[]" value="esp"> Español
          </label>
          <label>
            <input type="checkbox" name="idiomes[]" value="eng"> English
          </label>
          <label>
            <input type="checkbox" name="idiomes[]" value="fra"> Français
          </label>
        </div>
      </div>
      <div class="row">
        <div class="col-10"></div>
        <div class="error">* <?php echo ($_SESSION['errors']['idi']) ?? '' ?></div>
      </div>
      <div class="row">
        <div class="col-10">
          <label for="mail">Email: </label>
        </div>
        <div class="col-25">
          <input type='text' name='mail' placeholder="mail@domini.com" value=''>
        </div>
      </div>
      <div class="row">
        <div class="col-10"></div>
        <div class="error">* <?php echo ($_SESSION['errors']['mail']) ?? '' ?></div>
      </div>
      <div class="row">
        <div class="col-10">
          <label for="web">Lloc web: </label>
        </div>
        <div class="col-25">
          <input type='text' name='web' placeholder="http://" value=''>
        </div>
      </div>
      <div class="row">
        <div class="col-10"></div>
        <div class="error"><?php echo ($_SESSION['errors']['web']) ?? '' ?></div>
      </div>
      <div class="row">
        <input type="submit" name='envia' value='Envia'>
      </div>
    </form>
  </div>

  <?php
  //netegem sessió pel refresc navegador
  session_unset();
  session_destroy();
  ?>
  <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>