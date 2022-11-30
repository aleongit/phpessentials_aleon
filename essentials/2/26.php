<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio2'>

        <!-- exercici -->
        <?php
        /*
        palíndroms:
            pipiripip
            radar
            minim
            atreballarallaberta
            catalaalatac
        */

        #declaració funció
        #no tinc en compte accents ni símbols ni espais
        function palindrom(string $cad): bool
        {
            $ok = False;
            $girada = "";
            # afegim lletra a cadena buida d'esquerra a dreta
            for ($i = strlen($cad) - 1; $i >= 0; $i--) {
                $girada .= $cad[$i];
            }
            if ($girada == $cad) {
                $ok = True;
            }
            echo $girada . "</h2>";
            return $ok;
        }

        #isset, si la variable està definida i no és NULL
        if (!empty($_GET['cad'])) {
            #echo var_dump($_GET);

            #agafem valors
            $cad = $_GET['cad'];

            echo "<h2>" . $cad . " =? ";

            #palíndrom ?
            if (palindrom($cad)) {
                echo "<h2>Sí és Palíndrom</h2>";
            } else {
                echo "<h2>No és Palíndrom</h2>";
            }
        } else {
            echo "<h2><mark>Falta cadena</mark></h2>";
        }

        #echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina
        echo "<form method='get' action=" . $_SERVER['PHP_SELF'] . ">";
        echo "<label for='t1'>Cadena: </label>";
        echo "<br><input type='text' id='t1' name='cad' value=''><br>";
        echo "<br><input type='submit' name='submit' value='Envia'><br><br>";
        echo "</form>";
        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>