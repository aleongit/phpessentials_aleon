<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio1'>
        
        <!-- exercici -->
        <?php
        define("N", 20); //constant

        //while
        $x = 1;
        echo "<h3>amb 'while'</h3> <table class='tdautosize'><tr><th>Número</th><th>Quadrat</th></tr>";
        while ($x <= N) {
            echo "<tr><td>" . $x . "</td><td>" . ($x ** 2) . "</td></tr>";
            $x++;
        };
        echo "</tr> </table>";

        //for
        $x = 1;
        echo "<h3>amb 'for'</h3> <table class='tdautosize'><tr><th>Número</th><th>Quadrat</th></tr>";
        for ($x = 1; $x <= N; $x++) {
            echo "<tr><td>" . $x . "</td><td>" . ($x ** 2) . "</td></tr>";
        };
        echo "</tr> </table>";
        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>