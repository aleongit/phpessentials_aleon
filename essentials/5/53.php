<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

        <!-- exercici -->
        <?php

        //definim
        define("TEMPS_24H", time() + (60 * 60 * 24)); //caducitat 24h
        $conta = 1;
        $estrella = "&#11088;";
        $plora = "&#128557;";

        function comptador_html($conta)
        {

            $max = 3;
            $sortida = "";

            //calcula estrelles
            if ($conta > 5 * $max) {
                $estrelles = 3;
            } else {
                $estrelles = ($conta / 5) % ($max + 1);
            } //residu fins 3 + 1

            //echo $estrelles." estrelles ";
            //echo strlen($conta);

            $sortida .= "<div id='conta' class='centrat'>";
            //escriu spans
            for ($i = 0; $i < strlen($conta); $i++) {
                $sortida .= "<span>" . $conta[$i] . "</span>";
            } //span de pos num

            $sortida .= "</div>";

            $sortida .= "<div class = 'estrelles centrat'>";
            //si no estrelles
            if ($estrelles == 0) {
                $sortida .= "&#128557;";
            } //plora
            //escriu estrelles
            for ($i = 0; $i < $estrelles; $i++) {
                $sortida .= "&#11088;";
            } //estrella
            $sortida .= "</div>";

            $sortida .= "<div class='missatge centrat'>Moltes gràcies per la visita :)</div>";
            return $sortida;
        }

        //si existeix COOKIE
        if (isset($_COOKIE['visites'])) {

            //mostra
            //var_dump($_COOKIE['visites']);

            //incrementa comptador
            $conta = strval(intval($_COOKIE['visites']) + 1);
            //var_dump($conta);

            //update cookie +1
            setcookie('visites', $conta, TEMPS_24H);

            //sortida html
            echo comptador_html($conta);
        } else {
            //echo "NO COOKIE";

            //crear cookie visites, comptador 1
            setcookie('visites', strval($conta), TEMPS_24H);

            //sortida html
            echo comptador_html(strval($conta));
        }

        ?>

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>