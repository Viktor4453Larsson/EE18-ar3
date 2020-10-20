<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="exempel-1.css">
</head>
<body>
    <div class="kontainer">
    <?php
    // Rensa onödiga mellanslag 

    $epost = "   viktor.larsson020@gmail.com  ";
    $epostTrimmad = trim($epost);
    // Har mellanslag
    echo " <p>$epost</p>";
    // Tog bort mellanslag 
    echo " <p>$epostTrimmad</p>";

    // Omvandla till små eller bara stora bokstäver 
    $svar = "Usa"; // USA, usa, uSa
    $svarGemena = strtolower($svar);
    $svarVersaler = strtoupper($svar);
    $svenska = mb_strtoupper("Hej på dig, är det bra med dig?");
    echo " <p>$svenska</p";

    // Hur lång är detta stycke, hur många tecken? 
    $stycke = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit culpa commodi at nobis, adipisci accusamus vero, nemo rem esse vitae quod cum facere maiores optio quae? Dolore quasi tenetur quia?";
    $antal = strlen($stycke);
    echo " <p>Antalet tecken = $antal</p>";

    // Plocka del av en sträng 
    $epost = "viktor.larsson020@gmail.com";
    $förnamn = substr($epost, 0,6);
    echo " <p>$förnamn ur $epost</p>";
    $efternamn = substr($epost, 7, 7);
    echo " <p>$efternamn ur $epost</p>";

    $domän = substr($epost, 18,26);
    echo " <p>$domän ur $epost</p>";

    // Plocka ut domänen ur en epost adress
    $domän = strstr($epost, "@");
    echo " <p>$domän</p>";

    // Hitta positionen på @-tecknet 
    $position = strpos($epost, "@");
    echo " <p>@ ligger på position $position</p>";

    // Finns "ntig" i inmattade epost-adressem?
    if (strpos($epost, "ntig") !== false) {
        echo " <p>Ja, ntig finns i din mejl adress</p>";
    } else {
        echo " <p>Nej, ntig finns inte i din mejl adress</p>";
    }

    // Ersätt text i sträng 
    $texten = "Åke är lärare i Gymmnasiearbetet";
    $nyText = str_replace("Åke", "Helling", $texten);
    echo " <p>$nyText</p>";
    
    ?>
    </div>
</body>
</html>
<?php

?>