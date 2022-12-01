<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom7.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

        <!-- exercici -->

        <!-- enviament form -->
        <?php

        //definim
        $_SESSION['resultat'] = "";
        $r = "";

        define('NORMA_DATA', 'Obligatori, format dd/mm/aaaa, data A < data B');

        //funció neteja inputs (espais + barres + caràcters especials html)
        function test_input($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        //var_dump($_SESSION);
        //var_dump($_POST);
        //var_dump($_SESSION['resultat']);

        //si post
        if (isset($_POST['data_a']) && isset($_POST['data_b'])) {

                //si no buids
                if (!(empty($_POST['data_a'])) && !(empty($_POST['data_b']))) {

                        //afagem i netegem inputs
                        $data_a = test_input($_POST['data_a']);
                        $data_b = test_input($_POST['data_b']);

                        echo "<br>";
                        var_dump($data_a, $data_b);

                        //validació dates
                        //check-date per si de cas ?
                        //arriben valors inputs amb '2021-11-21' aaaa-mm-dd

                        //checkdate(int $month, int $day, int $year): bool
                        //var_dump(checkdate(2,29,2003)); false
                        //var_dump(checkdate(2,29,2004)); true

                        //diferències entre dates
                        //https://www.delftstack.com/es/howto/php/how-to-calculate-the-difference-vetween-two-dates-using-php/

                        //mètode strtotime
                        //convertim els strings d'inputs a 'data unix' en segons
                        //strtotime(string $time, int $now = time()): int

                        //valido amb strtotime passant a timestamp
                        //dóna false si no és data correcte
                        if (strtotime($data_a) && strtotime($data_b)) {
                                //echo '<br>OK DATA';

                                $data_a = strtotime($data_a);
                                $data_b = strtotime($data_b);

                                //s'obté 'data unix' en segons
                                $dif = $data_b - $data_a;

                                //verificació data_b > data_a
                                if ($dif > 0) {

                                        //dif acumulant segons tipus
                                        //floor(arrodonir a enter)
                                        $anys  = floor($dif / (365 * 60 * 60 * 24));
                                        $mesos = floor(($dif - $anys * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                        $dies  = floor(($dif - $anys * 365 * 60 * 60 * 24 - $mesos * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                        $r .= "Hi ha una diferència de:<br>";
                                        $r .= $anys . " anys,  " . $mesos . " mesos i " . $dies . " dies<br>";

                                        //diferències per tipus       
                                        $r .= "<br>Diferències totals:";
                                        $r .= "<br>" . $dif / 60 / 60 / 24 / 365 . " anys ";
                                        $r .= "<br>" . $dif / 60 / 60 / 24 / 30 . " mesos ";
                                        $r .= "<br>" . $dif / 60 / 60 / 24 . " dies ";
                                        $r .= "<br>" . $dif / 60 / 60 . " hores ";
                                        $r .= "<br>" . $dif / 60 . " minuts ";
                                        $r .= "<br>" . $dif . " segons ";

                                        /*
                        //mètode DateTime() diff()
                        $da = new DateTime($data_a);
                        $db = new DateTime($data_b);
                        
                        $intvl = $da->diff($db);
                        
                        //obtenir diferències (->y, ->m, ->d)
                        echo "<br>";
                        echo $intvl->y . " anys, " . $intvl->m." mesos and ".$intvl->d." dies";
                        echo "<br>";
                
                        // Total amount of days (-> days)
                        echo "<br>". $intvl->days /365 . " anys ";
                        echo "<br>". $intvl->days /30 . " mesos ";
                        echo "<br>". $intvl->days . " dies ";
                        echo "<br>". $intvl->days * 24 . " hores ";
                        echo "<br>". $intvl->days * 24 * 60 . " minuts ";
                        echo "<br>". $intvl->days * 24 * 60 * 60 . " segons ";

                        //output: 1 year, 2 months and 1 day
                        //        428 days
                        */

                                        $_SESSION['resultat'] = $r;
                                } else {
                                        echo "<br>DATA_A NO ÉS LA PETITA";
                                        $_SESSION['resultat'] = NORMA_DATA;
                                }
                        } else {
                                echo "<br>NO FORMAT DATA";
                                $_SESSION['resultat'] = NORMA_DATA;
                        }
                } else {
                        echo "<br>ALGUNA DATA BUIDA";
                        $_SESSION['resultat'] = NORMA_DATA;
                }
        } else {
                echo "<br>NO POST";
        }

        header("Location:71.php");

        ?>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>