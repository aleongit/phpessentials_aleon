<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-110_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>10. Fes un programa amb un formulari que donat un número menor que mil,
 contesti si és primer o no. (Pots fer servir el sedàs d'Eratòstenes opcionalment) </h4>
<h4>Un nombre primer és un nombre enter superior a 1 que admet exactament dos divisors: 1 i ell mateix.
Els nombres primers menors de 100 són:
2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89 i 97.</h4>
<?php

#echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina

echo "<form method='post' action=".$_SERVER['PHP_SELF'].">";
echo "<label for='num'>Número [< 1000]:</label><br>";
echo "<input type='number' id='num' name='num' value=''><br><br>";
echo "<input type='submit' name='submit' value='Envia'>";
echo "</form>";

#isset, si la variable està definida i no és NULL
if(isset($_POST['submit']))
{
$num = $_POST['num'];

#echo "<h1>Num ".$num."!</h1>";
#echo "<h1>Tens ".$edat."</h1></br>";

#control si buit o >1 i <1000
if ($num > 1 and $num < 1000) {
    #echo "ok";

    #inicialitzem
    $conta = 0;
    $x = $num - 1; // un número menys perquè per ell mateix si divideix

    #while per sortir si troba 1 divisor
    while ($x > 1 && $conta == 0){
      if ($num % $x == 0){ $conta++; }
    $x--;
    }
    #echo $conta;

    if ($conta == 0) {
        echo "<h1>".$num." és número primer</h1></br>";
        } else {
        echo "<h1>".$num." NO és número primer</h1></br>";
        }
} else {
    echo "<h1>El número ha de ser entre 2 i 999</h1></br>";
}
}

?>
<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>