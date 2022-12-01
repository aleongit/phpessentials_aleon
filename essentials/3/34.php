<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    require_once 'includes/header.php';
    // de majúscula a minúsculas
    //echo strtolower("de MAJUSCULES a minuscules -");
    //echo strtoupper("de minuscules a MAJUSCULES-");

    $color = array('A' => 'Blau', 'B' => 'Verd', 'c' => 'Vermell');
    echo "<h4>";
    echo var_dump($color);
    echo "</h4>";

    echo "<h4>Els valors en minúscules:<br>";
    //mirem array
    foreach ($color as $clau => $valor) {
        //a minu
        $color[$clau] = strtolower($valor);
    }
    echo var_dump($color);
    echo "</h4>";

    echo "<h4>Els valors en MAJÚSCULES:<br>";
    //mirem array
    foreach ($color as $clau => $valor) {
        //a MAJU
        $color[$clau] = strtoupper($valor);
    }
    echo var_dump($color);
    echo "</h4>";

    require_once 'includes/footer.php';
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>