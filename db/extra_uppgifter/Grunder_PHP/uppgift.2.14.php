<!-- Skapa ett skript för beräkna kostnaden för att hyra bil hos en biluthyrningsfirma. 
Startavgiften för att hyra bilen är 500:-, därefter kostar det ytterligare 5:-/km och 400:- för varje extra dag förutom den första. 
Skriptet ska fråga hur många dagar man vill hyra bilen och hur många kilometer man vill köra.
Skriptet ska sedan presentera den totala hyran. -->

<!--/* Bygg huvud och kropp */  -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /* Gör en ritning av sidan */ -->
    <link rel="stylesheet" href="style.css">
    <title>Hyra bil</title>
</head>
<body>
<form action="#" method="POST">
    <div class="kontainer">
    <h1>Hyra bil</h1>
        <!-- Fråga i hur många dagar man vill hyra bilen och hur många km man vill köra -->
    <input type="text" name="km">
    <label for="">Hur många kilometer vill du köra?</label>
    <input type="text" name="dagar">
    <label for="">Hur många dagar vill du hyra bilen i?</label>
    <button type="submit">Beräkna kostnaden</button>
    </form>
    <?php
    $kilometer = filter_input(INPUT_POST, "km", FILTER_SANITIZE_STRING);
    $dygn = filter_input(INPUT_POST, "dagar", FILTER_SANITIZE_STRING);
    if ( $kilometer && $dygn) {
        /* <!-- Starta med 500 kr med en variabel --> */
$startavgift = 500;
$kilometer;
$dygn;
$kostnadPerDygn = $startavgift + $dygn;
$kostnadPerKilometer = $startavgift + ($kilometer * 5);
if ($dygn > 2) {
    $dygn = $dygn * 1 + 400;
} else {
    $dygn = 1;
}
if ($dygn && $kilometer < 1) {
    echo " <p>Startavgiften är 500kr</p>";
}
$totalPris = $kostnadPerDygn + $kostnadPerKilometer;
    /* <!-- 5 kr extra per km tillsammans med 400 kr för varje dag som går--> */

    /* Skriv ut vad kostnaden blir */
    echo " <p>Kostnaden för din färd blir för antalet dygn $kostnadPerDygn kr antalet km $kostnadPerKilometer kr därför landar summan på $totalPris kr <p>";
    }
    ?>
    </div> 
</body>
</html>
