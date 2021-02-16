<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Text till morsekod</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="./morse.css">
</head>
<body>
    <div class="kontainer">
        <h1>Omvandla text till morsekod</h1>
        <form action="#" method="POST">
            <textarea name="texten" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>
        <?php

        /* Ta emot data som skickas */
        if (isset($_POST["texten"])) {

            // Ta emot data från formuläret
            $texten = $_POST["texten"];
        }
        {
        
            /* Morsealfabetet A-Z och mellanslag */
            $morse['A'] = '.-';
            $morse['B'] = '-...';
            $morse['C'] = '-.-.';
            $morse['D'] = '-..';
            $morse['E'] = '.';
            $morse['F'] = '..-.';
            $morse['G'] = '--.';
            $morse['H'] = '....';
            $morse['I'] = '..';
            $morse['J'] = '.---';
            $morse['K'] = '-.-';
            $morse['L'] = '.-..';
            $morse['M'] = '--';
            $morse['N'] = '-.';
            $morse['O'] = '---';
            $morse['P'] = '.--.';
            $morse['Q'] = '--.-';
            $morse['R'] = '.-.';
            $morse['S'] = '...';
            $morse['T'] = '-';
            $morse['U'] = '..-';
            $morse['V'] = '...-';
            $morse['W'] = '.--';
            $morse['X'] = '-..-';
            $morse['Y'] = '-.--';
            $morse['Z'] = '--..';
            $morse['Å'] = '.--.-';
            $morse['Ä'] = '.-.-';
            $morse['Ö'] = '---.';
            $morse[' '] = ' ';
            
            

            // Omvandla texten till versaler (stora bokstäver) 
            $texten = mb_strtoupper($texten);
            
            // Dela upp texten i dess bokstäver 
            $bokstäver = preg_split('//', $texten, -1, PREG_SPLIT_NO_EMPTY);
            
            //print_r($bokstäver);
            // Loopa igenom texten 
            echo "<form id=\"demo\"><label>$texten</label><input type=\"text\" pattern=\"[.\- ]+\" name=\"code\" value=\"";
             foreach ($bokstäver as $bokstav) { echo "<p>$morse[$bokstav]</p> ";
             }{
                // Skriv ut bokstavens morsekod 
                echo "\"><button>Spela upp</button></form>";             
            }
        }
        ?>
    </div>
    <script src="./morse.js"></script>
</body>
</html>