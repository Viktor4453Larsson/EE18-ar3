<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skriv ut csv-fil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./restaurang.css">
</head>
<body>
    <div class="kontainer">
        <h1>NTI lunchrestauranger</h1>
        <form class="bg-light" action="#" method="POST">
            <label>Ange filnamn</label>
            <input class="form-control" type="text" name="filnamn">
            <button type="submit" class="btn btn-primary">Läs in</button>
        </form>
        <?php
        if (isset($_POST["filnamn"])) {
            $filnamn = $_POST["filnamn"];

            //Berättar för användaren om en fil finns tillgänglig eller inte för användning
            if (is_readable($filnamn)) {
                echo '<p class="alert alert-primary" role="alert">Din fil hittades<p/>';
            } else {
                echo '<p class="alert alert-danger" role="alert">Fil kunde inte hittas försök igen;<p/>';
            }
            // Läs in hela filen 
            $allaRader = file($filnamn);

            $antalRader = 0;
    

            // Loopa igenom alla raderna, skriv ut raderna
            echo " <table class=\"table table-striped\">";
            echo "<th scope=\"col\">Namn</th>";
            echo "<th scope=\"col\">Gata</th>";
            echo "<th scope=\"col\">Postnr</th>";
            echo "<th scope=\"col\">Postort</th>";
            foreach ($allaRader as  $rad) { 

                // Klippa upp raden efter varje ","
                $delar = explode(",", $rad);

                // Skapar en tabellrad
                echo "<tr><td>$delar[0]</td><td>$delar[1]</td><td>$delar[2]</td><td>$delar[3]</td></tr>";
    
                // Räkna ut antalet rader
                $antalRader++;
            }
            
            // Dela upp raden
            $delar = $rad;

            echo " </table> ";
            // Skriv ut tabellrad 
            echo "<p class=\"alert alert-primary\" role=\"alert\">Antalet rader som hittats är $antalRader <p/>";
        }
        ?>
    </div>
</body>
</html>