<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regex</title>
    <link rel="stylesheet" href="regex.css">
</head>
<body>
    <div class="kontainer">
        <h1>Hitta match med regex</h1>
        <form action="#" method="POST">
            <label>Ange text
                <textarea type="text" name="text" required></textarea>
            </label>
            <button>Skicka</button>
        </form>
        <?php
        /* Ta emot data som skickas */
        $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

        if ($text) {
            echo "<h3>Inmattat</h3>";
            echo "<p>Text: <em>'$text'</em></p>";

            echo "<h3>Resultat</h3>";
            // Matcha "123"
            // Regex = regular expression = reguljära uttryck

            // Gör ett formulär där användaren ska fylla i ett domännamn. Kontrollera sedan att domännamnet slutar på .com, .net eller .org. Du ska också kontrollera att de övriga tecknen endast består av bokstäver a-z, siffror 0-9 eller bindestreck (-). Första tecknet måste vara en bokstav. Domännamnet ska vara minst 6 tecken och högst 200 tecken långt.

             // Matcha med .org .com .next
             if (preg_match("/.org|.net|.com$/", $text)) {
                echo "<p>&#10003; Slutar på .org|.net|.com.</p>";
            } else {
                echo "<p>&#10005; Slutar inte på .org|.net|.com.</p>";
            }  
             // Matcha a-z, 0-9, @ och bindesträck
             if (preg_match("[a-zåäö0-9\-@\.]+/", $text)) {
                echo "<p>&#10003; Korrekt email adress.</p>";
            } else {
                echo "<p>&#10005; Inkorrekt email adress.</p>";
            }  

            //Första tecknet måste vara en bokstav! 
             if (preg_match("/^[a-z]/", $text)) {
                echo "<p>&#10003; Slutar på .org|.net|.com.</p>";
            } else {
                echo "<p>&#10005; Slutar inte på .org|.net|.com.</p>";
            }  

            // Längden 6-200 tecken 
            if (preg_match("/.{6,200}/", $text)) {
                echo "<p>&#10003; Du har mellan 6 till 200 tecken.</p>";
            } else {
                echo "<p>&#10005; Du har inte mellan 6 till 200 tecken</p>";
            }  

        }
        ?>
    </div>
</body>
</html>