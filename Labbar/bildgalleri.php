<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bildgalleri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bildgalleri.css">
</head>
<body>
    <div class="kontainer">
        <h1>Bildgalleri</h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Namnet på katalogen
                $katalog = "./bilder/";

                // Skanna katalogen
                $filer = scandir($katalog);
                
                // Loopa igenom alla funna filer
                foreach ($filer as $key => $fil) {

                    // Visa inte ”." och ”.."
                    if ($fil == '.' || $fil == '..') {
                        continue;
                    }
                    // Visa bara bilden om filformat ”.jpg”
                    $info =  pathinfo("./$fil");
                    
                    //var_dump($info["extension"]);
                    if ($info["extension"] == "jpg") {
                        if ($key == 2) {
                            echo "<div class=\"carousel-item active\">\n";
                        } else {
                            echo "<div class=\"carousel-item \">\n";
                        }
                        echo "<img src=\"$katalog/$fil\" class=\"d-block w-100\" alt=\"$katalog/$fil\">\n";
                        echo "</div>\n";
                    }
                }
                echo "</div>";
                echo "<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">";
                echo "<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"><span>";
                echo "<span class=\"sr-only\">Previous</span>";
                echo "</a>";
                echo "<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">";
                echo "<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"><span>";
                echo "<span class=\"sr-only\">Next</span>";
                echo "</a>";
                echo "</div>";
                echo "</div>";
                ?>
            </div>
</body>
</html>