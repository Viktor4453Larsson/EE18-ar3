<?php
/** 
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
error_reporting(E_ALL);
ini_set('display_errors', 1);
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datum repition</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    /**
     * Skriv ett skript som tar en siffra (från formuläret i uppgift 1.4) som innehåller dagens temperatur i Celsius. Programmet ska sedan skriva ut hur många grader Fahrenheit det motsvarar enligt följande mall: "100 grader Celsius motsvarar 212 grader Fahrenheit". Formeln för omvandlingen är F = (9/5)*C + 32 där F står för grader Fahrenheit och C för grader Celsius.
     */
    // Dagens datum 
    $datum = date("1 y F");
    echo " <p>Dagens datum är $datum</p>";

    // För att byta språk från engelska till svenska.
    setlocale(LC_ALL, "sv_SE.utf8");

    // Översätt datumet till svenska.
    $svensktDatum = strftime("%A %y %B");
    echo " <p>Dagens datum på svenska är $svensktDatum</p>";

    <?php
    //Variabler för att kunna räkna ut Farenheit

    $celiusSomOmvandlas = $_POST["celcius"];
   

    // Omvandla 
    $farenheit = $celiusSomOmvandlas * 9 / 5 + 32



    // Skriv ut 
    echo "<p> $celiusSomOmvandlas&deg; celcius motsvarar 212 $farenheit&deg; </p>"
    ?>
    
    ?>
</body>
</html>