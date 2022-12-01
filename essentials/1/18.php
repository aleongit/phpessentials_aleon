<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom1.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    #constant
    define("MIN", 1);
    define("MAX", 10);

    echo "<label for='nums'>Números:</label>";
    echo "<select name='nums' id='nums'>";
    for ($x = MIN; $x <= MAX; $x++) {
        echo "<option value=" . $x . ">" . $x . "</option>";
    }
    echo "</select>";
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>