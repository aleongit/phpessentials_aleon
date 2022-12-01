<?php

$SECTIONS = [
    1 => [
        'title' => "Variables",
        'subtitle' => "Subtitle variables"
    ],
    2 => [
        'title' => "Funcions",
        'subtitle' => "Subtitle funcions"
    ],
    3 => [
        'title' => "Arrays Include Require",
        'subtitle' => "Subtitle arrays, include i require"
    ],
    4 => [
        'title' => "Sessions",
        'subtitle' => "Subtitle sessions"
    ],
    5 => [
        'title' => "Cookies",
        'subtitle' => "Subtitle cookies"
    ],
    6 => [
        'title' => "Formularis",
        'subtitle' => "Subtitle formularis"
    ],
    7 => [
        'title' => "Temps i Fitxers",
        'subtitle' => "Subtitle temps i fitxers"
    ],

];

$QUESTIONS = [
    1 => [
        11 => "Crea 10 variables amb valors que exemplifiquin els diferents tipus de php, 
        comenta quin tipus correspon cada variable. Mostra-les per pantalla dins d’una llista numerada.",
        12 => "Imprimeix per pantalla tots els nombres parells de l’1 a 100, 
        fes-ho utilitzant les 3 estructures de repetició que hem vist.
        Decideix quina seria la més adients i raona la resposta. Utilitza una taula.",
        13 => "Imprimeix per pantalla els quadrats dels 20 primers nombres naturals (1..20).
        Utilitzant un for i un while.",
        14 => "Recull dos nombres per URL (url?N1=2&N2=5) dels quals hauràs d’imprimir la taula de multiplicar 
        i fer també les operacions bàsiques, suma, resta, divisió, multiplicació, divisió sencera, residuo, potència.",
        15 => "Fer un programa que imprimeix tots els números que hi ha entre 2 números passats 
        per URL (url?N1=2&N2=1000). El programa ha de ser robust.",
        16 => "Imprimir totes les taules de multiplicar de l’1 al 10 i que la sortida 
        es vegi en una taula HTML de 10 columnes.",
        17 => "Modifica l’exercici 5 perquè només mostri el nombres senars.",
        18 => "Crea un select en HTML i posa-hi els números de l’1 al 10 com opcions.",
        19 => "Fes un programa amb un formulari que demani el nom i l’edat 
        i digui si ets major d’edat o no.",
        110 => "Fes un programa amb un formulari que donat un número menor que mil,
        contesti si és primer o no. (Pots fer servir el sedàs d'Eratòstenes opcionalment)
        <br>Un nombre primer és un nombre enter superior a 1 que admet exactament dos divisors: 1 i ell mateix.
       Els nombres primers menors de 100 són:
       2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89 i 97."
    ],
    2 => [
        21 => "Fes una funció per calcular el factorial d’un número (utilitzant un bucle) que passem per URL (url?VALOR=10).",
        22 => "Fes una funció per calcular l’àrea d’un rectangle, tenint en compte que la mida dels costats 
        es passa per GET (url?N1=2&N2=5). Fes una versió amb echo dins la funció i una altra amb return.",
        23 => "Utilitzant un array de 2 dimensions amb el mesos i el nombre de dies corresponent. 
        Fes una funció que donat un mes que passem per get ens digui quants dies té. 
        Les dades provindran d’un formulari on amb un select tries el mes.",
        24 => "Fes una pàgina on a partir d’un formulari on es recull una temperatura 
        i en quina escala està, en la conversió.",
        25 => "Fes una funció per comprovar si un string està en minúscules 
        (utilitza només les funcions que hem après a classe).",
        26 => "Fes una funció per comprovar si un string és un palíndrom o no.",
        27 => "Fes un programa en php que pinti un tauler d’escacs per pantalla.",
        28 => "Fes un programa per fer una calculadora amb botons.",
    ],
    3 => [
        31 => "Fes una plantilla amb un header, footer, i hi haurà un enllaç a cada exercici.
        Utilitza el més adient: include, require ...",
        32 => "Donat el següent array, crea un programa php que mostri per cada element (ordenat per capital)",
        33 => "Fes uns script PHP que calculi la temperatura mitjana, les 5 més fredes 
        i les 5 més altes (en Celsius)",
        34 => "Escriviu un programa PHP per canviar tots els valors de l’array següent
        a majúscules o minúscules.",
        35 => "Escriviu un script PHP per obtenir un array que conté totes les entrades 
        d'una array que tinguin les claus presents en una altra array.",
        36 => "Teniu dues matrius com la següent. Una conté etiquetes i l’altra conté valors . Escriviu un programa per generar la tercera matriu associativa. Utilitza bucles.",
        37 => "Volem emmagatzemar en una matriu el nombre d'alumnes amb què compta una acadèmia, 
        ordenats en funció de el nivell i de l'idioma que s'estudia. 
        Hi haurà 3 files que representaran el Nivell bàsic, mitjà i de perfeccionament 
        i 4 columnes en què figuraran els idiomes (0 = Anglès, 1 = Francès, 2 = Alemany i 3 = Rus).
        Fes les següents funcions:
        <b>comptarTotalAlumnes</b>, presenta el total d’alumnes de l’academia
        <b>comptarTotalAIdioma</b>, presenta el total d’alumnes per idioma ordenat de més a menys (amb un array associatiu)
        <b>buscarGrupMesNombros</b>, presenta per pantalla el grup més nombrós
        <b>buscarGrupMenysNombros</b>, presenta per pantalla el grup menys nombrós",
    ],
    4 => [
        41 => "Escriu una web de dues pàgines que sol·licita un text a l'usuari 
        i ho mostri en les dues pàgines.
        A la primera pàgina, se sol·licita un text de l'usuari. 
        A la segona pàgina, es diu si s'ha escrit o no text al formulari.
        Es poden escriure lletres o números (i prou) , una o diverses paraules. 
        Al tornar a la primera pàgina, es mostrarà l'últim text escrit.
        
        Primer, la pàgina 2 ha de recollir la dada enviat pel formulari de la pàgina 1. 
        És el procediment habitual: per POST; 
        cal una  variable per recollir la dada;
        variable auxiliar que indica la correcció de la dada; 
        comprovació i missatges d'error; si la dada és correcte, missatge final.
        La comanda que ens redirigeix a una altra pàgina és header. https://www.php.net/manual/es/function.header.php 
        
        Modifiqueu el programa anterior de manera que: 
        El programa detecti si s'ha escrit o no una única paraula en majúscules.
        La primera pàgina mostri missatges d'error, només quan la segona pàgina detecti un error.
        La primera pàgina s'inclou en el control el valor incorrecte escrit per l'usuari, 
        quan la segona pàgina detecti un error.",
        42 => "Suposa una pàgina per loguejar un usuari. Crea l’estructura de 3 pàgines:
        <br><strong>a/</strong>
        la primera on l’usuari és logueja (email, i password).
        Si l’usuari ja està loguejat, no mostraràs el formulari, 
        sinó només el missatge de benvingut i el botó de logout. (Sessió d’1 minut)
        
        <br><strong>b/</strong>
        La segona en cas que l’usuari s’hagi loguejat correctament
        (qualsevol email amb el domini @lacetania.cat, i pasword 1234) digui benvingut, 
        i mostri el botó de logout. 
        Si l’usuari s’ha equivocat o bé en mail o bé en password mostrar missatge d’error 
        (el mateix pels 2 casos)
        
        <br><strong>c/</strong>
        Fer la pàgina de logout que s’hi accedeix si es prem el botó de logout, o bé si s’ha acabat la sessió (d’1 minut com a màxim).
        On es destrueix la sessió i es mostra un missatge que diu fins la propera.",
    ],
    5 => [
        51 => "Crea una pàgina amb 3 botons:
        <br>. Crear una galeta amb una durada de 15 segons que desi “galeta creada”
        <br>. Comprovar la galeta.
        <br>. Destruir la galeta.",
        52 => "Fes una cookie que desa la data (time stamp) de la darrera visita en la que 
        un usuari ha estat a la nostra web, i que ens mostri quants segons, hores, o dies 
        fa de la seva darrera visita, en cas que sigui la primera vegada que ens visita,
        que aparegui un missatge de benvingut. (Fes una funció per fer els càlculs. 
        Esbrina com php desa la informació en la funció time() per exemple)",
        53 => "Fes un programa amb php, que utilitzant una cookie tingui 
        un comptador de visites durant les properes 24h. 
        Per cada 5 visites apareixerà una estrella a sota el núm. de visites, 
        amb un màxim de 3 estrelles.",
        54 => "Fes un formulari php amb 2 input de tipus select que permeti escollir el color de fons de la pàgina i el color del text.
        Aquest colors s’ha de guardar en dues cookies, de manera que quan tornem a carregar la pàgina recordi els colors.
        El color de fons per defecte és blanc, i el text negre.
        El programa no ha de permetre escollir el mateix color de fons que de text.",

    ],
    6 => [
        61 => "Feu un formulari amb validació de dades a la pàgina destinació: 
            Has de fer 2 arxius, un index.php i un validacio.php.
            <br>Passa els errors per una sessió, o bé per get  i moltra’ls a sota de cada camp.
            Fes algunes validacions (la del nom almenys) utilitzant expressions regulars.
            <br><strong>Normes</strong>:
            <br>. Nom: obligatori, lletres majúscules minúscules i espais
            <br>. Password: Obligatori, mida mínima 8, almenys una lletra majúscula, una minúscula, 
                    una xifra i un caràcter especial (-/*+)
            <br>. Formació (tres opcions ESO, FP o BAT). (opcional)
            <br>. Idiomes: cal triar-ne només 1, val validar que sigui una de les opcions vàlides
            <br>. Email obligatori, validar que sigui un email correcte
            <br>. Lloc web opcional, que sigui una web correcta",
    ],
    7 => [
        71 => "Escriviu un script PHP per obtenir diferències entre dos dates 
        (introduïdes en un formulari)
        en anys, mesos, dies, hores, minuts, segons. 
        Verifiqueu que la primera data és més petita que la segona, sino mostra error.",
        72 => "Fer un programa php que et permeti pujar un arxiu en format imatge i mostrar-lo
        (comprova que el format sigui una imatge)",
        73 => "Fes un aplicatiu  en php que en un formulari demani 
        nom, cognom i data de naixament dels usuaris, desa les dades en un arxiu dades.csv 
        (que ja contindrà 100 línies com a dades fake) en format csv. 
        https://www.w3schools.com/php/func_filesystem_fgetcsv.asp 
        <br>. Fes un enllaç a mostrar_dades
        <br>. llegir les dades de l’arxiu i mostrar-les en una taula de màxim 20 files
        <br>. Fes paginació. (Link inici, anterior - següent, fi) (<<  <  >  >>)
        <br>. Hi ha d’haver 2 botons que mostren les dades ordenades o bé per cognoms o bé per nom
        <br>. Hi ha d’haver un formulari amb 2 inputs format data, 
                i mostrar només els usuaris amb data de naixament entre aquestes dues dates",
    ]

];

$CODE = [
    3 => [
        32 => '$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw")',
        33 => '$faren = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];',
        34 => '$color = array ("A" => "Blau", "B" => "Verd", "c" => "Vermell");',
        37 => '$academia = [<br>
            [1,14,8,3],<br>
            [6,19,7,2],<br>
            [3,13,4,1],<br>
        ];',
    ],
];
