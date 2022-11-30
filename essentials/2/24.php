<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio2'>

        <!-- exercici -->
        <?php
        #echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina

        #conversió graus
        /*Conversió de	a	Fórmula

Celsius	Fahrenheit	°F = °C⋅1,8 +32
Celsius kelvin T(K) = T(°C) + 273.15
Fahrenheit Celsius	°C = (°F-32) / 1,8
Fahrenheit kelvin	K = (°F+459,67) / 1,8
kelvin CelsiusT(°C) = T(K) - 273.15
kelvin Fahrenheit	°F = K⋅1,8 -459,67*/

        function converteixGraus(float $n, string $codi): float
        {

            switch ($codi) {
                    #Celsius Fahrenheit	°F = °C⋅1,8 +32
                case "CF":
                    $resultat = ($n * 1.8) + 32;
                    break;
                    #Celsius kelvin T(K) = T(°C) + 273.15
                case "CK":
                    $resultat = $n + 273.15;
                    break;
                    #Fahrenheit	Celsius	°C = (°F-32) / 1,8
                case "FC":
                    $resultat = ($n - 32) / 1.8;
                    break;
                    #Fahrenheit	kelvin	K = (°F+459,67) / 1,8
                case "FK":
                    $resultat = ($n + 459.67) / 1.8;
                    break;
                    #kelvin CelsiusT(°C) = T(K) - 273.15
                case "KC":
                    $resultat = $n - 273.15;
                    break;
                    #kelvin Fahrenheit	°F = K⋅1,8 -459,67*/
                case "KF":
                    $resultat = ($n * 1.8) - 459.67;
                    break;
                default:
                    $resultat = $n;
                    break;
            }
            return $resultat;
        }

        function simbol(string $sim): string
        {

            #Kelvin no són graus; trec símbol
            if ($sim == 'K') {
                $cad = " ";
            } else {
                $cad = " º";
            }
            return $cad;
        }

        #isset, si la variable està definida i no és NULL
        if (!empty($_GET['num'])) {
            #echo var_dump($_GET);

            #agafem valors
            $t1 = $_GET['gr'];
            $t2 = $_GET['gr_con'];
            $num = floatval($_GET['num']); //a float

            #echo "<br>".$t1." i ".$t2." i ".$num." de tipus ".gettype($num)."<br>";

            $codi = $t1 . $t2;
            #echo $codi;

            echo "<h1>" . $num . simbol($t1) . $t1 . " = ";
            echo converteixGraus($num, $codi) . simbol($t2) . $t2 . "</h1>";
        } else {
            echo "<h1>Falta el número</h1>";
        }

        echo "<form method='get' action=" . $_SERVER['PHP_SELF'] . ">";
        echo "<input type='radio' id='cel' name='gr' value='C' checked>";
        echo "<label for='fah'>ºC - Celsius</label>";
        echo "<input type='radio' id='fah' name='gr' value='F'>";
        echo "<label for='fah'>ºF- Fahrenheit</label>";
        echo "<input type='radio' id='kel' name='gr' value='K'>";
        echo "<label for='fah'>K - Kelvin</label>";
        echo "<br><input type='number' step='0.01' id='num' name='num' value=''><br>";
        echo "<input type='radio' id='cel' name='gr_con' value='C'>";
        echo "<label for='fah'>ºC - Celsius</label>";
        echo "<input type='radio' id='fah' name='gr_con' value='F' checked>";
        echo "<label for='fah'>ºF- Fahrenheit</label>";
        echo "<input type='radio' id='kel' name='gr_con' value='K'>";
        echo "<label for='fah'>K - Kelvin</label>";
        echo "<br><input type='submit' name='submit' value='Envia'><br><br>";
        echo "</form>";
        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>