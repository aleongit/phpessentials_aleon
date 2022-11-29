<?php
define('KEY', $_GET['key'] ?? 0);
define('SUBKEY', $_GET['subkey'] ?? 0);
define('TITOL', 'PHP Essentials' . SUBKEY . ' - aleon');
?>
<?php require_once 'helpers.php'; ?>
<?php require_once 'questions.php'; ?>
<?php require_once 'header.php'; ?>

<?php
echo "<div class='pregunta'>";
echo "<strong>" . KEY . "." . SUBKEY . " </strong>";
echo (KEY != 0) ? "{$QUESTIONS[KEY][SUBKEY]}" : null;
echo "</div>";
?>
