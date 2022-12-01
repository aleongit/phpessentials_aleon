<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom1.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    define("MAX", 100); //constant

    //while
    $x = 1;
    echo "<h3>amb 'while'</h3> <table class='rowflex'> <tr>";
    while ($x <= 100) {
        //parell
        if ($x % 2 == 0) {
            echo "<td>" . $x . "</td>";
        }
        //files de 50
        if ($x % 50 == 0) {
            echo "</tr><tr>";
        }
        $x++;
    };
    echo "</tr> </table>";

    //do while
    $x = 1;
    echo "<h3>amb 'do while'</h3> <table class='rowflex'> <tr>";
    do {
        if ($x % 2 == 0) {
            echo "<td>" . $x . "</td>";
        }
        if ($x % 50 == 0) {
            echo "</tr><tr>";
        }
        $x++;
    } while ($x <= 100);
    echo "</tr> </table>";

    //for
    $x = 1;
    echo "<h3>amb 'for'</h3> <table class='rowflex'> <tr>";
    for ($x = 1; $x <= 100; $x++) {
        if ($x % 2 == 0) {
            echo "<td>" . $x . "</td>";
        }
        if ($x % 50 == 0) {
            echo "</tr><tr>";
        }
    };
    echo "</tr> </table>";
    echo "<h4><mark>*Crec que 'for' és la més adient per ser més curta i òptima</mark></h4>";
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>