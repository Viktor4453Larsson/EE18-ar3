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
    <title>farenheit och celcius</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    /**
     * Ändra föregående formulär så att man kan med radioknappar välja mellan "Omvandla från F° till C°" eller "Omvandla C° till F°". Ändra på skriptet så att uträkningen stämmer.
     */
  
    //Variabler för att kunna räkna ut både celcius och farenheit

     // Omvandla 
     $temperatur = $_POST["temperatur"];
     $omvandla = $_POST["omvandla"];
   // Err val måste göras 

   if ($farenheitOmvandlare == "CF") {
       echo " <p>$temperatur&deg; celcius motsvarar $farenheit&deg; farenheit </p> ";
   } elseif () {
    $celcius = ($temperatur - 32) * 5 / 9;
  
   } else {
    $kelvin = $temperatur - 273;
   }
   
   

   




    // Skriv ut 
   echo " <p>$temperatur&deg; faremheit motsvarar $celcius&deg; celcius</p> ";
    
    ?>
</body>
</html>