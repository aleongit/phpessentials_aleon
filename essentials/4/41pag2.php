<?php define('PATH_ROOT', '../../'); ?>
<?php define('FILE_CUSTOM_CSS', 'custom3.css'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>

  <h1>* Pàgina 2</h1>

  <!-- exercici -->
  <?php
  //lletres, números i espai
  define("abc123", " abcçdefghijklmnñopqrstuvwxyz1234567890");

  $resposta = "";

  //funció si 'abc123'
  function es_abc123(string $cad): bool
  {
    $ok = True;
    for ($x = 0; $x < strlen($cad); $x++) {
      if (!str_contains(abc123, strtolower($cad[$x]))) {
        $ok = False;
      }
    }
    return $ok;
  }

  if (isset($_SESSION['ok'])) {
    echo "<h4>SI sessió</h4>";

    //comprovar POST
    if (isset($_POST['txt'])) {
      echo "<h4>SI post</h4>";
      echo var_dump($_POST['txt']);

      //control valor enviat
      $valor = $_POST['txt'];

      //control buit
      if (!empty($valor)) {
        echo "<h4>OK ple</h4>";

        //control si nums i lletres
        if (es_abc123($valor)) {
          echo "<h4>OK abc123</h4>";
          $resposta = "OK " . $valor;

          //afegim comprovació si única paraula amb majúscules
          $resposta .= (ctype_upper($valor) ? "<br>SI paraula MAJÚSCULES" : "<br>NO paraula MAJÚSCULES");
        } else {
          echo "<h4>* ERROR * no abc123</h4>";
          $resposta = "* FATAL ERROR * Lletres i números i PROU";
        }
      } else {
        echo "<h4>* ERROR * buit</h4>";
        $resposta = "* FATAL ERROR * Formulari buit";
      }
    } else {
      echo "<h4>NO post</h4>";
    }
  } else {
    echo "<h4>NO sessió</h4>";
  }

  //respost a $_SESSION
  $_SESSION['resposta'] = $resposta;

  //redirigim amb header
  header('Location: 41.php');

  ?>
  <!-- fi exercici -->

</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>