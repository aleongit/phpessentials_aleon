<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-16_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>6. Imprimir totes les taules de multiplicar de l’1 al 10 i que la sortida 
es vegi en una taula HTML de 10 columnes.</h4>
<?php

#constant
define("MIN", 1); //constant
define("MAX", 10); //constant

#taules del 1 al 10
echo "<h3>Taules del 1 al 10</h3>";
echo "<table>";

#capçalera
echo "<tr>";
for ($x = MIN; $x <= MAX; $x++) {
echo "<th>Taula del ".$x."</th>";
}
echo "</tr>";

#files
for ($x = MIN; $x <= MAX; $x++)  {
echo "<tr>";
    for ($y = MIN; $y <= MAX; $y++)  {
    echo "<td>".$y." x ".$x." = ".($y * $x)."</td>";
    }
echo "</tr>";
};
echo "</table> </br>";

?>
<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>