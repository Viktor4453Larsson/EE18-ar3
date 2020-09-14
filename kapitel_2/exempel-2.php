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
    //Läs av skickad tal 1 från formuläret
    $tal1 = $_POST["nummer1"];
    $tal2 = $_POST["nummer2"];

    //Räkna ut summan 
    $summa = $tal1 + $tal2;

    // Skriv ut resultatet: Summan av 3 + 5 är 8
    echo "<p>Summan av $tal1 + $tal2 är $summa</p>";
    ?>
</body>
</html>