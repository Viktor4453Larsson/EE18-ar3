<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webbscrapping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
        echo "<h1>Dagens horoskop</h1>";

        // Hämta sidan
        $sidan = file_get_contents("https://astro.elle.se");

        // Sök början på texten
        $start = strpos($sidan, "c-post_content__wrapper") ;
        if ($start !== false) {
            echo "<p>Horoskopet började på position $start</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }

        // Hitta var horoskopet slutar
        $slut = strpos($sidan, "c-widget__area", $start);
        if ($slut !== false) {
            echo "<p>Horoskopet slutar på position $slut</p>";
        } else {
            echo "<p>Hittade inte horoskopets slut!</p>";
        }

        //echo " <p>Startposition börjar ca $start </p>";
        //echo " <p>Startposition slutar ca $slut </p>";

        // Skriv ut den här delen 
        $caStartposition = substr($sidan, $start + 26, $slut - $start);

        //echo " <p>$caStartposition</p>";

        // första delen före annonsen
        /* $start = strpos($caStartposition, "<div class=\"o-indenter\">");
         $slut = strpos($caStartposition, "</div>", $start );
         $del1 = substr($caStartposition, $start, $slut - $start );
         echo "$del1</div>\n"; */

         // Texten för första 
        /* $start = strpos($caStartposition, "<div class=\"o-indenter\">", $slut);
         $slut = strpos($caStartposition, "</div>", $start );
         $del2 = substr($caStartposition, $start, $slut - $start );
         echo "$del2</div>\n"; */

         // Hämta resterande divboxar
         for ($i = 0; $i < 24; $i++) {
             echo "<p>$i</p>";

         // Texten för första 
         $start = strpos($caStartposition, "<div class=\"o-indenter\">", $slut);
         $slut = strpos($caStartposition, "</div>", $start );
         $del2 = substr($caStartposition, $start, $slut - $start );
         echo "$del2</div>\n";
         }
        ?>
    </div>
</body>
</html>