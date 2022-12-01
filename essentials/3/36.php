<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    require_once 'includes/header.php';

    $keys = array(
        "field1" => "first",
        "field2" => "second",
        "field3" => "third"
    );
    $values = array(
        "field1value" => "dinosaur",
        "field2value" => "pig",
        "field3value" => "platypus"
    );

    echo var_dump($keys) . "<br>";
    echo var_dump($values) . "<br>";

    //nou array buit
    $sortida = [];

    //per cada element de 2n array
    $i = 0;
    foreach ($keys as $clau_keys => $valor_keys) {
        //afegim valor a array sortida
        //$sortida[$clau_keys] = array_keys($values)[$i]; *per claus
        $sortida[$valor_keys] = array_values($values)[$i];
        $i++;
    }

    echo "<h4>Array sortida:<br>";
    echo var_dump($sortida) . "<br>";
    echo "</h4>";

    require_once 'includes/footer.php';
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>