<?php
/*
* PHP version 7
* @category   Ett företag vill anställa gymnasiestudenter som personal. 
Skapa ett skript som frågar användaren om hen har gått ut gymnasiet. Användaren ska uppmanas att svara j för ja eller n för nej. 
Skriptet ska också fråga hur gammal hen är.
Om hen har gått ut gymnasiet och är under 22 år så ska skriptet säga ”Vi vill gärna anställa dig”, annars ska skriptet säga ”Vi letar tyvärr efter annan personal just nu”. 
Skriptet får endast ha en if-sats.
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anställning för en annonym skola</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <form action="#" method="post">
        <p>Hej och välkommen till detta ansökningsystem du kommit till, svara på frågorna om du är intresserad av en anställning hos oss</p>
    <label> Här skriver du in din ålder!
        <input type="text" name="alder">
    </label>
    <label> Har du gått ut gymmnasiet? Skriv "j" för ja och "n" för nej, svara ärligt
        <input type="text" name="gymmnasie">
    </label>
    <button type="submit">Kolla status</button>
    <?php
    $ålder = filter_input(INPUT_POST, "alder", FILTER_SANITIZE_STRING);
    $jaEllerNej = filter_input(INPUT_POST, "gymmnasie", FILTER_SANITIZE_STRING);

    $anställd = $ålder+"j";
    $ickeAnställd = $ålder+$jaEllerNej = $ålder+"n";

    if ($jaEllerNej = "n" && $ålder <= 21) {
        echo "<p>Ditt svar $ickeAnställd betyder att vi inte kan ta in dig tyvärr</p>";
    } else {
        echo "<p>Du är en kandidat som vi ska fundera på att ta in, grattis</p>";
    }
    
    ?>
    </form>
    </div>
</body>
</html>