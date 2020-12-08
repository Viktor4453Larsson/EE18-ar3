<?php
/* Titta om något är fel */
error_reporting(E_ALL);
/* Inloggningsuppgifter för permanent databasen */
$host = "localhost";
$user = "permanent";
$db = "permanent";
$pass = "4sui7w3urkRhFYgo";

// Steg 1: Ansluta till databasen (permanent)
$conn = new mysqli($host, $user, $pass, $db);

// Steg 2: Kolla om det fungerar annars skicka ett felmeddelande
if ($conn->connect_error) {
    die ("Det gick inte att ansluta till permanent: " . $conn->error);
} else {
    echo "<p>Du kunde ansluta till databasen permanent</p>";
}

?>