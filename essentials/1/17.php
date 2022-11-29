<!doctype html>
<html lang="ca"> <!-- meta idioma -->

<head>
    <meta charset="utf-8"><!--meta joc de caràcters -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- etiqueta per HTML responsive -->
    <meta name="description" content="">
    <meta name="author" content="Aleix Leon">

<title>PHP-EX-17_aleon</title><!-- títol de la web -->

<!-- CSS interns --><style></style>
<!-- estils aleon -->
<link rel="stylesheet" type="text/css" href="css/aleon.css" >

</head>
<body>
<h4>7. Modifica l’exercici 5 perquè només mostri el nombres senars.</h4>

<?php

# exemple URL
# /fitxer.php?N1=1=&N2=100

#depuració variable
#var_dump($_GET);
#echo gettype($_GET);

#isset, si existeix
#echo var_dump(isset($_GET));

#comprovar si buida
if (!empty($_GET)){
    #echo "PLENA";
    
    #comprovar si dos valors
    #echo count($_GET);
    if (count($_GET) == 2){
        #echo "<h4>OK 2</h4>";
        
        #comprovar si numèrics
        $conta = 0;
        foreach ($_GET as $el) {
            if (!is_numeric($el)) {
                #echo $el." NO numèric ";}
                $conta += 1;}}
        if (!$conta){
            #echo "OK tots 2 numèrics";

            #valors i passar a número
            $n1 = intval($_GET['N1']);
            $n2 = intval($_GET['N2']);

            #control 2n més gran
            if ($n1 > $n2){
                $temp = $n2;
                $n2 = $n1;
                $n1 = $temp; 
            }
            echo "<h4>Els numeros <mark>SENARS</mark> entre ".$n1." i ".$n2." són</h4></br>";
            echo "<table> <tr>";
            //for
            $x = 1;
            for ($x = $n1; $x <= $n2; $x++)  {
            //senars
            if ($x % 2 != 0) {echo "<td>".$x."</td>";}
            //files de 10
            if ($x % 10 == 0){ echo "</tr><tr>"; }
            }
            echo "</tr> </table>";

        }else{
            echo "<h4><mark>Has de passar 2 paràmetres NUMÈRICS</mark></h4></br>";
        }
    } else {
        echo "<h4><mark>Has de passar 2 paràmetres per URL</mark></h4></br>";
    }
} else {
    echo "<h4><mark>No has passat cap paràmetre per URL</mark></h4></br>";
}

?>

<footer>
<p></br>© Aleix Leon 2021-22</p>
</footer>

</body>
</html>