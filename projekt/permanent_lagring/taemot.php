<?php
/*
* PHP version 7
* @category   Permanent lagring av gps kordinater och länder
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
include "./projekt/permanent_lagring/gps_kordinater.php";
include "./projekt/permanent_lagring/lander.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Länder och GPS kordinater</title>
    <link rel="stylesheet" href="permanent.css">
</head>
<body>
    <div class="kontainer">
    <h1>Länder och GPS kordinater</h1>
    <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./taemot.php">Läs informationen som kommer in</a></li>
                <li class="nav-item"><a class="nav-link " href="./lagra.php">Skriv ut informationen</a></li>
                <li class="nav-item"><a class="nav-link" href="./sok.php">Sök efter kordinater och länder</a></li>
            </ul>
            <?php
            $sql = "SELECT * FROM `gps`";
            $sql1 = "SELECT * FROM `lander`";
            $resultat = $conn->query($sql && $sql1);

            if (!$resultat) {
                die("Det gick inte att ansluta till MySQL på någon av dina databaser!" . $conn->error);
            } else {
               echo "<p>Grattis det gick att ansluta, fortsätt bara</p>"; 
            }

            while ($rad = $resultat->fetch_assoc()) {
                echo "<div class=\"inlägg\">";
                echo "<h5>$rad[postText]</h5>";
                echo "<h6>$rad[gps]</h6>";
                echo "</div>";

                echo "<div class=\"inlägg\">";
                echo "<h6>$rad[lander]</h6>";
                echo "<p>$rad[date]</p>";
                echo "</div>";
                
            }
            $conn->close();
            
            ?>
    </div>
</body>
</html>
