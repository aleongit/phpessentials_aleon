<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    require_once 'includes/header.php';

    //array
    //3 files = nivells (bàsic, mitjà, perfeccionament)
    //4 cols = idiomes (0 = Anglès, 1 = Francès, 2 = Alemany i 3 = Rus)

    $academia = [
        [1, 14, 8, 3],
        [6, 19, 7, 2],
        [3, 13, 4, 1]
    ];

    define('IDIOMES', ['Anglès', 'Francès', 'Alemany', 'Rus']);

    //echo var_dump($arra)."<br>";

    function comptarTotalAlumnes($arra): int
    {
        $suma = 0;
        foreach ($arra as $nivell) {
            //echo var_dump($nivell)."<br>";
            //sumatori de cada array nivell (fila)
            $suma += array_sum($nivell);
        }
        return $suma;
    }
    //echo array_sum($academia[0]);

    function comptarTotalAIdioma($arra): array
    {
        $total_idioma = [];
        //mira cols
        for ($i = 0; $i < count($arra[0]); $i++) {
            //echo $i." ";
            //per cada fila
            $suma = 0;
            for ($j = 0; $j < count($arra); $j++) {
                //echo $j." ";
                $suma += $arra[$j][$i];
            }
            //echo "<br>";
            //suma col
            //echo IDIOMES[0];
            $total_idioma[IDIOMES[$i]] = $suma;
        }
        //arsort() - sort associative arrays in descending order, according to the value
        arsort($total_idioma);
        return $total_idioma;
    }

    function buscarGrupMesNombros($arra): int
    {
        $max = $arra[0][0];
        foreach ($arra as $nivell) {
            //max de cada array nivell (fila)
            if ($max < max($nivell)) {
                $max = max($nivell);
            };
        }
        return $max;
    }

    function buscarGrupMenysNombros($arra): int
    {
        $min = $arra[0][0];
        foreach ($arra as $nivell) {
            //min de cada array nivell (fila)
            if ($min > min($nivell)) {
                $min = min($nivell);
            };
        }
        return $min;
    }

    echo "<h4>Array sortida:<br>";
    echo "comptarTotalAlumnes " . comptarTotalAlumnes($academia) . "</h4>";
    echo "<h4>Array sortida:<br>";
    echo "comptarTotalAlumnes " . var_dump(comptarTotalAIdioma($academia)) . "</h4>";
    echo "<h4>Array sortida:<br>";
    echo "buscarGrupMesNombros " . buscarGrupMesNombros($academia) . "</h4>";
    echo "<h4>Array sortida:<br>";
    echo "buscarGrupMenysNombros " . buscarGrupMenysNombros($academia) . "</h4>";

    require_once 'includes/footer.php';
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>