<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-12_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>2. Imprimeix per pantalla tots els nombres parells de l’1 a 100, 
fes-ho utilitzant les 3 estructures de repetició que hem vist.
Decideix quina seria la més adients i raona la resposta. Utilitza una taula.</h4>
<?php

define("MAX", 100); //constant

//while
$x = 1;
echo "<h3>amb 'while'</h3> <table> <tr>";
while ($x <= 100) {
//parell
if ($x % 2 == 0) {echo "<td>".$x."</td>";}
//files de 50
if ($x % 50 == 0){ echo "</tr><tr>"; }
$x++;
} ;
echo "</tr> </table>";

//do while
$x = 1;
echo "<h3>amb 'do while'</h3> <table> <tr>";
do {
if ($x % 2 == 0) {echo "<td>".$x."</td>";}
if ($x % 50 == 0){ echo "</tr><tr>"; }
$x++;
} while ($x <= 100);
echo "</tr> </table>";

//for
$x = 1;
echo "<h3>amb 'for'</h3> <table> <tr>";
for ($x = 1; $x <= 100; $x++)  {
if ($x % 2 == 0) {echo "<td>".$x."</td>";}
if ($x % 50 == 0){ echo "</tr><tr>"; }
};
echo "</tr> </table>";
echo "<h4><mark>*Crec que 'for' és la més adient per ser més curta i òptima</mark></h4>";

?>
<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>