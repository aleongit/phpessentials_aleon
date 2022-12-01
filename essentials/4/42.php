<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->
    <?php
    require_once 'includes/header.php';

    //comprovem si existeix sessió
    if (isset($_SESSION['user'])) {
        echo "<h4>SI sessió user</h4>";
        echo "<h4>" . $_SESSION['user'] . "</h4>";

        //contingut repetit dades sessió + botó logout
        require_once 'includes/benvingut.php';
    } else {
        echo "<h4>NO sessió user</h4>";

        //activem sessió
        $_SESSION['ok'] = True;

        //form
        echo "<form method='post' action='welcome.php'>";
        echo "<label for='email'>Email:</label>";
        echo "<input type='email' id='email' name='email'>";
        echo "<label for='pwd'>Password:</label>";
        echo "<input type='password' id='pwd' name='pwd' maxlength='4'>";
        echo "<input type='submit' value='Envia'>";
        echo "</form>";
    }
    require_once 'includes/footer.php';
    ?>
    <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>