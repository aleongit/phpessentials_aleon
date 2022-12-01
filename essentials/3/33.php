<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    require_once 'includes/header.php';

    define('N', 5); //número sortida
    $faren = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $acu = 0;

    //convertim faren a celsius T(°C) = (T(°F) - 32) / 1.8
    function fc(float $temp): float
    {
        $con = round(($temp - 32) / 1.8, 2);
        return $con;
    }

    //mirem array
    foreach ($faren as $temp) {
        //acumulo per mitjana
        $acu += $temp;
    }

    /*ordenar array
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
*/

    //ordenem asc
    sort($faren);
    echo "<h4>5 més fredes: ";
    for ($i = 0; $i < N; $i++) {
        echo fc($faren[$i]) . ", ";
    }
    echo " ºC</h4>";

    //ordenem des
    rsort($faren);
    echo "<h4>5 més càlides: ";
    for ($i = 0; $i < N; $i++) {
        echo fc($faren[$i]) . ", ";
    }
    echo " ºC</h4>";

    //mitjana
    echo "<h4>La mitjana és: " . fc($acu / count($faren)) . " ºC</h4>";

    require_once 'includes/footer.php';
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>