<!-- Skapa ett skript som frågar användaren vad hen heter. 
Om användaren heter Tova ska skriptet säga att användaren har namnsdag idag. 
Om användaren istället heter Abbe ska skriptet svara "Du har namnsdag imorgon", men om användaren varken heter Tova eller Abbe ska skriptet svara "Du har varken namnsdag vare sig idag eller imorgon". -->
<!-- Rita av huvud och kropp för HTML taggarna -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vad är ditt namn? Kan det vara din namnsdag</title>
    <!-- Ritningen på sidan -->
    <link rel="stylesheet" href="style.css">
    <form action="#" method="POST">
    <div class="kontainer">
    <h1>Är det din namnsdag idag?</h1>
    <label> Skriv in ditt förnamn här
    <input type="text" name="namn">
    </label>
    <button type="submit">Kolla din namnsdag</button>
    </form>
</head>
<body>
    <?php
    /* Skapa ett filter för dina byrålådor */
    $namnsdag = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
    if ($namnsdag) {
        /* Om använderan skriver Tove ska det stå att det är din namnsdag men en if - sats */
        if ($namnsdag == "Tove") {
            echo "<p>Det är din namnsdag idag</p>"; 
            /* Om det står Abbe ska det stå att det är din namnsdag imorgon */
        } if ($namnsdag == "Abbe") {
            echo " <p>Din namnsdag är imorgon istället</p>";
        } elseif ($namnsdag =! "Abbe" || "Tove") {
            echo "<p>Det är inte din namnsdag tyvärr</p>";
        }
        
    }
    ?>
    </div>
</body>
</html>
