<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom7.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php require_once 'includes/header.php'; ?>

    <!-- enviament form -->
    <?php

    //definim
    define('NOMS', ['Pepet', 'Pepeta', 'Xiscu', 'Xesca', 'Ot', 'Mariona', 'Galderic', 'Dolça', 'Guifré', 'Scarlett', 'John', 'Marilyn']);
    define('COGNOMS', ['Alenyà', 'Riudecols', 'Magdalena', 'Clariana', 'Fontseca', 'Formosa', 'Formós', 'Vallferrera', 'Capdetrons', 'Garcia', 'Rodriguez', 'Pilós', 'Serrallonga', 'Smith', 'Monroe', 'Johansson', 'Cruyff', 'Laporta']);
    define('N', 100);
    define('FILE_CSV', 'usuaris.csv');
    $usuaris = [];

    //random noms / cognoms
    function random_nom(array $ll): string
    {
        $index = array_rand($ll);
        //echo $index;
        $nom = $ll[$index];
        return $nom;
    }

    function random_data(): string
    {
        //Generate a timestamp using mt_rand.
        $timestamp = mt_rand(1, time());

        //Format that timestamp into a readable date string.
        $randomDate = date("d M Y", $timestamp);
        //var_dump($randomDate);
        return $randomDate;
    }

    function genera_user(): array
    {
        $user = [];
        //array_push($stack, "apple", "raspberry") => $stack[]=;
        $user[] = random_nom(NOMS);
        $user[] = random_nom(COGNOMS) . ' ' . random_nom(COGNOMS);
        $user[] = random_data();
        return $user;
    }

    //crear fitxer CSV randoms
    //random_noms(NOMS);
    //random_data();

    //per 100 vegades
    for ($i = 0; $i < N; $i++) {
        $usuaris[] = genera_user();
    }

    //print_r($usuaris);
    foreach ($usuaris as $user) {
        foreach ($user as $camp) {
            echo $camp . ", ";
        }
        echo "<br>";
    }

    //creem o sobrescrivim fitxer
    $fitxer = fopen(FILE_CSV, "w");

    foreach ($usuaris as $linia) {
        fputcsv($fitxer, $linia);
    }

    fclose($fitxer);

    ?>

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>