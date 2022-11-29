<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio1'>
        
        <!-- exercici -->
        <?php
        #isset, si la variable està definida i no és NULL
        if (isset($_POST['submit'])) {
            $num = $_POST['num'];

            #control si buit o >1 i <1000
            if ($num > 1 and $num < 1000) {
                #echo "ok";

                #inicialitzem
                $conta = 0;
                $x = $num - 1; // un número menys perquè per ell mateix si divideix

                #while per sortir si troba 1 divisor
                while ($x > 1 && $conta == 0) {
                    if ($num % $x == 0) {
                        $conta++;
                    }
                    $x--;
                }
                #echo $conta;

                if ($conta == 0) {
                    echo "<h1>" . $num . " és número primer</h1></br>";
                } else {
                    echo "<h1>" . $num . " NO és número primer</h1></br>";
                }
            } else {
                echo "<h1>El número ha de ser entre 2 i 999</h1></br>";
            }
        }

        #echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina
        echo "<form method='post' action=" . $_SERVER['PHP_SELF'] . ">";
        echo "<label for='num'>Número [< 1000]:</label><br>";
        echo "<input type='number' id='num' name='num' value=''><br><br>";
        echo "<input type='submit' name='submit' value='Envia'>";
        echo "</form>";
        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>