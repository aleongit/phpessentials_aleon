<?php
define('KEY', $_GET['key']);
define('SUBKEY', $_GET['subkey']);
define('TITOL', 'PHP Essentials' . SUBKEY . ' - aleon');
?>
<?php require_once 'helpers.php'; ?>
<?php require_once 'questions.php'; ?>
<?php require_once 'header.php'; ?>

<?php
echo "<div class='pregunta'>";
echo "<strong>" . KEY . "." . SUBKEY . " </strong>";
echo "{$QUESTIONS[KEY][SUBKEY]}";
echo "</div>";
?>