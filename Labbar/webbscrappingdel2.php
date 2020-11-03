<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webbscrappingdel2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
        echo "<h1>Dagens horoskop</h1>";

        // Hämta sidan
        $sidan = file_get_contents("https://www.sweclockers.com/forum/trad/1138840-overklockningsguiden-for-sandy-bridge-ivy-bridge-haswell");

        // Sök början på texten
        $start = strpos($sidan, "widget border-radius-medium bg-dark-grey-primary no-hover") ;
        if ($start !== false) {
            echo "<p>Senaste nyheterna började på position $start</p>";
        } else {
            echo "<p>Senaste nyheterna början!</p>";
        }

        // Hitta var nyhetsruta slutar
        $slut = strpos($sidan, "bottom padding-medium", $start);
        if ($slut !== false) {
            echo "<p>Nyhetsrutan slutar på position $slut</p>";
        } else {
            echo "<p>Hittade inte nyhetsrutans slut!</p>";
        }

        //echo " <p>Startposition börjar ca $start </p>";
        //echo " <p>Startposition slutar ca $slut </p>";

        // Skriv ut den här delen 
        $caStartposition = substr($sidan, $start + 86, $slut - $start);
        
        echo " <p>$caStartposition</p>";
        ?>
    </div>
</body>
</html>