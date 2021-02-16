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

            // Olika adresser
            if (preg_match_all("/[a-zåäö0-9 .]+/i", $text, $träffar)) {
                echo "<p>&#10003; Några träffar.</p>";
             // Skriv ut arrayen som en punktlista
             echo "<ol>";
             foreach ($träffar[0] as $träff) {
               
                echo "<li>$träff</li>";      
                
             }
             echo "</ol>";
            } else {
                echo "<p>&#10005; Inga träffar.</p>";
            }  
        }
        ?>
    </div>
</body>
</html>