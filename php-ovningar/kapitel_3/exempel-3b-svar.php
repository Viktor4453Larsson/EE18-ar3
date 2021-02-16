<?php

/** 
 * Enkel Inloggning
 * PHP version 7
 * @category   Lånekalkylator
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 */
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>farenheit och celcius</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="kontainer">
    <?php
    // Ta emot formuläret 
    $låneMängd = $_POST["lån"];
    $ränta = $_POST["ränta"];
    $väljRänta = $_POST["lånetid"];
    //Sartåt = 0
    $låneKostnad = $låneMängd;

    // Räkna ut totala lånekostnaden 
    for ($i = 0; $i < $väljRänta; $i++) {
        $låneKostnad = $låneKostnad * (1 + $ränta / 100);
    }

    // Skriv ut resultatet 
    echo " <p>Den totala lånekostnaden efter $väljRänta blir $låneKostnad</p>";

    ?> </div>
</html>