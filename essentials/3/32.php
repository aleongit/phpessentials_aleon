<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    require_once 'includes/header.php';

    $ceu = array(
        "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
        "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
        "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
        "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
        "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
        "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest",
        "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
    );

    //echo var_dump($ceu);

    /*ordenar array associatiu
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key*/
    asort($ceu);

    echo "<ul>";
    foreach ($ceu as $pais => $cap) {
        echo "<li>La Capital de " . $pais . " és " . $cap . "</li>";
    }
    echo "</ul>";
    require_once 'includes/footer.php';
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>