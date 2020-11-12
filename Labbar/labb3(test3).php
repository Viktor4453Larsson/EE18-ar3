
<!-- installera filen i vs studio kod så att den finns redan och att man kan läsa den. - klar  -->


<!--
Skriv ut hela ritningen av det du ska bygga så att det går att bygga då behöver vi både huvud och kropp och stoppa in olika kommandom som div, klasser, strängar, if-satser och funktioner eller p,h1,h2 osv.
-->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Läs av en tsv fil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <form class="bg-light" action="#" method="POST">
        <h1>Läs av en tsv fil</h1>
        <label>Skriv in vad din fil heter här</label>
        <input  type="text" name="filnamn">
        <button class="btn btn-primary" type="submit">Kontrollera fil här</button>
        </form>
        <?php
        if (isset($_POST["filnamn"])) {
            $filnamn = $_POST["filnamn"];

            if (is_readable($filnamn)) {
               
                    echo " <p>Filen går att läsa</p>";
                } else {
                    echo " <p>Filen går inte att läsa</p>";
                }   

            

                $allaRader = file($filnamn);

                $antalRader = 0;

                

                echo "<table class=\"table table-striped\">";
                echo "<th> scope=\col\">Gata</th>";
                echo "<th> scope=\col\">Nummer</th>";
                echo "<th> scope=\col\">PostNr</th>";
                echo "<th> scope=\col\">OrganisationNr</th>";
                foreach ($allaRader as $rad) {
                    

                    $delar = explode(",", $rad);

                    echo "<tr><td>$delar[0]</td><td>$delar[1]</td><td>$delar[2] </td><td>$delar[3]</td></tr>";

                    $antalRader++;
                    
                }
                $delar = $rad;

                echo "</table>";
                echo " <p>Antet rader som skrevs ut var $antalRader</p>";
                
            
            }
        ?>
    </div>
</body>
</html>
    
            <!--Du glömmde is_readable förra gången  -->
            

           <!-- // Glöm inte fil + filnamn här --> 
        
            
               <!-- // Du glömmde $delar förra gången --> 
             
              <!--// $delar och inte $allaRader  -->
               

              <!-- // Glöm inte denna -->  
              
     
           <!-- // SKriv denna bättre --> 


    <!-- Klasserna är innan (Är inte nödvändiga) -->
    
    <!-- För att kunna hitta vad för fil du skrivit måste du ange namnet på den  - klar-->



<!--
Skriv ut ritningen med färger. Där du kan ändra djup, storlek, skugga, bred och längd. - klar
-->
<!--
Gör en låda där alla dina saker kan vara i. - klar
-->
<!--
Skriv en rubrik på vad du faktiskt gör. - klar
-->
<!--
Berätta att du alltid kommer hamna på bara din sida när du skickar och att du skickar direkt tillbaka till dig själv och inte till ett annat ställe. - klar
-->
<!--
Ge knappen du använder ett bra namn. - klar
-->
<!--
Skapa en variabel för din fil och hur den ska läsas. - klar
-->

<!--
Sätt ihop variabeln med serverkommandot för att skicka något. - klar
-->
<!--
Kolla så att alla fält är ifyllda och klara (I det här fallet att filnamn finns med innan vi kollar om filen finns eller inte).  - klar
-->
<!--
Efter att vi har gjort det så behöver vi kolla om filen är läsbar som vi försöker använda. - klar
-->
<!--
Skriva ut om filen går att läsa eller inte med ett om eller påstoende. - klar
-->
<!--
Om filen är läsbar skriv ut det om inte skriv att den är det. - klar
-->
<!--
Skapa en variabel du har innan du loopar och dess värde som är i plural och en annan i singular som du använder när du väl loopar med variabeln du hade innan.  - klar
-->
<!--
Nu är det dags att rita upp en tabell med allt som fått av listan.  
-->
<!--
Skapa en tabellstruktur. 
-->
<!--
Saker som behöver skrivas ut flera gånger behöver du loppa. 
-->
<!--
Skappa en ny variabel för att dela allt du skrivit. 
-->
<!--
Använd saxens kommando och välj vart och hur ofta du ska klippa. 
-->
<!--
Plusa på den variabel du klipper med så att du stannar när det är klart 
-->
<!--
Skriv ut antalet rader som din text var på. 
-->

