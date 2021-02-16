<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
*Gör ett program som i en textruta frågar efter ett filnamn på servern. Kontrollera sedan filnamnet så att det endast innehåller bokstäver, siffror och punkt. Om kontrollen ger OK, så öppna filen och skriv ut filinnehållet på skärmen.
*
*
*
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filhantering</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="./exempel-1.css">
    <form action="#" method="POST">
        <input type="text" name="filnamn">
        <button type="submit" class="btn btn-warning">Läs</button>
    </form>
</head>
<body>
    <?php
    if (isset($_POST["filnamn"])) {
        $filSomAnvands = $_POST["filnamn"];

        $allText = file_get_contents($filSomAnvands);
        echo " <p>$allText</p> ";
    }
    ?>