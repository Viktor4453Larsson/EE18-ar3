<?php
/*
* PHP version 7
* @category   Permanent lagring av gps kordinater och länder
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
/* Vilken databas länkar vi till? */
include "./projekt/permanent_lagring/sakerhet/conn.php";
?>
<!-- Kropp och huvud -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap länk -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Titeln på vår sida -->
    <title>Länder och GPS kordinater</title>
    <!-- Bredd, läng och färger -->
    <link rel="stylesheet" href="permanent_lagring.css">
</head>
<body>
    <!-- En byrålåda för allting -->
    <div class="kontainer">
        <h1>Länder och GPS kordinater</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./taemot.php">Läs informationen som kommer in</a></li>
                <li class="nav-item"><a class="nav-link " href="./lagra.php">Skriv ut informationen</a></li>
                <li class="nav-item"><a class="nav-link " href="./skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./sok.php">Sök efter kordinater och länder</a></li>
            </ul>
        </nav>
        <?php
        include "./projekt/permanent_lagring/sakerhet/conn.php";
        /* Hämta alla tabellerna som vi har skapat och vill använda */
        $sql = "SELECT * FROM lander";
        $resultat = $conn->query($sql);

        /* En kontrollcheck på att allt verkligen fungerar */
        if (!$resultat) {
            die("Det gick inte att ansluta till MySQL på någon av dina databaser!" . $conn->error);
        } else {
            echo "<p>Grattis det gick att ansluta, fortsätt bara</p>";
        }

        /* Skriv ut alla den information som behöver skrivas ut */
        while ($rad = $resultat->fetch_assoc()) {
            echo "<div class=\"inlägg\">";
                echo "<h5>$rad[id]</h5>";
                echo "<h5>$rad[namn]</h5>";
                echo "<h5>$rad[kordinater]</h5>";
                echo "<h5>$rad[kommentar]</h5>";
                echo "<h6>$rad[date]</h6>";
                echo "</div>";  
        }
        /* Stäng av databasen, när vi inte behöver den längre */
        $conn->close();

        ?>
    </div>
</body>
</html>