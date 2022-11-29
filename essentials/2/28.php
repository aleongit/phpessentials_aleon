<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio2'>

        <!-- exercici -->
        <?php
        #echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina

        function calculadora($n1, $n2, $op)
        {

            #si nums
            #isset, si la variable està definida i no és NULL
            $total = 0;
            if (!empty($_GET['num1']) and !empty($_GET['num2'])) {
                #echo var_dump($_GET['op']);

                #agafem valors
                $n1 = floatval($_GET['num1']);
                $n2 = floatval($_GET['num2']);

                #echo "<br>".$n1." i ".$n2." de tipus ".gettype($n1).gettype($n2)."<br>";

                #si operació
                if (isset($_GET['op'])) {
                    $op = $_GET['op'];

                    #mirem operació
                    switch ($op) {
                        case "+":
                            #echo "SUMA";
                            $total = $n1 + $n2;
                            break;
                        case "-":
                            #echo "RESTA";
                            $total = $n1 - $n2;
                            break;
                        case "*":
                            #echo "MULTIPLICA";
                            $total = $n1 * $n2;
                            break;
                        case "/":
                            #echo "DIVIDEIX";
                            $total = $n1 / $n2;
                            break;

                        default:
                            #echo "RES";
                            $total = 0;
                            break;
                    }
                }

                echo $n1 . " " . $op . " " . $n2 . " = " . $total;
            } else {
                echo "<h4><mark>Falta número</mark></h4>";
            }
            return $total;
        }

        #per recuperar valors després de submit
        $num1 = "";
        $num2 = "";
        if (isset($_GET['num1']) and isset($_GET['num2'])) {
            $num1 = floatval($_GET['num1']);
            $num2 = floatval($_GET['num2']);
        }

        echo "<form method='get' action=" . $_SERVER['PHP_SELF'] . ">";

        echo "<label for='num1'>Número 1</label>";
        echo "<br><input type='number' step='0.01' id='num1' name='num1' value=$num1><br>";

        echo "<label for='num2'>Número 2</label>";
        echo "<br><input type='number' step='0.01' id='num2' name='num2' value=$num2><br>";

        echo "<label for='res'>Resultat</label>";

        #si existeixen variables cridem funció calculadora a input resultat
        if (isset($_GET['num1']) and isset($_GET['num2']) and isset($_GET['op'])) {
            echo "<br><input type='number' step='0.01' id='res' name='res' value=" . calculadora($_GET['num1'], $_GET['num2'], $_GET['op']) . " readonly><br>";
        } else {
            echo "<br><input type='number' step='0.01' id='res' name='res' value='' readonly><br>";
        }

        echo "<input type='submit' name='op' value='+'>";
        echo "<input type='submit' name='op' value='-'>";
        echo "<input type='submit' name='op' value='*'>";
        echo "<input type='submit' name='op' value='/'><br><br>";
        echo "</form>";

        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>