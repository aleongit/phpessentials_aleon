<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio1'>
        <!-- exercici -->
        <?php
        #constant
        define("MIN", 1); //constant
        define("MAX", 10); //constant

        #taules del 1 al 10
        echo "<h3>Taules del 1 al 10</h3>";
        echo "<table class='tdautosize'>";

        #capçalera
        echo "<tr>";
        for ($x = MIN; $x <= MAX; $x++) {
            echo "<th>Taula del " . $x . "</th>";
        }
        echo "</tr>";

        #files
        for ($x = MIN; $x <= MAX; $x++) {
            echo "<tr>";
            for ($y = MIN; $y <= MAX; $y++) {
                echo "<td>" . $y . " x " . $x . " = " . ($y * $x) . "</td>";
            }
            echo "</tr>";
        };
        echo "</table> </br>";

        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>