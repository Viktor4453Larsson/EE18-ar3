<?php
/*
* En enkel blogg
* PHP version 7
* @category   webbapplikation med databas
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
include "./resuser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogg</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Min blogg</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link " href="./skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./sok.php">Sök</a></li>
            </ul>
        </nav>
        <?php
        // Steg 2. Skriv ditt SQL kommando här (Hämta allting)
        $sql = "SELECT * FROM post";
        $result = $conn->query($sql);

        // Gick det bra? att ansluta
        if (!$result) {
            die("Det gick inte att ansluta med SQL kommandot!" . $conn->error);
        } else {
            echo "<p> class=\"alert alert-success\" Antalet " . $result->num_rows . " hämtade inlägg </p>";
        }

        // Steg 3
        // var_dump($result);
        // Presentera resultatet
        while ($rad = $result->fetch_assoc()) {
            echo "<div class=\"inlägg\">";
            echo "<h5>$rad[header]<h5>";
            echo "<h6>$rad[postText]<h6>";
            echo "<p>$rad[postDate]<p>";
            echo "</div>";
        }
        
        // Steg 4 stäng av databasen efter att du använt den
        $conn->close();

        ?>
    </div>
</body>
</html>