<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio2'>

        <!-- exercici -->
        <?php

        function rectangle(float $c1, $c2): float
        {
            $area = $c1 * $c2;
            echo "<h4>* Àrea rectangle dins funció [" . $c1 . " x " . $c2 . "] = " . ($area) . "</h4>";
            return $area;
        }

        # exemple URL
        # /fitxer.php?N1=5

        #comprovar si buida
        if (!empty($_GET)) {
            #comprovar si dos valor
            #if (count($_GET) == 2) {
            if (isset($_GET['N1']) && isset($_GET['N2'])) {

                #agafo noms variables GET
                #array_keys agafa keys i les passa a un array normal
                #$keys = array_keys($_GET);

                #agafem valors
                #$n1 = $_GET[$keys[0]];
                #$n2 = $_GET[$keys[1]];
                #valors i passar a número

                #comprovar si numèric   
                if (is_numeric($_GET['N1']) and is_numeric($_GET['N2'])) {
                    #echo $n1."</br>";
                    #a float
                    $n1 = floatval($_GET['N1']);
                    $n2 = floatval($_GET['N2']);

                    echo $n1 . " i " . $n2;

                    #crida àrea rectangle
                    echo "<h4>* Àrea rectangle fora funció [" . $n1 . " x " . $n2 . "] = " . rectangle($n1, $n2) . "</h4>";
                } else {
                    echo "<h4><mark>Els paràmetres URL han de ser numèrics</mark></h4>";
                }
            } else {
                echo "<h4><mark>Has de passar els paràmetres N1 i N2 per URL</mark></h4>";
            }
        } else {
            echo "<h4><mark>No has passat cap paràmetre per URL</mark></h4>";
        }

        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>