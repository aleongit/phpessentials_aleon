<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom7.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php require_once 'includes/header.php'; ?>
    <?php

    define('NORMA_DATA', 'Format dd/mm/aaaa, data A < data B');

    //funció neteja inputs (espais + barres + caràcters especials html)
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function print_pag()
    {

        //definim
        define('FILE_CSV', 'usuaris.csv');
        $linies = [];
        $informe = []; //informe per guardar les pàgines
        $resultat = "";

        //session_destroy();

        if (file_exists(FILE_CSV)) {

            //llegim fitxer i passem a llista
            $fitxer = fopen(FILE_CSV, "r");
            while (!feof($fitxer)) {
                //print_r(fgetcsv($fitxer));
                $linies[] = fgetcsv($fitxer);
            }
            fclose($fitxer);
            //var_dump($linies);

            //treure últim element llista bool ?
            $whats = array_pop($linies);

            //filtre data
            //si post

            if (!empty($_POST['data_a']) && !empty($_POST['data_b'])) {

                //afagem i netegem inputs
                $data_a = test_input($_POST['data_a']);
                $data_b = test_input($_POST['data_b']);

                if (strtotime($data_a) && strtotime($data_b)) {
                    //echo '<br>OK DATA';

                    $data_a = strtotime($data_a);
                    $data_b = strtotime($data_b);

                    //s'obté 'data unix' en segons
                    $dif = $data_b - $data_a;

                    //verificació data_b > data_a
                    if ($dif >= 0) {
                        //OK
                        $_SESSION['data_error'] = "";
                        //var_dump($data_a);
                        //var_dump($data_b);

                        //filtra llista linies
                        $linies_filtre = [];
                        $conta = 0;
                        foreach ($linies as $linia) {
                            if ((strtotime($linia[2]) >= $data_a) && (strtotime($linia[2]) <= $data_b)) {
                                //$conta ++;
                                $linies_filtre[] = $linia;
                            }
                        }
                        //var_dump($conta);
                        //var_dump($linies_filtre);

                        if (count($linies_filtre) > 0) {
                            $linies = $linies_filtre;
                        } else {
                            $_SESSION['data_error'] = "*NO REGISTRES AMB DATES SELECCIONADES*";
                            $linies = [];
                            $linies[] = ['*NO REGISTRES*', '*NO REGISTRES*', '*NO REGISTRES*'];
                        }
                    } else {
                        //echo "<br>DATA_B MÉS PETITA";
                        $_SESSION['data_error'] = "*FATAL ERROR DATA * " . NORMA_DATA;
                        $linies = [];
                        $linies[] = ['*NO REGISTRES*', '*NO REGISTRES*', '*NO REGISTRES*'];
                    }
                } else {
                    //echo "<br>* FATAL ERROR * Data ";
                    $_SESSION['data_error'] = "*FATAL ERROR DATA * " . NORMA_DATA;
                }
            }

            //ordenació
            //depenent POST update SESSION

            //si no existeix SESSION ordenació, ordenació per defecte
            if (!isset($_SESSION['sort'])) {
                $_SESSION['sort'] = 'fitxer';
            }

            if (isset($_POST['sort_file'])) {
                $_SESSION['sort'] = 'fitxer';
            }

            //var_dump($_POST['sort_nom']);
            if (isset($_POST['sort_nom'])) {
                $_SESSION['sort'] = 'nom';
            }

            //var_dump($_POST['sort_cog']);
            if (isset($_POST['sort_cog'])) {
                $_SESSION['sort'] = 'cognoms';
            }

            //depent SESSION 'sort', canvia llista
            if ($_SESSION['sort'] == 'nom') {
                sort($linies);
            } elseif ($_SESSION['sort'] == 'cognoms') {
                //echo "<br>TO DO ORDENAR COGNOMS<br>";
                //$cognoms = $linies[0][1];
                //echo $cognoms;

                $linies_cognoms = [];
                foreach ($linies as $linia) {
                    $linies_cognoms[] = [$linia[1], $linia[0], $linia[2]];
                }
                //var_dump($linies_cognoms);
                sort($linies_cognoms);
                $linies = $linies_cognoms;
            }

            //paràmetres informe
            $total = count($linies);
            $n = 20;
            $pags = ceil($total / $n);
            /*echo "<br>";
    echo "total: ".$total." pags: ".$pags;
    echo "<br>";*/
            $_SESSION['total'] = $total;
            $_SESSION['pags'] = $pags;

            //omplir blancs per última pag
            $blancs = $n - ($total - ($n * ceil($pags - 1)));
            //echo "__________BLANCS".$blancs;
            //echo "__________PAGS".$pags;
            //echo "__________TOTAL".$total;

            if ($blancs > 0) {
                for ($i = 0; $i <= $blancs; $i++) {
                    $linies[] = ['', '', ''];
                }
            }
            //var_dump($linies);
            //construir llista pàgines per posició (llista de llistes)
            for ($i = 0; $i < $total; $i += $n) {
                $informe[] = array_slice($linies, $i, $n);
            }

            //pagino depenent de variables POST PAGINACIÓ
            //variable SESSION per saber pàgina actual

            //si no existeix SESSION 'pag actual', crea a pag 0
            if (!isset($_SESSION['pag_actual'])) {
                $_SESSION['pag_actual'] = 0;
            }

            if (isset($_POST['in'])) {

                $_SESSION['pag_actual'] = 0;
                //var_dump($_POST['in']);
                unset($_POST['in']);
            }

            if (isset($_POST['fi'])) {
                $_SESSION['pag_actual'] = $pags - 1;
                unset($_POST['fi']);
            }

            if (isset($_POST['pos'])) {

                if ($_SESSION['pag_actual'] + 1 <= $pags - 1) {
                    $_SESSION['pag_actual'] += 1;
                } else {
                    $_SESSION['pag_actual'] = $pags - 1;
                }
                unset($_POST['pos']);
            }

            if (isset($_POST['ant'])) {

                if ($_SESSION['pag_actual'] - 1 >= 0) {
                    $_SESSION['pag_actual'] -= 1;
                } else {
                    $_SESSION['pag_actual'] = 0;
                }
                unset($_POST['ant']);
            }

            //assigno pàgina
            $pag = $_SESSION['pag_actual'];
            //echo '____PAG '.$pag;

            //print pàg informe
            foreach ($informe[$pag] as $linia) {
                $registre = '';
                foreach ($linia as $camp) {
                    $registre .= $camp . ", ";
                }

                //DEPURACIÓ
                //eliminem últim caràcter ', '
                $registre = substr($registre, 0, -2);

                //per registres blancs, eliminem totes les ','
                if ($registre == ', , ') {
                    $registre = str_replace(',', ' ', $registre);
                }

                //afageix a resultat
                $resultat .= $registre . "<br>";
            }
        } else {
            $resultat = "*FATAL ERROR* no fitxer";
        }

        return $resultat;
    }

    ?>

    <!-- form paràmetres -->
    <div class="container">
        <form method="post" action=<?php $_SERVER['PHP_SELF'] ?>>

            <!--ordenació-->
            <div class="row">
                <div class="col-25">
                    <label for="data_a">Ordena per >> </label>
                </div>
                <input class='pag' type="submit" name='sort_file' value='Fitxer'>
                <input class='pag' type="submit" name='sort_nom' value='Nom'>
                <input class='pag' type="submit" name='sort_cog' value='Cognoms'>
            </div>

            <?php

            $data_a = '';
            $data_b = '';
            if (isset($_POST['data_a']) && isset($_POST['data_b'])) {
                $data_a = $_POST['data_a'];
                $data_b = $_POST['data_b'];
            }

            ?>

            <!--filtre dates-->
            <div class="row">
                <div class="col-25">
                    <label>Filtre per >> </label>
                </div>
                <div class="col-25">
                    <input type='date' name='data_a' value='<?php echo $data_a ?? '' ?>'>
                </div>
                <div class="col-25">
                    <input type='date' name='data_b' value='<?php echo $data_b ?? '' ?>'>
                </div>
            </div>

            <!--resultat-->
            <div class="row registres">
                <?php echo print_pag(); ?>
            </div>

            <div class='row error'><?php echo ($_SESSION['data_error']) ?? '' ?></div>

            <!--paginació-->
            <div class="row">
                <input class='pag' type="submit" name='in' value='<<'>
                <input class='pag' type="submit" name='ant' value='<'>
                <input class='pag' type="submit" name='pos' value='>'>
                <input class='pag' type="submit" name='fi' value='>>'>
            </div>
        </form>
    </div>

    <div class='resultat'>
        <?php
        //mostrem info
        echo isset($_SESSION['sort']) ? "Ordre " . $_SESSION['sort'] . " / " : '';
        echo isset($_SESSION['total']) ? "Registres " . $_SESSION['total'] . " / " : '';
        echo isset($_SESSION['pag_actual']) ? "Pàgina " . floor($_SESSION['pag_actual']) + 1 : '';
        echo isset($_SESSION['pags']) ? " de " . ceil($_SESSION['pags']) : '';
        ?>
    </div>

    <?php

    //post
    /*
var_dump($_POST['sort_nom']);
var_dump($_POST['sort_cog']);
var_dump($_POST['in']);
var_dump($_POST['ant']);
var_dump($_POST['pos']);
var_dump($_POST['fi']);
*/

    //session
    /*
var_dump($_SESSION['sort']);
var_dump($_SESSION['pag_actual']);
*/

    ?>

    <!-- NO SERVEIX
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
-->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>