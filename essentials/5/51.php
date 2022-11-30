<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

        <!-- exercici -->
        <?php

        function crea_cookie($nom, $valor, $temps)
        {
            setcookie($nom, $valor, $temps);
        }

        function mira_cookie($nom)
        {

            if (isset($_COOKIE[$nom]) && isset($_COOKIE['galeta_temps'])) {
                var_dump($_COOKIE[$nom]);
                var_dump($_COOKIE['galeta_temps']);

                $vida = $_COOKIE['galeta_temps'] - time();

                echo "<h3>SI existeix cookie " . $nom . " amb valor <mark>" . $_COOKIE[$nom] . "</mark> </h3>";
                echo "<h3>A la cookie li queden " . $vida . " segons de vida </h3>";
            } else {
                echo "<h3>NO existeix cookie " . $nom . "</h3>";
            }
        }

        function destrueix_cookie($nom)
        {
            //si existeix

            if (isset($_COOKIE[$nom])) {
                setcookie($nom, '', time() - (60 * 60 * 24)); //caduca
                echo "<h3>Galeta destruïda</h3>";
            } else {
                echo "<h3>NO existeix cookie " . $nom . "</h3>";
            }
        }

        //definim
        define("TEMPS_15S", time() + 15); //caducitat 15 segons
        define("TEMPS_24H", time() + (60 * 60 * 24)); //caducitat 24 hores

        //si existeix GET
        if (isset($_GET['op'])) {

            $op = $_GET['op'];
            var_dump($op);

            //crear
            if (str_contains($op, 'Crea')) {
                //echo "Crear";
                crea_cookie('galeta', 'galeta creada', TEMPS_15S);
                crea_cookie('galeta_temps', strval(TEMPS_15S), TEMPS_24H); //guardo valor temps a 2a galeta

                //comprovar
            } elseif ($op == 'Comprova') {
                //echo "Comprovar";
                mira_cookie('galeta');

                //eliminar
            } elseif ($op == 'Destrueix') {
                destrueix_cookie('galeta');
                destrueix_cookie('galeta_temps'); //eliminem galeta temps també

            }
        } else {
            //echo "NO OP";
        }

        //form
        echo "<form method='get' action=" . $_SERVER['PHP_SELF'] . ">";
        echo "<input type='submit' name='op' value='Crea &#127850'>";
        echo "<input type='submit' name='op' value='Comprova'>";
        echo "<input type='submit' name='op' value='Destrueix'>";
        echo "</form>";

        ?>
        <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>