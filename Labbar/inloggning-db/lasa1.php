<?php
/*
* En enkel blogg
* PHP version 7
* @category   webbapplikation med databas
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
include "./resuser/conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Läsa</h1>
        <nav>
            <ul class="nav nav-tabs">
                <?php if (isset($_SESSION["anamn"])) { ?>
                    <li class="nav-item"><a class="nav-link" href="./loggaUt.php">Logga ut</a></li>
                    <li class="nav-item"><a class="nav-link" href="./lista.php">Lista</a></li>
                    <li class="nav-item"><a class="nav-link" href="./skriva1.php">Skriva</a></li>
                    <li class="nav-item"><a class="nav-link " href="./sok1.php">Sök</a></li>
                    <li class="nav-item"><a class="nav-link active" href="./lasa1.php">Läsa</a></li>
                    <li class="nav-item anamn"><?php echo $_SESSION["anamn"]; ?></li>
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link " href="./loggaIn.php">Logga in</a></li>
                    <li class="nav-item"><a class="nav-link" href="./registrera.php">Registrera</a></li>
                    <li class="nav-item"><a class="nav-link " href="./sok1.php">Sök</a></li>
                    <li class="nav-item"><a class="nav-link active" href="./lasa1.php">Läsa</a></li>
                    <li class="nav-item anamn"><?php echo $_SESSION["anamn"]; ?></li>
                <?php } ?>
            </ul>
        </nav>
        <?php
         $sql = "SELECT * FROM post ORDER BY postDate DESC";
         $result = $conn->query($sql);
        // Gick det bra? att ansluta
        if (!$result) {
            die("Det gick inte att köra SQL kommandot!" . $conn->error);
        } else {
            echo "<p class=\"alert alert-success\" > Antalet " . $result->num_rows . " hämtade inlägg </p>";
        }

        $rad = array_reverse($rad);

        // Steg 3
        // var_dump($result);
        // Presentera resultatet
        echo "<div class=\"alert alert-primary\">";
        while ($rad = $result->fetch_assoc()) { 
            
            echo "<p class=<\"table-primary\">$rad[header]</p>";
            echo "<p class=<\"table-primary\">$rad[postText]</p>";
            echo "<p class=<\"table-primary\">$rad[postDate]</p>";
            echo "<p class=<\"table-primary\">$rad[antal]</p>";
            
            
        }
        echo "<div/ class=\"inlägg\">";
        // Steg 4 stäng av databasen efter att du använt den
        $conn->close();

        ?>
    </div>
</body>
</html>