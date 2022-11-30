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
