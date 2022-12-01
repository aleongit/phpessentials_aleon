<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom6.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

        <!-- exercici -->

        <!-- enviament form -->
        <?php

        //definim
        $_SESSION['errors'] = [];

        define('IDIOMES', ['cat', 'esp', 'eng', 'fra']);

        define('NORMA_NOM', 'Obligatori, lletres majúscules, minúscules i espais');
        define('NORMA_PASS', 'Obligatori, mida mínima 8, almenys una lletra majúscula, una minúscula, una xifra i un caràcter especial (-/*+)');
        define('NORMA_IDI', 'Obligatori, i només 1');
        define('NORMA_MAIL', 'Email obligatori i format email correcte');
        define('NORMA_WEB', 'Lloc web opcional, que sigui una web correcta');
        define('MISSATGE_OK', 'TOT OK! :) ');

        //funció neteja inputs (espais + barres + caràcters especials html)
        function test_input($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        var_dump($_SESSION);
        echo "<br>";
        var_dump($_POST);
        echo "<br>";
        var_dump($_SESSION['errors']);
        echo count($_SESSION['errors']);

        //control obligatoris no buids
        //no ho faig aquí, ho faig després i per cas individual
        //if  ( !( empty($_POST['nom']) || empty($_POST['pass']) || empty($_POST['idiomes']) || empty($_POST['mail']) ) ) {

        //validacions input
        $nom = test_input($_POST['nom']);
        $pass = test_input($_POST['pass']);
        $forma = test_input($_POST['forma']);

        // idiomes és array
        // són valors que hem predifinit, però validem igualment cada valor per la mala gent
        $idi = [];
        foreach ($_POST['idiomes'] as $idioma) {
                $idi[] = test_input($idioma);
        }

        $mail = test_input($_POST['mail']);
        $web = test_input($_POST['web']);

        echo "<br>";
        var_dump($nom, $pass, $forma, $idi, $mail, $web);

        //validació nom
        //Nom: obligatori, lletres majúscules minúscules i espais
        echo "<br>Validació nom:";
        echo preg_match("/^[a-zA-z-\s]*$/", $nom);

        if (!(preg_match("/^[a-zA-z-\s]*$/", $nom)) || empty($nom)) {
                echo "<br>* FATAL ERROR * Nom";
                $_SESSION['errors']['nom'] = NORMA_NOM;
        }

        //validació pass
        //Password: Obligatori, mida mínima 8, almenys una lletra majúscula, una minúscula, 
        echo "<br>Validació pass:";
        //una xifra i un caràcter especial (-/*+)
        //https://www.coding.academy/blog/how-to-use-regular-expressions-to-check-password-strength
        //https://docs.trifacta.com/display/DP/Supported+Special+Regular+Expression+Characters
        // per barra '/' = \/\\

        $pattern = '/^(?=.*[*+-\/\\])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
        echo preg_match($pattern, $pass);

        if (!(preg_match($pattern, $pass)) || empty($pass)) {
                echo "<br>* FATAL ERROR * Password";
                $_SESSION['errors']['pass'] = NORMA_PASS;
        }

        //validació idiomes
        //Idiomes: cal triar-ne només 1, val validar que sigui una de les opcions vàlides
        echo "<br>Validació idiomes:<br>";

        //rebem llista idiomes
        var_dump($idi);
        echo count($idi) . "<br>";
        echo in_array($idi[0], IDIOMES);

        if ((count($idi) != 1) || !in_array($idi[0], IDIOMES) || empty($idi)) {
                $_SESSION['errors']['idi'] = NORMA_IDI;
        }

        //validació mail
        //Email obligatori, validar que sigui un email correcte
        echo "<br>Validació mail:<br>";
        /*
if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $emailAddress)){
        //Email address is invalid.
    }*/

        echo filter_var($mail, FILTER_VALIDATE_EMAIL);

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL) || empty($mail)) {
                $_SESSION['errors']['mail'] = NORMA_MAIL;
        }

        //validació URL
        //Lloc web opcional, que sigui una web correcta
        echo "<br>Validació url:<br>";

        //si hi ha url
        if (!empty($web)) {
                echo filter_var($web, FILTER_SANITIZE_URL);
                echo filter_var($web, FILTER_VALIDATE_URL);

                //sanititzem i mirem si url ok
                $web = filter_var($web, FILTER_SANITIZE_URL);
                if (!filter_var($web, FILTER_VALIDATE_URL)) {
                        $_SESSION['errors']['web'] = NORMA_WEB;
                }
        }

        //errors ?
        echo "<br>";
        var_dump($_SESSION['errors']);
        echo count($_SESSION['errors']);

        if (count($_SESSION['errors']) == 0) {
                $_SESSION['ok'] = MISSATGE_OK;
        }

        header("Location:61.php");

        ?>
        <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>