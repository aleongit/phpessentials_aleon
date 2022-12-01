<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom7.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

        <!-- exercici -->
        <?php require_once 'includes/header.php'; ?>

        <!-- enviament form -->
        <?php

        //definim
        $_SESSION['resposta'] = "";
        define('FILE_CSV', 'usuaris.csv');
        $linies = [];

        define('NORMA_NOM', 'Obligatori, lletres majúscules, minúscules i espais');
        define('NORMA_COGNOM', 'Obligatori, lletres majúscules, minúscules i espais');
        define('NORMA_DATA', 'Obligatori, format dd/mm/aaaa');
        define('NORMA_POST', 'Tots els camps són obligatoris');
        define('MISSATGE_OK', 'TOT OK! :)');

        //funció neteja inputs (espais + barres + caràcters especials html)
        function test_input($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        //var_dump($_SESSION);
        //echo "<br>";
        //var_dump($_POST);

        //control obligatoris no buids

        if (!(empty($_POST['nom']) || empty($_POST['cognoms']) || empty($_POST['data_n']))) {

                //neteja input
                $nom = test_input($_POST['nom']);
                $cognoms = test_input($_POST['cognoms']);
                $data_n = test_input($_POST['data_n']);

                //echo "<br>";
                //var_dump($nom, $cognoms, $data_n);

                //validació nom i cognom
                //Nom: obligatori, lletres majúscules minúscules i espais
                //preg_match ("/^\p{L}+$/ui",$nom) unicode

                if (!(preg_match("/^[a-zA-z-\s\p{L}]*$/ui", $nom))) {
                        //echo "<br>* FATAL ERROR * Nom";
                        $_SESSION['resposta'] .= "*FATAL ERROR NOM * " . NORMA_NOM . "<br>";
                }
                if (!(preg_match("/^[a-zA-z-\s\p{L}]*$/ui", $cognoms))) {
                        //echo "<br>* FATAL ERROR * Cognom";
                        $_SESSION['resposta'] .= "*FATAL ERROR COGNOM * " . NORMA_COGNOM . "<br>";
                }
                //validació data
                //arriben valors inputs amb '2021-11-21' aaaa-mm-dd

                //var_dump(strtotime($data_n));
                //var_dump(strtotime('31-02-2021'));
                //$test = strtotime('31-02-2021');
                //echo date("d M Y", $test);

                //valido amb strtotime passant a timestamp
                //dóna false si no és data correcte
                if (strtotime($data_n)) {
                        //echo '<br>OK DATA';
                } else {
                        //echo "<br>* FATAL ERROR * Data Naixement";
                        $_SESSION['resposta'] .= "*FATAL ERROR DATA * " . NORMA_DATA . "<br>";
                }
                //si fins aquí no hi ha error
                if (empty($_SESSION['resposta'])) {

                        if (file_exists(FILE_CSV)) {

                                //llegim fitxer i passem a llista
                                $fitxer = fopen(FILE_CSV, "r");
                                while (!feof($fitxer)) {
                                        //print_r(fgetcsv($fitxer));
                                        $linies[] = fgetcsv($fitxer);
                                }
                                fclose($fitxer);
                                //var_dump($linies);

                                //nou user
                                $user = [$nom, $cognoms, $data_n];
                                //echo "<br>";
                                //var_dump($user);

                                //afegim el nou registre al principi
                                array_unshift($linies, $user);

                                //treure últim element llista bool ?
                                $whats = array_pop($linies);
                                //echo "<br>";
                                //var_dump($whats);

                                //echo "<br>";
                                //print llista
                                //!!!!!si es printa això la funció 'header' del final peta
                                //només cal comentar el 'echo' del 'foreach' 
                                //o treure el 'header' en cas de 'ok afegit'
                                //https://stackoverflow.com/questions/8028957/how-to-fix-headers-already-sent-error-in-php

                                foreach ($linies as $linia) {
                                        foreach ($linia as $camp) {
                                                echo $camp . ", ";
                                        }
                                        echo "<br>";
                                }

                                //matxaquem tota la llista a fitxer
                                $fitxer = fopen(FILE_CSV, "w");

                                foreach ($linies as $linia) {
                                        fputcsv($fitxer, $linia);
                                }
                                fclose($fitxer);
                        } else {
                                //echo "<br>* FATAL ERROR * Fitxer";
                                $_SESSION['resposta'] .= "*FATAL ERROR FITXER * no existeix<br>";
                        }
                } else {
                        //echo "ERRORS";
                }
        } else {
                //echo "<br>DADES BUIDES";
                $_SESSION['resposta'] = NORMA_POST;
        }

        //errors ?
        //echo "<br>";
        //var_dump($_SESSION['resposta']);

        if (empty($_SESSION['resposta'])) {
                $_SESSION['resposta'] = MISSATGE_OK;
        } else {
                header("Location: 73.php");
        }

        ?>

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>