<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom7.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

        <!-- exercici -->

        <!-- enviament form -->
        <?php

        //definim
        define('TIPUS_OK', ['image/jpg', 'image/jpeg', 'image/bmp', 'image/gif', 'image/png']);
        define('NORMA_FITXER', 'Obligatori, format [jpg, jpeg, bmp, gif, png]');
        define('IMATGE_OK', 'Imatge pujada OK :)');
        define('DIR_IMG', 'img/');

        $_SESSION['resultat'] = "";

        //var_dump($_SESSION);

        //comprovar a php.ini
        //upload_max_filesize = 256M
        //post_max_size = 256M

        var_dump($_FILES['fitxer']);
        //die();

        $fitxer = $_FILES['fitxer'];
        $nom = $fitxer['name'];
        $tipus = $fitxer['type'];

        //si fitxer
        if (!empty($fitxer['name'])) {

                echo "<br>" . $tipus;
                //valida format
                if (in_array($fitxer['type'], TIPUS_OK)) {
                        echo "<br>OK TIPUS";

                        //is_dir = si un fitxer és dir
                        //si no existeix, es crea
                        if (!is_dir(DIR_IMG)) {
                                mkdir(DIR_IMG, 0777);
                        }
                        //moure fitxer
                        echo "<br>" . $fitxer['name'];
                        echo "<br>" . DIR_IMG . $nom;
                        //$fitxer['tmp_name'] !!!!
                        move_uploaded_file($fitxer['tmp_name'], DIR_IMG . $nom);
                        $_SESSION['resultat'] .= IMATGE_OK;
                        $_SESSION['img'] = "<img src=" . DIR_IMG . $nom . " width = 20% >";
                } else {
                        echo "<br>*FATAL ERROR* tipus";
                        $_SESSION['resultat'] .= NORMA_FITXER;
                }
        } else {
                echo "<br>*FATAL ERROR* no fitxer";
                $_SESSION['resultat'] .= NORMA_FITXER;
        }
        echo "<br>";
        var_dump($_SESSION['resultat']);
        header("Location:72.php");

        ?>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>