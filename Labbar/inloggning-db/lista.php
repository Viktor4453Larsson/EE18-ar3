<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
include "./resuser/conn.php";
session_start();
if (!isset($_SESSION["anamn"])) {
    header("Location: ./loggaIn.php");
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Lista</h1>
            <nav>
                <ul class="nav nav-tabs">
                    <?php if (isset($_SESSION["anamn"])) { ?>
                        <li class="nav-item"><a class="nav-link" href="./loggaUt.php">Logga ut</a></li>
                        <li class="nav-item"><a class="nav-link active" href="./lista.php">Lista</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link " href="./loggaIn.php">Logga in</a></li>
                    <?php } ?>
                    <li class="nav-item"><a class="nav-link" href="./registrera.php">Registrera</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
            // Finns det en session eller inte? Kollar detta
            if (isset($_SESSION["anamn"])) {
                echo " <p class=\"alert alert-success\" role='alert'>Du är inloggad</p>";
                // Vissar alla användare i din registrera tabell
                $sql = "SELECT * FROM användare";
                $result = $conn->query($sql);
                echo "<table>";
                echo "<tr><th>Förnamn</th><th>Efternamn</th><th>Användarnamn</th><th>Datum</th><tr>";
                while ($rad = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>$rad[fnamn]</td>";
                    echo "<td>$rad[enamn]</td>";
                    echo "<td>$rad[anamn]</td>";
                    echo "<td>$rad[skapad]</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Steg 3: Stänga ner anslutningen
                $conn->close();
            } else {
                echo " <p>Du är utloggad</p>";
            }
            ?>
        </main>
    </div>
</body>
</html>