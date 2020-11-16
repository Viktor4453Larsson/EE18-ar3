<!--Skapa ett skript som frågar användaren vilket hur långt hen kan hoppa mätt i meter. 
Skriptet ska sen berätta hur mycket längre världsrekordet är (8,90 meter): "Bob Beamon hopar ... m längre än dig!".-->

<!--/* Bygg huvud och kropp */  -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hur nära är du Beamons hoprekord?</title>
     <!-- /* Gör en ritning av sidan */ -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="#" method="POST">
    <div class="kontainer">
    <h1>Hur nära är du Beamons hoprekord?</h1>
            <input type="text" name="langd">
             <!-- /* Be användaren säga hur långt dem hoppar */ -->
            <label for="text">Hur långt kan du hoppa i längdhopp i meter (m) (ex. 2.5)?</label>
             <!-- /* Lägg till en knapp där man kan skicka in */ -->
            <button type="submit">Se skillnad</button>
        </form>
        <?php
        if (isset($_POST["langd"])) {
            $langd = $_POST["langd"];
            /* <!-- Ta Beamons rekord minus det användaren har stoppat in --> */
            $Beamon = 8.9 - $langd;
        }
        /* <!-- Skriv ut hur stor skillnad det är mellan längderna --> */
        echo " <p>Skillnaden mellan hur långt du hoppar och Beamon är $Beamon i antalet meter</p>";
        ?>  
    </div>      
</body>
</html>





