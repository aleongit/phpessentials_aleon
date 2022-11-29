<?php
define('TITOL', 'PHP Essentials - aleon');
define('PATH_ROOT', '')
?>
<?php require_once PATH_ROOT.'includes/helpers.php'; ?>
<?php require_once PATH_ROOT.'includes/questions.php'; ?>
<?php require_once PATH_ROOT.'includes/header.php'; ?>

<!-- 
-->
<div class='main'>

  <?php
  //var_dump($QUESTIONS);
  //ECHO __DIR__;
  //echo get_include_path();
  //echo $_SERVER['DOCUMENT_ROOT'];

  foreach ($QUESTIONS as $key => $value) {

    echo '<div class="seccio">';
    echo "<h1>{$key}. {$SECTIONS[$key]['title']}</h1>";
    echo "<h2>{$SECTIONS[$key]['subtitle']}</h2>";
    echo "<ul>";
    foreach ($value as $subkey => $subvalue) {
      echo "<li>
          <strong>{$key}.{$subkey}.</strong> 
          <a class='sense_deco' href='essentials/{$key}/{$subkey}.php?key={$key}&subkey={$subkey}'>$subvalue</a>
          </li>";
    }
    echo "</ul></div>";
  }

  ?>

  <!-- fi main -->
</div>

<?php require_once PATH_ROOT.'includes/footer.php'; ?>