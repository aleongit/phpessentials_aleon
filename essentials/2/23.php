<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom2.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php

    #funció retorna dies mes
    function diesMes(string $mes, array $arra): int
    {
        #echo $arra[1][0];

        #buscar posició mes
        $pos = array_search($mes, $arra[0]);
        #echo "la pos és ".$pos;
        return $arra[1][$pos];
    }

    #echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina

    $aMes = ['Gener', 'Febrer', 'Març', 'Abril', 'Maig', 'Juny', 'Juliol', 'Agost', 'Setembre', 'Octubre', 'Novembre', 'Desembre'];
    $aDies = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    //array 2 dimensions
    $aMesDies = [$aMes, $aDies];

    #echo $aMesDies[0][0];
    #echo $aMesDies[1][0];

    #isset, si la variable està definida i no és NULL
    if (isset($_GET['submit'])) {
        $mes = $_GET['mesos'];
        echo "<h1>" . $mes . " té " . diesMes($mes, $aMesDies) . " dies</h1>";
    }

    echo "<form method='get' action=" . $_SERVER['PHP_SELF'] . ">";

    echo "<label for='nums'>Mesos:</label>";
    echo "<select name='mesos' id='mesos'>";
    foreach ($aMes as $el) {
        echo "<option value=" . $el . ">" . $el . "</option>";
    }
    echo "</select>";
    echo "<input type='submit' name='submit' value='Envia'>";
    echo "</form>";
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>