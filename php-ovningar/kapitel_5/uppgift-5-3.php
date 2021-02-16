<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
*Utveckla programmet i övning 1 till ett enkelt gästboksskript. Skapa en sida kallad "Lägg till till gästbok, där användaren får fylla i namn, e-post-adress och meddelande. När användaren skickar i väg formuläret ska informationen sparas snyggt formaterad i en fil. Snyggt formaterad innebär att du har mellanrum mellan namnet och e-post-adressen, och ny rad (<br>) innan du skriver meddelandet, och dessutom ny rad (<br>) efter själva meddelandet. Obs! Använd append (a) som filöppningsmetod, ej write (w), eftersom du då skriver över tidigare innehåll! Längst ned på varje sida ska en rubrik med texten "Skrivet i gästboken" samt filinnehållet visas.
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
    <title>Lägg till till gästbok</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="./exempel-1.css">
</head>
<body>
    <h1>Lägg till till gästbok</h1>
    <form action="#" method="POST">
        <label for="text">Ange ditt namn</label>
        <input id="namn" class="form-control" type="text" name="namn">
        <label for="email">Ange din email</label>
        <input id="email" class="form-control" type="email" name="email">
        <textarea id="textarea" name="meddelande" cols="30" rows="10">Meddelande</textarea>
        <br>
        <button type="submit" class="btn btn-warning">Skicka</button>
    </form>
    <?php
    var_dump($_POST["meddelande"], $_POST["namn"], $_POST["email"]);
    if (isset($_POST["meddelande"], $_POST["namn"], $_POST["email"])) {
        $namn = $_POST["namn"];
        $email = $_POST["email"];
        $meddelande = $_POST["meddelande"];
        var_dump("$namn $email $meddelande");

        // Läs av från filen 
        $handtag = fopen("gastbok.txt", "a");

        fwrite($handtag, "$namn $email <br>/n");

        fwrite($handtag, "$meddelande <br>/n");

        fclose($handtag);
    }
    ?>
</body>
</html>