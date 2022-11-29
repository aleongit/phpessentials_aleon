<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio1'>
        <!-- exercici -->
        <?php

        # exemple URL
        # /fitxer.php?N1=1=&N2=100

        #depuració variable
        #var_dump($_GET);
        #echo gettype($_GET);

        #isset, si existeix
        #echo var_dump(isset($_GET));

        #comprovar si buida
        if (!empty($_GET)) {
            #echo "PLENA";

            #comprovar si dos valors
            #echo count($_GET);
            #if (count($_GET) == 2) {
            #echo "<h4>OK 2</h4>";
            if (isset($_GET['N1']) && isset($_GET['N2'])) {

                #comprovar si numèrics
                /*
                $conta = 0;
                foreach ($_GET as $el) {
                    if (!is_numeric($el)) {
                        #echo $el." NO numèric ";}
                        $conta += 1;
                    }
                }
                */
                #if (!$conta) {
                if (is_numeric($_GET['N1']) && is_numeric($_GET['N2'])) {
                    #echo "OK tots 2 numèrics";

                    #valors i passar a número
                    $n1 = intval($_GET['N1']);
                    $n2 = intval($_GET['N2']);

                    #control 2n més gran
                    if ($n1 > $n2) {
                        $temp = $n2;
                        $n2 = $n1;
                        $n1 = $temp;
                    }
                    echo "<h4>Els numeros entre " . $n1 . " i " . $n2 . " són</h4></br>";
                    echo "<table> <tr>";
                    //for
                    $x = 1;
                    for ($x = $n1; $x <= $n2; $x++) {
                        echo "<td>" . $x . "</td>";
                        if ($x % 10 == 0) {
                            echo "</tr><tr>";
                        } //files de 10 
                    }
                    echo "</tr> </table>";
                } else {
                    echo "<h4><mark>Has de passar 2 paràmetres NUMÈRICS</mark></h4></br>";
                }
            } else {
                echo "<h4><mark>Has de passar els paràmetres N1 i N2 per URL</mark></h4></br>";
            }
        } else {
            echo "<h4><mark>No has passat cap paràmetre per URL</mark></h4></br>";
        }

        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>