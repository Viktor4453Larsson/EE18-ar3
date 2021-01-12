<?php
/*
* PHP version 7
* @category   
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
                <li class="nav-item"><a class="nav-link" href="./registrera.php">Registrera</a></li>
                <li class="nav-item"><a class="nav-link " href="./loggaIn.php">Logga In</a></li>
                <li class="nav-item"><a class="nav-link" href="./loggaUt.php">Logga ut </a></li>
                <li class="nav-item"><a class="nav-link active" href="./lista.php">Lista</a></li>
            </ul>
        </nav>
        </header>
        <main>
        <?php
        // Finns det en session eller inte? Kollar detta
        if (isset($_SESSION["anamn"])) {
            echo " <p class=\"alert alert-success\" role='alert'>Du är inloggad</p>";
        } else {
            echo " <p>Du är utloggad</p>";
        }
        echo $_SESSION["anamn"];
        ?>
        </main>
    </div>
</body>
</html>