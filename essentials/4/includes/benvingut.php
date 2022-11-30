<?php
//segons inactivitat
$inactiu = 60;

//si existeix timeout en session
if ( isset($_SESSION['timeout']) ) {
    //càlcul TTL (vida sessió)
    $vida = time() - $_SESSION['timeout'];
    echo "<br>TTL: ".$vida;
    if ($vida > $inactiu) {
        header('Location: logout.php');
    }
}
?>

<?php
//benvingut
echo "<h3><mark>".$_SESSION['welcome'].$_SESSION['user']."</mark></h3>";

//form
echo "<form method='post' action='logout.php'>";
echo "<input type='submit' value='Logout'>";
echo "</form>";

//actualitzem temps
$_SESSION['timeout'] = time();

?>