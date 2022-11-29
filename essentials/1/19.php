<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio1'>
        <!-- exercici -->
        <?php
        #isset, si la variable està definida i no és NULL
        if (isset($_POST['submit'])) {
            $nom = $_POST['nom'];
            $edat = $_POST['edat'];

            echo "<h1>Hola " . $nom . "! ";
            #echo "<h1>Tens ".$edat."</h1></br>";

            #control si buit
            if (!empty($nom) && !empty($edat)) {
                #control número (ja es controla amb type=number del input)
                #de totes maneres, mirem si número positiu
                if (is_numeric($edat) && $edat > 0) {
                    if ($edat >= 18) {
                        echo "Ets major d'edat</h1></br>";
                    } else {
                        echo "Ets menor d'edat</h1></br>";
                    }
                } else {
                    echo "Edat incorrecta</h1></br>";
                }
            } else {
                echo "Falta informació</h1></br>";
            }
        }

        #echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina
        echo "<form method='post' action=" . $_SERVER['PHP_SELF'] . ">";
        echo "<label for='nom'>Nom:</label><br>";
        echo "<input type='text' id='nom' name='nom' value=''><br>";
        echo "<label for='edat'>Edat:</label><br>";
        echo "<input type='number' id='edat' name='edat' value=''><br><br>";
        echo "<input type='submit' name='submit' value='Envia'>";
        echo "</form>";
        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>