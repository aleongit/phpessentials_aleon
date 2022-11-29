<?php define('PATH_ROOT', '../../'); ?>
<?php require_once PATH_ROOT . 'includes/init_essential.php'; ?>

<div class='main'>
    <div class='seccio1'>
        
        <!-- exercici -->
        <?php
        #variables
        $enter = 25;            //enter
        $real = 25.55555;       //decimal
        $cadena = "Sóc una cadena"; //string
        $bolea = true;          //boleà
        $nul = null;            //null
        $arra_cad = array("element0", "element1", "element2"); //array
        $arra_ent = array(1, 2, 3); //array
        $arra_mix = array(1, "x", 3); //array

        #classe de l'objecte
        class arbre
        {
            // propietats
            public $nom;
            public $fulla;

            // mètodes
            function posaNom($nom)
            {
                $this->nom = $nom;
            }
            function treuNom()
            {
                return $this->nom;
            }
            function posaFulla($fulla)
            {
                $this->fulla = $fulla;
            }
            function treuFulla()
            {
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
            . "<li>" . $enter . " > " . gettype($enter)
            . "<li>" . $real . " > " . gettype($real)
            . "<li>" . $cadena . " > " . gettype($cadena)
            . "<li>" . $bolea . " > " . gettype($bolea)
            . "<li>" . $nul . " > " . gettype($nul)
            . "<li>" . gettype($arra_cad) . " > " . $arra_cad[0] . ", " . $arra_cad[1] . ", " . $arra_cad[2]
            . "<li>" . gettype($arra_ent) . " > " . $arra_ent[0] . ", " . $arra_ent[1] . ", " . $arra_ent[2]
            . "<li>" . gettype($arra_mix) . " > " . $arra_mix[0] . ", " . $arra_mix[1] . ", " . $arra_mix[2]
            . "<li>" . gettype($alzina) . " " . get_class($alzina) . " > " . $alzina->treuNom() . ", " . $alzina->treuFulla()
            . "<li>" . CONSTANT . " > " . gettype(CONSTANT)
            . "</ol>";

        ?>
        <!-- fi exercici -->
    </div>
</div>
<?php require_once PATH_ROOT . 'includes/footer.php'; ?>