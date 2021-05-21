
<?php
/* Slå på felmeddelande */
error_reporting(E_ALL);
/* Inloggningsuppgifter */
$host = "localhost";
$user = "register";
$db = "register";
$pass = "0gkLYrIhtxeMjH5i";

// Steg 1: Ansluta 
$conn = new mysqli($host, $user, $pass, $db);

// Steg 2: Kolla om det fungerar
if ($conn->connect_error) {
    die ("Det gick inte att ansluta: " . $conn->error);
} else {
   // echo "<p>Du kunde ansluta till databasen</p>"
}

?>