<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skanna en katalog</title>
    <link rel="stylesheet" href="regex.css">
</head>
<body>
    <div class="kontainer">
        <h1>Hitta match med regex</h1>
        <form action="#" method="POST">
        </form>
        <h1>Skanna en katalog</h1>
        <?php
       // Välj katalog
       $katalog = "/var/www";

       // Skriv ut vilken är katalogen som skannas 
       echo " <p>Karalogen: $katalog</p>";

       // Skanna av katalogen 
       $resultat = scandir($katalog);

       // Vad innehåller resultatet?
       //var_dump($resultat);

       // Loopa igenom arrayen $resultat
       foreach ($resultat as $objekt) {
           // Skippa "." och ".."
           if ($objekt == "." || $objekt == ".." ) {
               continue;
           }

           // Skippa underkatalogen 
           if (is_dir($katalog/$objekt)) {
               continue;
           }

           // Skaffa fram lite info om filen 
           $info = pathinfo($objekt);
           var_dump($info);

           echo " <p>$objekt</p>";
       }
        ?>
    </div>
</body>
</html>