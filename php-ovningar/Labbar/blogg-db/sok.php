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
                <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link " href="./skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link active" href="./sok.php">Sök</a></li>
            </ul>
        </nav>
        <form action="#" method="POST">
            <label>Ange Sökterm <input type="text" name="sökterm"></label>
            <button>Sök</button>
        </form>
        <?php
        $sökterm = filter_input(INPUT_POST, 'sökterm', FILTER_SANITIZE_STRING);

        if ($sökterm) {

            // SQL-kommando
            $sql = "SELECT *  FROM post WHERE header LIKE '%$sökterm%' OR postText LIKE '%$sökterm%'";

            $result = $conn->query($sql);

            // Gick det att köra SQL koden?
            if (!$result) {
                die("Något blev fel med SQL-satsen" . $conn->error);
            } else {
                echo "<p> class=\"alert alert-success\" Antalet " . $result->num_rows . " Hittade inlägg </p>";
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


            // Steg 3: Stänga ner anslutningen
            $conn->close();
        }
        ?>
    </div>
</body>
</html>