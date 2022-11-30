<?php define('PATH_ROOT', '../../'); ?>
<?php
$globals = $GLOBALS;
!isset($_COOKIE['cpagina']) ? $globals['cpagina'] = 'white' : $globals['cpagina'] = $_COOKIE['cpagina'];
!isset($_COOKIE['ctext']) ? $globals['ctext'] = 'black' : $globals['ctext'] = $_COOKIE['ctext'];
?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>


<div class='main'>

        <!-- exercici -->
        <?php

        //definim
        define("TEMPS_24H", time() + (60 * 60 * 24)); //caducitat 24h

        //si existeixen cookies colors
        if (isset($_COOKIE['cpagina']) && isset($_COOKIE['ctext'])) {
                var_dump($_COOKIE['cpagina']);
                var_dump($_COOKIE['ctext']);

                //canvia valors cookies
                $globals['cpagina'] = $_COOKIE['cpagina'];
                $globals['ctext'] = $_COOKIE['ctext'];
        } else {
                //echo "NO COOKIE";
                //colors per defecte
        }

        ?>

        <!-- form -->
        <form id='colors' method='get' action=<?php $_SERVER['PHP_SELF'] ?>>

                <div class='fila_form'>
                        <label for="cpag">Color Pàgina: </label>
                        <!--select id="cpag" name="cpag">
                        <option value="white">Blanc</option>
                        <option value="black">Negre</option>
                        <option value="yellow">Groc</option>
                        </select>-->
                        <!--m'ha agradat més input type color-->
                        <input type='color' id="cpagina" name='cpagina' value=''>
                </div>

                <div class='fila_form'>
                        <label for="ctxt">Color Text: </label>
                        <input type='color' id="ctext" name='ctext' value=''>
                </div>

                <input type="submit" name='envia' value='Envia'>

        </form>

        <!-- enviament form -->
        <?php

        if (isset($_GET['cpagina']) && isset($_GET['ctext'])) {
                var_dump($_GET['cpagina']);
                var_dump($_GET['ctext']);

                //colors hex
                $globals['cpagina'] = $_GET['cpagina'];
                $globals['ctext'] = $_GET['ctext'];

                //refresquem per aplicar colors
                header('Location: ' . $_SERVER['PHP_SELF']);

                //si colors no iguals
                if ($globals['cpagina'] != $globals['ctext']) {
                        //echo "OK";
                        //set cookies
                        setcookie('cpagina', $globals['cpagina'], TEMPS_24H);
                        setcookie('ctext', $globals['ctext'], TEMPS_24H);
                }
                //borrem variables get i refresquem
                else {
                        //echo "COLORS IGUALS";
                        unset($_GET['cpagina']);
                        unset($_GET['ctext']);
                        //echo empty($_GET['cpagina']);

                        header('Location: ' . $_SERVER['PHP_SELF']);
                }
        } else {
                //echo "NO GET";
        }

        ?>
        <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>