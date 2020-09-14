<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultat från formuläret</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    /**Använd formuläret från uppgift 1.2. Skapa ett skript som tar emot data från detta formulär: Skriptet ska skriva ut "Namn:" följt av namnet på personen, "epostadress:" och personens epostadress och till sist "Vi kommer att kontakta dig inom snarast per " följt av antingen epost eller telefon beroende på vad användaren valt. */
    
    // Skriv variablerna av allt du ska läsa av 
    $forNamn = $_POST["namnFornamn"];
    $emailForKlient = $_POST["email"];
    $telefon = $_POST["tel"];
    $kotaktMeddelande = $_POST["kontaktMeddelande"];
    $kontakt = $_POST["roll"];

    $kotaktMeddelande = "Vi kommer inom kort ta kontakt med dig, tack för din ansökan";
    // Skriv ut all info för användaren
    echo "<p> Hej $forNamn ! Din email som är inskriven är $emailForKlient. $kotaktMeddelande </p>";

    if ($kontakt == "epost") {
        echo "Vi kommer kontakta dig per $telefon"; 
    } else {
        echo "Vi kommer kontakta dig per $emailForKlient";
    }  
    ?>
</body>
</html>