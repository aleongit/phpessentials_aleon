<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom2.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php

    #constants
    define("H", 8);
    define("V", 8);

    #True   =   Blanc
    #False  =   Negre
    $color = False;

    #test
    #var_dump($color);
    #$color = !$color;
    #var_dump($color);

    #matriu 2 dimensions amb canvi color a cada casella, + a cada fila
    echo "<table>";
    for ($x = 0; $x <= V - 1; $x++) {
        echo "<tr>";
        for ($y = 0; $y <= H - 1; $y++) {
            $color = !$color;
            #echo "<td>".print_r(var_dump($color))."</td>";
            if ($color) {
                echo "<td style='background-color:#FFFFFF'></td>";
            } else {
                echo "<td style='background-color:#000000'></td>";
            }
        }
        $color = !$color;
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>