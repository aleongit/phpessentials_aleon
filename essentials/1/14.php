<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-14_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>4. Recull dos nombres per URL dels quals hauràs d’imprimir la taula de multiplicar 
i fer també les operacions bàsiques, suma, resta, divisió, multiplicació, divisió sencera, residuo, potència.</h4>
<?php

# exemple URL
# /fitxer.php?N1=2=&N2=5

#depuració variable
#var_dump($_GET);

# passar a número
$n1 = intval($_GET['N1']);
$n2 = intval($_GET['N2']);

//echo "<h2>Nom:".$_GET['nom']."</h2>";

# taula del n1 i n2
echo "<table><tr><th>Taula del ".$n1."</th><th>Taula del ".$n2."</th></tr>";
for ($x = 1; $x <= 10; $x++)  {
echo "<tr><td>".$n1." x ".$x." = ".($n1 * $x)."</td>";
echo "<td>".$n2." x ".$x." = ".($n2 * $x)."</td></tr>";
};
echo "</table> </br>";

# operacions bàsiques amb n1 i n2
echo "<table><tr><th>Operació</th><th>Resultat</th></tr>";
echo "<tr><td>Suma</td><td>".$n1." + ".$n2." = ".($n1+$n2)."</td></tr>";
echo "<tr><td>Resta</td><td>".$n1." - ".$n2." = ".($n1-$n2)."</td></tr>";
echo "<tr><td>Divisió</td><td>".$n1." / ".$n2." = ".($n1/$n2)."</td></tr>";
echo "<tr><td>Multiplicació</td><td>".$n1." * ".$n2." = ".($n1*$n2)."</td></tr>";
echo "<tr><td>Divisió sencera</td><td>".$n1." intdiv ".$n2." = ".intdiv($n1,$n2)."</td></tr>";
echo "<tr><td>Residuo</td><td>".$n1." % ".$n2." = ".($n1%$n2)."</td></tr>";
echo "<tr><td>Potència</td><td>".$n1." ** ".$n2." = ".($n1**$n2)."</td></tr>";
echo "</table>";

?>
<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>