<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skriv ut csv-fil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="restauranger.css">
</head>
<body>
    <div class="kontainer">
        <h1>Omvandla med TSV</h1>
        <form class="bg-light" action="#" method="POST">
            <label>Skolsalarna</label>
            <button type="submit" class="btn btn-primary">Läs in</button>
        </form>
        <?php
        if (isset($_POST["salar.tsv"])) {
             // Textfilen som skall läsas in
     $tsvfil = "salar.tsv";
        
     // Är filens läsbar?
     if(is_readable($tsvfil))
     echo "<p>Din fil hittades</p>";

     
     
     // Läs in filens alla rader
     $rader = file($tsvfil);
         
     $antalRader = 0; 
     
     // Loopa igenom alla rader
     echo " <table class=\"table table-striped\">";
        echo "<th scope=\"col\">Nr</th>";
        echo "<th scope=\"col\">Namn</th>";
        echo "<th scope=\"col\">Typ</th>";
        echo "<th scope=\"col\">Bokbar</th>";
        foreach ($rader as  $rad)
     
         // Skippa första raden om det två första tecknena är id
        
       if (substr($rad, 0, 2 == "id")) {
          continue;
       } 
     
         // Plocka ut det som vi behöver som är bokbar
         $delar = explode("\t", $rad);
         
         // Dela upp raden i dess delar
         $salNrNamn = $delar[1];
         $bokbar = $delar[3];
 
         // Visa salar i en tabell med kolumnrubriker: nr/namn, bokbar
         $antalRader++;
    }
     else {
        echo "<p>Din fil hittades inte</p>";
    }
     
         
    
        ?>
    </div>
</body>
</html>