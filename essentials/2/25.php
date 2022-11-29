<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio2'>

        <!-- exercici -->
        <?php
        #echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina

        #declaro constant abc per tal que entri a funció
        define("abc", "abcçdefghijklmnñopqrstuvwxyz"); //constant
        define("ABC", "ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZ"); //constant

        #strtoupper no transforma 'ç' ni 'ñ'
        #$ABC = strtoupper($abc);

        #funció per saber si hi ha alguna lletra (en abc)
        #si són nums o símbols retorna false
        function es_abc(string $cad): bool
        {
            $ok = False;

            for ($x = 0; $x < strlen($cad); $x++) {
                #compte strpos, si és 'a' retorna index 0 i fa un fals FALSE
                #if (strpos(abc,strtolower($cad[$x]))) {
                if (str_contains(abc, strtolower($cad[$x]))) {
                    $ok = True;
                }
                #echo($cad[$x])."-";
                #var_dump($ok)."<br>";
            }
            return $ok;
        }

        function nomesMin(string $cad): bool
        {
            $min = True;
            $x = 0;
            while ($x < strlen($cad) and $min) {
                #si està a majúscules, la cad no és minúscules
                #compte strpos, si és 'a' retorna index 0 i fa un fals FALSE
                #if (strpos(ABC,$cad[$x])) {
                if (str_contains(ABC, $cad[$x])) {
                    $min = False;
                };
                $x++;
                #echo var_dump($min);
                #echo "x: ".$x;
            };
            return $min;
        }

        echo "<form method='get' action=" . $_SERVER['PHP_SELF'] . ">";
        echo "<label for='t1'>Cadena: </label>";
        echo "<br><input type='text' id='t1' name='cad' value=''><br>";
        echo "<br><input type='submit' name='submit' value='Envia'><br><br>";
        echo "</form>";

        #isset, si la variable està definida i no és NULL
        if (!empty($_GET['cad'])) {
            #echo var_dump($_GET);

            #agafem valors
            $cad = $_GET['cad'];

            #test
            #echo $cad[0];
            #echo $cad[strlen($cad)-1];
            #echo "<h4>".$abc."</h4>";
            #echo "<h4>".ABC."</h4>";
            #echo "la a ? ".strpos(abc,'a');
            #echo "la b ? ".strpos(abc,'b');

            #comprovo si abc
            if (es_abc($cad)) {

                #comprovo si només minúscules
                if (nomesMin($cad)) {
                    echo "<h2>La cadena <mark>" . $cad . "</mark> conté només minúscules</h2>";
                } else {
                    echo "<h2>La cadena <mark>" . $cad . "</mark> conté majúscules</h2>";
                }
            } else {
                echo "<h2><mark>No hi han lletres abc</mark></h2>";
            }
        } else {
            echo "<h2><mark>Falta cadena</mark></h2>";
        }

        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>