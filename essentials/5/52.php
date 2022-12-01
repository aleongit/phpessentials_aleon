<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom5.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php

    function crea_cookie($nom, $valor, $temps)
    {
        setcookie($nom, $valor, $temps);
    }

    function mostra_data($abans)
    {

        $ara = time(); //time stamp actual
        //$test = time () + (60*60*24) * 30; //+1 mesos
        //$test = time () + (60*60*24) * 2; //+2 dies

        //mostra
        //var_dump($abans);
        //var_dump($ara);

        //diferència
        $dif = ($ara - $abans);

        //array associatiu
        //calculem la diferència en cada mesura, segons càlculs time()
        $conversions = [
            //'y' => $segons / 31556926 % 12,
            //'w' => $segons / 604800 % 52,
            //'Mesos' => $dif / (60 * 60 * 24 * 30) % 12,
            'Dies' => $dif / (60 * 60 * 24) % 7,
            'Hores'  => $dif / (60 * 60) % 24,
            'Minuts' => $dif / 60 % 60,
            'Segons' => $dif % 60
        ];

        //guardem cada mesura si càlcul no és 0 
        foreach ($conversions as $k => $v) {
            if ($v > 0) {
                $retorna[] = $v . " " . $k;
            }
        }
        //retornem amb string
        return join(' ', $retorna);
    }

    //definim
    define("TEMPS_365D", time() + (60 * 60 * 24 * 365)); //caducitat 1 any

    //si existeix 1a COOKIE
    if (isset($_COOKIE['primera'])) {

        //mostra
        //var_dump($_COOKIE['primera']);

        //resultat
        echo "<h3><mark>" . mostra_data(intval($_COOKIE['primera'])) . "</mark></h3>";
    } else {
        //echo "NO 1a COOKIE";

        //1a visita, missatge benvingut
        echo "<h3><mark>1a visita! Benvingut : )</mark></h3>";

        //crear cookie 1a visita
        crea_cookie('primera', strval(time()), TEMPS_365D);
    }
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>