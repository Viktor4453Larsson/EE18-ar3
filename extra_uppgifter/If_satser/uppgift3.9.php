<!-- Skapa ett skript som frågar användaren, ”Vilket är Europas folkrikaste land?”. 
Så länge som användaren svarar fel ska hen få en ny chans att svara på frågan. -->
<!-- Skapa kropp och huvud -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Europas rikaste land</title>
    <!-- Skapa ritning -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post">
        <div class="kontainer">
            <!-- Fråga vad europas rikaste land är -->
            <label> Vad är Europas rikaste land?
            <input type="text" name="rikaste_land">
            </label>
            <button type="submit">Kolla din gissning</button>
            <?php
            $europasRikasteLand = filter_input(INPUT_POST, "rikaste_land", FILTER_SANITIZE_STRING);
            if ($europasRikasteLand == "Qatar") {
               /* <!-- Qatar ska svaret vara --> */ 
                echo "<p>Ditt svar är korrekt</p>";
            } else {
                 /* <!-- Om användaren svarar fel ska dem få svara på frågan igen --> */
                /* <!-- Skriv ut att det är fel svara men att användaren ska försöka igen --> */
                echo "<p>Försök igen du har oändligt många chanser på dig, lycka till :)</p>";
            } 
            
                
            ?>
        </div>
    </form>
</body>
</html>



