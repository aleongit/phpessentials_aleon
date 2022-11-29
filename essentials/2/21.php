<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio2'>
        
        <!-- exercici -->
        <?php

        #funció factorial
        #5! = 1 x 2 x 3 x 4 x 5 = 120
        function factorial(int $num): float
        {

            $acu = 1;
            $cad = "";

            $cad .= $num . "! = ";
            for ($i = 1; $i <= $num; $i++) {
                $cad .= " " . $i . " x";
                $acu *= $i;
            }
            #depurem última pos
            #substr(cad,inici,longitud)
            echo substr($cad, 0, strlen($cad) - 1);

            return $acu;
        }

        #comprovar si buida
        if (!empty($_GET)) {

            #comprovar si un valor
            #if (count($_GET) == 1) {
            if (isset($_GET['VALOR'])) {

                $n1 = $_GET['VALOR'];

                #comprovar si numèric
                #echo gettype($n1)."</br>";
                #echo is_numeric($n1)."</br>";

                if (is_numeric($n1)) {
                    #echo $n1."</br>";
                    #a enter
                    $n1 = intval($n1);

                    #crida factorial
                    echo "<h4>";
                    echo " = <mark>" . factorial($n1) . "</mark>";
                    echo "</h4>";
                    #echo gettype(factorial($n1));
                } else {
                    echo "<h4><mark>El paràmetre URL ha de ser numèric</mark></h4>";
                }
            } else {
                echo "<h4><mark>Has de passar el paràmetre VALOR per URL</mark></h4>";
            }
        } else {
            echo "<h4><mark>No has passat cap paràmetre per URL</mark></h4>";
        }

        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>