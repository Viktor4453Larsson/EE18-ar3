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
<!-- Skriv ut huvud och kropp för html taggarna -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästbok</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Lägg till en bra rubrik -->
    <h1>Gästbok</h1>
    <!-- Lägg in server och klient metod -->
    <form action="#" method="POST">
        <!-- Label, input, * (2) textarea -->
        <label for="text"></label>
        <input type="text" name="namn">
        <label for="text"></label>
        <input type="tel" name="telefonummer">
        <textarea name="kommentar" id="" cols="30" rows="10"></textarea>
        <!-- Br -->
        <br>
        <!-- Button -->
        <button type="submit">Skicka din information till en annan fil</button>
        <!-- Avlsuta forum här -->
    </form>
<?php
/* läs av vad som fungerar med dump */
//var_dump($_POST["namn"], $_POST["telefonummer"], $_POST["kommentar"])
/* Isset med post, skriv bara med $_POST med deras namn ovanför */
if (isset($_POST["namn"], $_POST["telefonummer"], $_POST["kommentar"])) {
    /* Skriv omvänd ordning med variabel */
    $namn = $_POST["namn"];
    $tel = $_POST["telefonummer"];
    $kommentar = $_POST["kommentar"];

    /* Skapa ett handtag, öppna en ""(filens namn) och skriv till extra av det vi ger */
    $handtag = fopen("gastbox.txt", "a");
    /* Vad du ska skriva till personen */
    fwrite($handtag, "$namn <br>\n");
    fwrite($handtag, "$tel <br>\n");
    fwrite($handtag, "$kommentar <br>\n" );
    /* skriv ut och stäng handtaget */
    fclose($handtag);
}
?>
</body>
</html>
















