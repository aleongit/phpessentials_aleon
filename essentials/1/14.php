<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio1'>

        <?php
        # exemple URL
        # /fitxer.php?N1=2=&N2=5

        #depuració variable
        #var_dump($_GET);

        # passar a número
        $n1 = intval($_GET['N1']);
        $n2 = intval($_GET['N2']);

        //echo "<h2>Nom:".$_GET['nom']."</h2>";

        # taula del n1 i n2
        echo "<table class='tdautosize'><tr><th>Taula del " . $n1 . "</th><th>Taula del " . $n2 . "</th></tr>";
        for ($x = 1; $x <= 10; $x++) {
            echo "<tr><td>" . $n1 . " x " . $x . " = " . ($n1 * $x) . "</td>";
            echo "<td>" . $n2 . " x " . $x . " = " . ($n2 * $x) . "</td></tr>";
        };
        echo "</table> </br>";

        # operacions bàsiques amb n1 i n2
        echo "<table class='tdautosize'><tr><th>Operació</th><th>Resultat</th></tr>";
        echo "<tr><td>Suma</td><td>" . $n1 . " + " . $n2 . " = " . ($n1 + $n2) . "</td></tr>";
        echo "<tr><td>Resta</td><td>" . $n1 . " - " . $n2 . " = " . ($n1 - $n2) . "</td></tr>";
        echo "<tr><td>Divisió</td><td>" . $n1 . " / " . $n2 . " = " . ($n1 / $n2) . "</td></tr>";
        echo "<tr><td>Multiplicació</td><td>" . $n1 . " * " . $n2 . " = " . ($n1 * $n2) . "</td></tr>";
        echo "<tr><td>Divisió sencera</td><td>" . $n1 . " intdiv " . $n2 . " = " . intdiv($n1, $n2) . "</td></tr>";
        echo "<tr><td>Residuo</td><td>" . $n1 . " % " . $n2 . " = " . ($n1 % $n2) . "</td></tr>";
        echo "<tr><td>Potència</td><td>" . $n1 . " ** " . $n2 . " = " . ($n1 ** $n2) . "</td></tr>";
        echo "</table>";

        ?>
    </div>
</div>

<?php require_once PATH_ROOT . 'includes/footer.php'; ?>