<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio3'>

        <!-- exercici -->
        <?php
        require_once 'includes/header.php';

        //comprovem si existeix sessió
        if (isset($_SESSION['user'])) {
            echo "<h4>SI sessió user</h4>";
            echo "<h4>" . $_SESSION['user'] . "</h4>";

            //missatge
            echo "<h3><mark>FINS LA PROPERA :( " . $_SESSION['user'] . "</mark></h3>";

            //tanquem sessió
            session_unset();
            session_destroy();
        } else {
            echo "<h4>NO sessió</h4>";
        }

        require_once 'includes/footer.php';
        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>