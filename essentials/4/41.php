<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <h1>* Pàgina 1</h1>

    <!-- exercici -->
    <?php
    //D'INTERÈS
    //$text= $_SESSION['text'] ?? 'NO sessió';
    //echo $text;

    //$sortida = ( isset($_SESSION['text']) ? 'SI sessió' : 'NO sessió' );
    //echo $sortida;

    #session_start();

    //comprovem si existeix sessió
    if (isset($_SESSION['resposta'])) {

        echo "<h4>SI sessió</h4>";
        echo "<h4><mark>" . $_SESSION['resposta'] . "</mark></h4>";
        echo "<h4>* refresca pàgina per tornar-hi</h4>";

        //tanquem sessió
        unset($_SESSION['ok']);
        unset($_SESSION['resposta']);
        session_unset();
        session_destroy();
    } else {
        echo "<h4>NO sessió</h4>";

        //activem sessió
        $_SESSION['ok'] = True;

        //form
        echo "<form method='post' action='41pag2.php'>";
        echo "<label for='txt'>Escriu un text: </label><br>";
        echo "<input type='text' id='txt' name='txt'><br>";
        echo "<input type='submit' value='Envia'>";
        echo "</form>";
    }

    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>