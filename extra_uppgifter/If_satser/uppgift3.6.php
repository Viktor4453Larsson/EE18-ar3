<!-- Skapa ett skript som frågar vilket land som vann fotbolls-VM i USA för herrar år 1994. 
Om användaren svarar Sverige ska skriptet skriva ut att svaret var rätt, annars att svaret var fel. 
Det spelar ingen roll om användaren gissar med stora eller små bokstäver. (Använd strtolower). -->

<!-- Ta med html huvud och kropp -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VM i fotboll 1994</title>
    <!-- Ritningen för sidan -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <form action="#" method="POST">
            <h1>VM i fotboll 1994</h1>
            <!-- En beskrivning som frågar ställer frågan vilket land som vann fotbolls-VM i USA för herrar år 1994? -->
            <label>Vilket land vann fotbolls-VM i USA för herrar år 1994? 
                <!-- Ett ställe att skriva in sitt svar -->
                <input type="text" name="land">
            </label>
            <!-- En knapp som man skickar ut med -->
            <button type="submit">Kolla ditt svar</button>
        </form>
        <?php
        /*<!-- Ett filter för dem variablerna vi kommer använda + om det är ifyllda -->  */
        $land = filter_input(INPUT_POST, "land", FILTER_SANITIZE_STRING);
            /* <!-- Skriva en if-sats --> */
        if ($land == "Sverige") {
            $land = "Sverige" == strtolower($land) ;
            $land = "Sverige" == strtoupper($land) ;
            /* <!-- Om användaren svarade Sverige, sverige eller SVERIGE så ska datorn säga att svaret var rätt --> */
            echo "<p>Grattis det svar var rätt du är bäst</p>";
        }else {
            /* <!-- I andra fall säg att du hade fel tyvärr eller något sånt --> */
            echo "<p>Tyvärr var ditt svar fel, var vänlig försök igen</p>";
        }
            
        ?>
    </div>
</body>
</html>






