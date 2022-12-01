<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    require_once 'includes/header.php';

    $arra1 = ['c1' => 'Vermell', 'c2' => 'Verd', 'c3' => 'Blanc', 'c4' => 'Negre'];
    $arra2 = ['c2', 'c4'];

    echo var_dump($arra1) . "<br>";
    echo var_dump($arra2) . "<br>";

    //nou array buit
    $sortida = [];

    //per cada element de 2n array
    foreach ($arra2 as $valor) {
        //afegim valor a array sortida
        $sortida[$valor] = $arra1[$valor];
    }

    echo "<h4>Array sortida:<br>";
    echo var_dump($sortida) . "<br>";
    echo "</h4>";

    require_once 'includes/footer.php';
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>