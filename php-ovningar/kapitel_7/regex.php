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
                <input type="text" name="text" required>
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
            // På samma sätt som strstr()
            if (preg_match("/abc/", $text)) {
                echo "<p>&#10003; Innehåller 'abc'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'abc'.</p>";
            }  

            // Hitta en bokstav i alfabetet
            if (preg_match("/[a-zåäö]/", $text)) {
                echo "<p>&#10003; Innehåller 'en bokstav ur alfabetet'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'en bokstav ur alfabetet'.</p>";
            }  
            // Matcha siffror
            if (preg_match("/[0-9]/", $text)) {
                echo "<p>&#10003; Innehåller 'en siffra'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'en siffra'.</p>";
            }  
            // Negativa matchningar (Vad finns inte med)
            if (preg_match("/[^_]/", $text)) {
                echo "<p>&#10003; Innehåller understräck.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej understräck'.</p>";
            }  


            // Matcha stora och små bokstäver (case insensitive)
            if (preg_match("/[a-zåäö]/i", $text)) {
                echo "<p>&#10003; Innehåller små eller stora bokstäver.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej små eller stora bokstäver'.</p>";
            }  

            // Sök efter 'a', 'aa', 'aaa' 
            if (preg_match("/[a+]/i", $text)) {
                echo "<p>&#10003; Innehåller en eller flera a.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej en eller flera a'.</p>";
            }  

            // Sök efter om det finns noll eller flera
            if (preg_match("/[a*]/i", $text)) {
                echo "<p>&#10003; Innehåller noll eller flera a.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej noll eller flera a'.</p>";
            }  

            // Matcha ett antal, tex en ipv4 som 192.168.0.1
            if (preg_match("/[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}./", $text)) {
                echo "<p>&#10003; Matchar en IP-address.</p>";
            } else {
                echo "<p>&#10005; Matchar ej en IP-address.</p>";
            }  

            // Matcha ett antal, tex en ipv4 som 192.168.0.1
            if (preg_match("/[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}./", $text)) {
                echo "<p>&#10003; Matchar en IP-address.</p>";
            } else {
                echo "<p>&#10005; Matchar ej en IP-address.</p>";
            }  


            // Matcha ordet SAB eller SAAB 
            if (preg_match("/SA{1,2}B/i", $text)) {
                echo "<p>&#10003; Innehåller SAB eller SAAB.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej SAB eller SAAB'.</p>";
            }  


            // Matcha ordet SAB eller SAAB 
            if (preg_match("/SAB | SAAB/i", $text)) {
                echo "<p>&#10003; Innehåller SAB eller SAAB.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej SAB eller SAAB'.</p>";
            } 

            // Matcha ordet Obs eller OBS eller obs 
            if (preg_match("/obs/i", $text)) {
                echo "<p>&#10003; Innehåller OBS eller obs.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej OBS eller obs'.</p>";
            }  
 
            // Matcha en gatuaddress t.ex Sveavägen 12, Sveaväg. 12
            if (preg_match("/Sveaväg(en 12|\. 12)/i", $text)) {
                echo "<p>&#10003; Innehåller Sveavägen 12 eller Sveaväg. 12.</p>";
            } else {
                echo "<p>&#10005; Matchar ej'.</p>";
            }  
        }
        ?>
    </div>
</body>
</html>