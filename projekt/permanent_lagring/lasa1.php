<?php
/*
* PHP version 7
* @category   Permanent lagring av gps kordinater och länder
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
/* Ta med databasen som du vill använda */
include "./sakerhet/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titeln på sidan -->
    <title>Länder och GPS kordinater</title>
    <!-- Boostrap länk -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Färger, läng och bredd osv -->
    <link rel="stylesheet" href="permanent_lagring.css">
</head>
<body>
    <!-- Byrålåda för alla saker inuti -->
    <div class="kontainer">
        <h1>Länder och GPS kordinater</h1>
        <!-- Navigationsbar -->
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./lasa1.php">Lista</a></li>
                <li class="nav-item"><a class="nav-link " href="./admin/skriva1.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./sok1.php">Sök efter kordinater och länder</a></li>
            </ul>
        </nav>
        <?php
        /* Ett spam skydd för onödiga tecken och krävande att användaren fyller i information innan nästa steg börjar */
        $sql = "SELECT * FROM lander";
        $resultat = $conn->query($sql);

        /* En kontrollcheck att allt fungerar som det ska */
        if (!$resultat) {
            die("Något gick fel med SQL satsen");
        } else {
            echo "<p>Dina länder och kordinater har hämtats</p>";
        }

        while ($rad = $resultat->fetch_assoc()) {
            echo "<div class=\"inlägg\">";
                echo "<h5>$rad[id]<h5>";
                echo "<h5>$rad[namn]<h5>";
                echo "<h5>$rad[kordinater]<h5>";
                echo "<h5>$rad[kommentar]<h5>";
                echo "<h6>$rad[date]<h6>";
                echo "</div>";  

                $conn->close();
        }
        ?>
    </div>
</body>
</html>