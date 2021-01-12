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
    <title>Logga ut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Logga ut</h1>
            <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="./registrera.php">Registrera</a></li>
                <li class="nav-item"><a class="nav-link " href="./loggaIn.php">Logga In</a></li>
                <li class="nav-item"><a class="nav-link active" href="./loggaUt.php">Logga ut </a></li>
                <li class="nav-item"><a class="nav-link" href="./lista.php">Lista</a></li>
            </ul>
        </nav>
        </header>
        <main>
        <?php
        // Man loggar ut genom att ta bort session
        session_destroy();
        ?>
        </main>
    </div>
</body>
</html>