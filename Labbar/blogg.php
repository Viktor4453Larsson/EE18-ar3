<?php
/*
* PHP version 7
* En enkel blogg där man lagrar inlägg i en textfil
* @category   Webbapp
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/united/bootstrap.min.css">
    <link rel="stylesheet" href="blogg.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Bloggen</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="active nav-link" href="blogg.php">Alla inlägg</a></li>
                    <li class="nav-item"><a class=" nav-link" href="spara.php">Skriva inlägg</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php

            // Vad heter textfilen?
            $filnamn = "blogg.txt";

            // Steg 1: Läs in hela textfilen 
            $rader = file($filnamn);

            // Vänd på arrayen 
            $raderOmvänd = array_reverse($rader);

            //var_dump($rader);

            // Steg 2: använd 
            foreach ($raderOmvänd as $rad) {
                echo " <p>$rad</p> ";
            }


            ?>
        </main>
        <footer>
            2020
        </footer>
    </div>
</body>
</html>