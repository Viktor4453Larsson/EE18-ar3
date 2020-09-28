<?php
/*
* PHP version 7
* @category   Lånekalkylator
* På det nationella provet i Matematik 1 våren 2018 så fanns följande poänggränser för olika provbetyg.
Provbetyg
Poänggräns
A
55
B
45
C
35
D
25
E
15
Skapa ett skript som frågar användaren hur många poäng hen fick på detta prov. Skriptet ska säga vilket provbetyg användaren fick.
* 
* 
* 
* 
* 
* 
* 
* 
* 
*
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nationella provet i Matematik 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Nationella provet i Matematik 1</h1>
        <form action="#" method="Post">

            <?php


            // När man kommer tillbaka på sidan så
            if (isset($_POST["poäng"])) {

                $poängPåProv = $_POST["poäng"];

                // Räkna ut betygen enligt tabellen
                if ($poängPåProv < 55) {
                    echo " <p>Du fick i A betyg</p> ";
                } elseif ($poängPåProv < 45) {
                    echo " <p>Du fick i B betyg</p> ";
                } elseif ($poängPåProv < 35) {
                    echo " <p>Du fick i C betyg</p> ";
                } elseif ($poängPåProv < 25) {
                    echo " <p>Du fick i D betyg</p> ";
                } elseif ($poängPåProv < 15) {
                    echo " <p>Du fick i E betyg</p> ";
                } elseif ($poängPåProv < 15)
                    echo " <p>Du har F i betyg</p> ";
            } else {
               echo " <p></p> ";
            }
            ?>
            <label for="poäng">Ange antalet poäng du fick på provet</label>
            <input type="text" name="poäng" required> <br>
            <button type="submit" class="btn btn-warning">Visa betyg</button>
        </form>
    </div>
</body>
</html>