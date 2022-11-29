<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-19_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>9. Fes un programa amb un formulari que demani el nom i l’edat 
i digui si ets major d’edat o no.</h4>

<?php

#echo $_SERVER['PHP_SELF']; //en form action per mateixa pàgina

echo "<form method='post' action=".$_SERVER['PHP_SELF'].">";
echo "<label for='nom'>Nom:</label><br>";
echo "<input type='text' id='nom' name='nom' value=''><br>";
echo "<label for='edat'>Edat:</label><br>";
echo "<input type='number' id='edat' name='edat' value=''><br><br>";
echo "<input type='submit' name='submit' value='Envia'>";
echo "</form>";

#isset, si la variable està definida i no és NULL
if(isset($_POST['submit']))
{
$nom = $_POST['nom'];
$edat = $_POST['edat'];

echo "<h1>Hola ".$nom."!</h1>";
#echo "<h1>Tens ".$edat."</h1></br>";

#control si buit
if (!empty($nom) && !empty($edat)) {
    #control número (ja es controla amb type=number del input)
    #de totes maneres, mirem si número positiu
    if (is_numeric($edat) && $edat > 0) {
        if ($edat >= 18) {
        echo "<h1>Ets major d'edat</h1></br>";
        } else {
        echo "<h1>Ets menor d'edat</h1></br>";
        }
    }   else {
    echo "<h1>Edat incorrecta</h1></br>";
    }
} else {
    echo "<h1>Falta informació</h1></br>";
}
}

?>

<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>