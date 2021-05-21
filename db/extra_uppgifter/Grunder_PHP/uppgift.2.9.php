<!-- /* Skapa ett skript som frågar användaren vilket årtal det är.
Skriptet ska sedan berätta hur många år det är kvar till år 2100. */ -->
<!--/* Bygg huvud och kropp */  -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hur nära 2100 är du?</title>
    <!-- /* Gör en ritning av sidan */ -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <form action="#" method="POST">
            <h1>Hur nära 2100 är du?</h1>
            <input type="text" name="artal">
            <!-- /* Be användaren säga vilket årtal det är */ -->
            <label for="text">Vilket årtal är det</label>
            <!-- /* Lägg till en knapp där man kan skicka in */ -->
            <button type="submit">Antal årtal</button>
        </form>
    
    <?php
    /* Ta årtalet minus 2100 för att få se hur nära det är årtalet 2100 */
    if (isset($_POST["artal"])) {
        $artal = $_POST["artal"];
        $årKvar = 2100 - $artal;
    }
    /* Skriv ut vad svaret är med en bra mening */
    echo " <p>Du har $årKvar år kvar</p>";
    ?>
    </div>
</body>
</html>