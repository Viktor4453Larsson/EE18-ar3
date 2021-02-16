<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
*Gör ett program som tar den inmatade texten ur ett formulärs "textarea" och sparar den i en fil.
*
*
*
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filhantering</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="./exempel-1.css">
    <form action="#" method="POST">
   <textarea name="textarea" id="textarea" name="textarea" cols="30" rows="10"></textarea>
    <button type="submit" class="btn btn-warning">Skicka</button>
</form>
</head>
<body>
    <?php
    // 1. Öppna filen för läsning
    $handtag = fopen("exempel-1.css", "r");

    // Läs in text, 10 första tecknen 
    $text = fread($handtag, 10);

    echo " <p>$text</p>";

    // Frigör resusen stänger filen
    fclose($handtag);

    // Skriva till en fil 
    $handtag = fopen("mandag.txt", "w");

    // Skriv en rad (\n gör att text hoppar ner ett steg)
    fwrite($handtag, "Idag börjar vi med filhantering...\n");
    fwrite($handtag, "Vi tittar på hur man använder fopen och fread.\n");
    echo " <p>Ett exempel på en uppdelning av två rader i en textfil</p> ";

    fclose($handtag);

    // 2. Läsa in hela textfilen på en gång (file kan användas för att läsa av hela filen inte bara ett visst antal tecken)
    //Läser av alla raderna som finns i en array
    $rader = file("mandag.txt");
    print_r($rader);


    // Skriv ut raderna en i taget
    foreach ($rader as $rad) {
        echo " <p>$rad</p> ";
    }

    // 3. Sätt attläsa in textfilen i en sträng 
    $allText = file_get_contents("mandag.txt");
    echo " <p>$allText</p> ";

    // 4. Läsa in en fil från nätet
    $hemsida = file_get_contents("https://vecka.nu/");
    // echo " <p>$hemsida</p>";

    //Sparar ner en hemsida 
    $handtag = fopen("veckanu.html", "w");
    fwrite($handtag, $hemsida);
    fclose($handtag);
    ?>
</body>
</html>