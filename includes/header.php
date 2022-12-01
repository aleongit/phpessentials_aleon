<!doctype html>
<html lang="ca">
<!-- meta idioma -->

<head>
  <meta charset="utf-8">
  <!--meta joc de caràcters -->
  <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
  <meta name="description" content="">
  <meta name="author" content="Aleix Leon">

  <title><?php echo TITOL; ?></title><!-- títol de la web -->


  <!-- estils aleon -->
  <link rel="stylesheet" type="text/css" href="<?php echo PATH_ROOT . 'css/aleon.css' ?>">

  <?php
  if (defined('FILE_CUSTOM_CSS')) {
  echo '<link rel="stylesheet" type="text/css" href="'. PATH_ROOT . 'css/'. FILE_CUSTOM_CSS.'">';
  }
  ?>

  <!-- CSS interns -->
  <style>
    <?php
    echo "body, form, label, nav, .main, div.marca, .button, .pregunta
     {  background-color:" . $globals['cpagina'] . "; color:" . $globals['ctext'] . "; } ";
    ?>
  </style>

</head>

<body>

  <!-- container_________________________________________________________________-->
  <div class='container'>

    <!-- menú capçalera____________________________________________________________-->
    <header>
      <div class='marca'>
        <a class='sense_deco' href="<?php echo PATH_ROOT . 'index.php' ?>">
          <h2 class='logo'>PHP Essentials <span class='blau'>{<span class='negre'>aleon</span>}</span></h2>
        </a>
      </div>
      <nav>
        <!--<a class='button' href='test.php' >Test</a>-->
        <a class='button' href="<?php echo PATH_ROOT . 'index.php' ?>">Home</a>
        <?php
        foreach ($SECTIONS as $key => $value) {
          $href = PATH_ROOT . "index.php#seccio{$key}";
          echo "<a class='button' href='{$href}'>{$value['title']}</a>";
        }
        ?>
        <a class='button' href='#'>About</a>
      </nav>

      <!-- fi menú cap __________________________________________________________-->
    </header>