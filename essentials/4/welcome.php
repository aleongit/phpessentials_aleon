<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

  <!-- exercici -->
  <?php
  require_once 'includes/header.php';

  //constants
  define("DOMINI", "@lacetania.cat");
  define("PASS", "1234");
  define("M_ERROR", "<h1><mark>* FATAL ERROR * Login incorrecte</mark></h1>");
  define("M_WELCOME", "BENVINGUT/DA :) ");

  //per si torna a pàgina un cop logat
  if (isset($_SESSION['user'])) {
    echo "<h4>SI sessió user</h4>";
    echo "<h4><mark>" . $_SESSION['user'] . "</mark></h4>";
    //si existeix user no cal validació post
    //contingut repetit dades sessió + botó logout
    require_once 'includes/benvingut.php';
  }

  //si no està logat
  else {

    if (isset($_SESSION['ok'])) {
      //echo "<h4>sessió activada</h4>";

      //comprovar POST
      if (isset($_POST['email']) && isset($_POST['pwd'])) {
        //echo "<h4>SI email i pass</h4>";
        //echo var_dump($_POST['email']);
        //echo var_dump($_POST['pwd']);
        $email = $_POST['email'];
        $pass = $_POST['pwd'];

        //control buit
        if (!empty($email) && !empty($pass)) {
          //echo "OK PLE";

          //control valors enviat
          //qualsevol email amb el domini @lacetania.cat, i pasword 1234

          //control email
          //$paraules = explode("@",$email); //divideix paraules de cadena amb separador a array
          //si conté arroba, mirem subcadena a partir de posició arroba
          if (str_contains($email, '@')) {
            $domini = substr($email, strpos($email, '@'));
            //echo "<br>".$domini;

            //comprovació credencials
            if ($domini == DOMINI and $pass == PASS) {

              //activem sessió user
              $_SESSION['user'] = $email;
              $_SESSION['welcome'] = M_WELCOME;

              echo "<h4>SI sessió user</h4>";
              echo "<h4>" . $_SESSION['user'] . "</h4>";

              //regenerem sessió per seguretat
              session_regenerate_id();

              //contingut repetit dades sessió + botó logout
              require_once 'includes/benvingut.php';
            } else {
              //echo "<br>error credencials";
              echo M_ERROR;
            }
          } else {
            //no arroba
            //si fem type = email en form html, ja valida el form
            //echo "<br>NO arroba";
            echo M_ERROR;
          };
        } else {
          //echo "<br>Dades buides";
          echo M_ERROR;
        }
      } else {
        //echo "<br>NO existeixen variables post";
      }
    } else {
      //echo "<br>NO sessió";
    }
  }

  require_once 'includes/footer.php';
  ?>
  <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>