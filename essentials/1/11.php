<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-11_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>1. Crea 10 variables amb valors que exemplifiquin els diferents tipus de php, 
comenta quin tipus correspon cada variable. Mostra-les per pantalla dins d’una llista numerada.</h4>
<?php

#variables
$enter = 25;            //enter
$real = 25.55555;       //decimal
$cadena = "Hola Pilar"; //string
$bolea = true;          //boleà
$nul = null;            //null
$arra_cad = array("element0", "element1", "element2"); //array
$arra_ent = array(1,2,3); //array
$arra_mix = array(1,"x",3); //array

#classe de l'objecte
class arbre {
    // propietats
public $nom;
public $fulla;

    // mètodes
function posaNom($nom) {
    $this->nom = $nom;
}
function treuNom() {
    return $this->nom;
}
function posaFulla($fulla) {
    $this->fulla = $fulla;
}
function treuFulla() {
    return $this->fulla;
}
}
#nou objecte classe arbre
$alzina = new arbre();
$alzina->posaNom('Alzina');
$alzina->posaFulla('Perenne');

#constant
define("CONSTANT", "CONSTANT"); //constant

#presentem
#var_dump($arra);
#echo $arra[0];

    echo "<h2>Tipus de dades PHP</h2>";
    echo "<ol>"
        ."<li>".$enter." >".gettype($enter)
        ."<li>".$real." > ".gettype($real)
        ."<li>".$cadena." > ".gettype($cadena)
        ."<li>".$bolea." > ".gettype($bolea)
        ."<li>".$nul." > ".gettype($nul)
        ."<li>".gettype($arra_cad)." > ".$arra_cad[0].", ".$arra_cad[1].", ".$arra_cad[2]
        ."<li>".gettype($arra_ent)." > ".$arra_ent[0].", ".$arra_ent[1].", ".$arra_ent[2]
        ."<li>".gettype($arra_mix)." > ".$arra_mix[0].", ".$arra_mix[1].", ".$arra_mix[2]
        ."<li>".gettype($alzina)." ".get_class($alzina)." > ".$alzina->treuNom().", ".$alzina->treuFulla()
        ."<li>".CONSTANT." >".gettype(CONSTANT)
        ."</ol>";

?>
<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>