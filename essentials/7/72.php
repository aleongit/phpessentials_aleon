<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom7.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

    <!-- exercici -->

    <!-- form -->
    <!-- enctype="multipart/form-data -->
    <h4>Selecciona una imatge per pujar:</h4>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">

            <div class="row">
                <input type="file" name="fitxer" id="fitxer">
            </div>

            <div class="row">
                <input type="submit" name='puja' value='Puja Imatge'>
            </div>

        </form>
    </div>

    <div class='resultat'> <?php echo ($_SESSION['resultat']) ?? '' ?></div>

    <div class='imatge'><?php echo ($_SESSION['img']) ?? '' ?></div>

    <?php

    //netegem sessió pel refresc navegador
    session_unset();
    session_destroy();

    ?>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>