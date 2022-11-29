<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-13_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>3. Imprimeix per pantalla els quadrats dels 20 primers nombres naturals (1..20).
Utilitzant un for i un while.</h4>
<?php

define("N", 20); //constant

//while
$x = 1;
echo "<h3>amb 'while'</h3> <table><tr><th>Número</th><th>Quadrat</th></tr>";
while ($x <= N){
echo "<tr><td>".$x."</td><td>".($x**2)."</td></tr>";
$x++;
} ;
echo "</tr> </table>";

//for
$x = 1;
echo "<h3>amb 'for'</h3> <table><tr><th>Número</th><th>Quadrat</th></tr>";
for ($x = 1; $x <= N; $x++)  {
echo "<tr><td>".$x."</td><td>".($x**2)."</td></tr>";
};
echo "</tr> </table>";


?>
<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>