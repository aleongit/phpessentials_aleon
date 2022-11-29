<?php require_once 'includes/helpers.php'; ?>
<?php $titol="PHP Essentials - aleon"; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/questions.php'; ?>

<!-- 
-->
<div class= 'main'>

  <?php
  //var_dump($QUESTIONS);

  foreach ($QUESTIONS as $key => $value) {
    
    echo "<h1>{$key}. {$SECTIONS[$key]['title']}</h1>";
    echo "<h2>{$SECTIONS[$key]['subtitle']}</h2>";

    echo "<ul>";
    foreach ($value as $subkey => $subvalue) {
        echo "<li>{$key}.{$subkey}. $subvalue</li>";
    }
    echo "</ul><hr>";
  }

  ?>

<!-- fi main -->
</div>

<?php require_once 'includes/footer.php';?>
