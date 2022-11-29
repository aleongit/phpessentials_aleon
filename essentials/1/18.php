<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-18_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>8. Crea un select en HTML i posa-hi els números de l’1 al 10 com opcions.</h4>

<?php

#constant
define("MIN", 1);
define("MAX", 10);

echo "<label for='nums'>Números:</label>";
echo "<select name='nums' id='nums'>";
for ($x = MIN; $x <= MAX; $x++) {
echo "<option value=".$x.">".$x."</option>";
}
echo "</select>";

?>

<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>