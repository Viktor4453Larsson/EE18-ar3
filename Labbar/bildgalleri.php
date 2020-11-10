<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bildgalleri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="bildgalleri.css">
</head>
<body>
    <div class="kontainer">
        <?php
        // Ange katalogen
        echo "<h1>Bildgalleri $katalog</h1>";

        // Namnet på katalogen
        $katalog = "./bilder/";
       
        // Skanna katalogen
        $filer = scandir($katalog);

        //var_dump($filer);

        echo "<div class=\"kol4\">";
        
        // Loopa igenom alla funna filer
        foreach ($filer as $fil) {

            // Visa inte ”." och ”.."
            if ($fil == '.' || $fil == '..') {
                continue;
            }
            if (is_dir($katalog/$fil)) {
                continue;
            }

            // Visa bara bilden om filformat ”.jpg”
            $info =  pathinfo($fil);
            //var_dump($info["extension"]);
            if ($info["extension"] == "jpg") {
                echo "<img src=\"$katalog/$fil\" alt=\"\">";
            }
        }
        echo "</div>";
        ?>
    </div>
</body>
</html>