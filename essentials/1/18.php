<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio1'>
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
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>