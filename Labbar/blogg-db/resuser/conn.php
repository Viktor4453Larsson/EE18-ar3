
<?php
/* Slå på felmeddelande */
error_reporting(E_ALL);
/* Inloggningsuppgifter */
$host = "localhost";
$user = "blogg";
$db = "blogg";
$pass = "VVj57oT0Pa6EaKem";

// Steg 1: Ansluta 
$conn = new mysqli($host, $user, $pass, $db);

// Steg 2: Kolla om det fungerar
if ($conn->connect_error) {
    die ("Det gick inte att ansluta: " . $conn->error);
} else {
   // echo "<p>Du kunde ansluta till databasen</p>";
}

?>