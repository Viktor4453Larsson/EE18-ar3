<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/

/*$user = "viktor";
$db = "viktor";
$host = "localhost";
$pass = "m5acwIiFYDgff8RV";
?>*/


/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
* Denna är för bilar tabellen
*/

$user = "bilar";
$db = "bilar";
$host = "localhost";
$pass = "rys5zapD9tQYWu1r";

// Logga in på MySQL server och välj datanes
$conn = new mysqli($host, $user, $pass, $db);

// Gick det att ansluta till servern?
if ($conn->connect_error) {
    die("Du kunde inte ansluta" . $conn->connect_error);
} else {
    echo "<p>Hurra, funkar</p>";
}

// Ställ en sql-fråga
$sql = "SELECT * FROM bilar";
$resultat = $conn->query($sql);

// Gick SQL satsen att köra?
if (!$resultat) {
    die("Något blev fel");
} else {
    echo " <p>Listan på alla bilarna fungerar</p>";
}

//Skriv ut listan 
while ($rad = $resultat->fetch_assoc()) {
    echo "<p>$rad</p>";
}

// Stäng ned anslutningen 
$conn->close();
?>

