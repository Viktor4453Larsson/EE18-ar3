<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
*Gör ett program som tar den inmatade texten ur ett formulärs "textarea" och sparar den i en fil.
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
        <textarea name="textarea" id="textarea" name="textarea" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-warning">Skicka</button>
    </form>
</head>
<body>
    <?php
    if (isset($_POST["textarea"])) {
        // Läs av textarea rutan 
        $inmatningTextarea = $_POST["textarea"];

        $fil = fopen("textarea.txt", "w" );

        // Skriv en rad (\n gör att text hoppar ner ett steg)
        fwrite($fil, $inmatningTextarea);
        
        fclose($fil);
    }
    ?>