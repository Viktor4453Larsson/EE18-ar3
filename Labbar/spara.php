<?php
/*
* PHP version 7
* En enkel blogg där man lagrar inlägg i en textfil
* @category   Webbapp
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/united/bootstrap.min.css">
    <link rel="stylesheet" href="blogg.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Bloggen</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" href="blogg.php">Alla inlägg</a></li>
                    <li class="nav-item"><a class="active nav-link" href="spara.php">Skriva inlägg</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="#" method="post">
                <textarea class="form-control" name="inlagg" id="inlagg" cols="30" rows="10"></textarea>
                <button class="btn btn-primary">Spara inlägg</button>
            </form>
            <?php
            // Ta emot data från formuläret
            if (isset($_POST["inlagg"])) {

               // Skapa en intärn variabel
               $texten = $_POST["inlagg"];

               //Förberedd texten för HTML
               $ersattMedBr = str_replace("\n", "<br>", $texten);

               // Skriv till datum 
               setlocale(LC_ALL, "sv_SE.utf8");
               $dagensDatum = strftime("%A %e %B kl %H:%M");
               

               // Vad heter textfilen? 
               $filnamn = "blogg.txt";

               // Steg 1: Öppna textfilen för att skriva 
               $handtag = fopen($filnamn, "a");


               // Steg 2: Skriv texten 
               fwrite($handtag, "<p class=\"alert alert-warning\" role=\"alert\">$dagensDatum<br>$ersattMedBr</p>\n");

               // Steg 3: Stäng ned anslutningen till filen 
               fclose($handtag);
               
               // Skriv ut en bekräftelse 
               echo " <p class=\"alert alert-success\" role=\"alert\">Inlägget har lagts till</p>";
            }             
            ?>
        </main>
        <footer>
            2020
        </footer>
    </div>
</body>
</html>