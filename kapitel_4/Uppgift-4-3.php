<?php
/*
* PHP version 7
* @category Lånekalkylator
* Skriv en webbapp där användaren matar in ett tal 1-9 och sedan returnerar det svenska namnet för talet (ett, två, tre osv). Om talet är större än 9 så returnerar du i stället talet som vanligt (tex. 11). 
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
    */
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siffror till text omvandlare</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./EE18-ar3/./kapitel_4/./Uppgift-4-1.css">
</head>
<body>
    <div class="container">
        <h1>Tal till text</h1>
        <form action="#" method="POST">
            <label for="namn">Ange ett tal</label>
            <input id="tal" type="text" name="tal[]"> <br>
            <button type="submit" class="btn btn-warning">Skicka</button>
        </form>
        <?php
        // Finns data?
        if (isset($_POST["tal"])) {
            $tal = $_POST["tal"];


            //Skapa en array 
            $siffror = ["noll", "ett", "två", "tre", "fyra", "fem", "sex", "sju", "åtta", "nio"];

            echo " <p>siffror[$tal]</p>";

            //Fixa undantag för tal som överstiger 9
            if ($tal<10) {
                echo " <p>siffror[$tal]</p>";   
            } else {
                echo " <p>$tal</p>" ;
            }
        }
        ?>
    </div>
</body>
</html>