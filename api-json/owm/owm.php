<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chuck Norris</title>
    <link rel="stylesheet" href="./owm.css">
</head>
<body>
<div class="box">
    <h1>Väder i Stockholm</h1>
<?php
    /* API nyckeln */
    $key = "22ee1d58f7adae08ee71fa7c0bd24481";

    /* Den stad som vi använder */
    $stad = "Stockholm";

    $url = "https://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$key&units=metric";
    
    $json = file_get_contents($url);

    $jsonData = json_decode($json);
    
    //Plocka ut kordinaterna
    $coord = $jsonData->coord;
    $lon = $coord->lon;
    $lat = $coord->lat;

    echo "<p>$lat $lon</p>";
    
    /* Plocka ut vädret */
    $weather = $jsonData->weather;
    /* Läggs på [] eftersom packetet är innuti en array på openweather */
    $description = $weather[0]->description;
    $icon = $weather[0]->icon;

    echo "<p>Vädret är: $description</p>";
    echo "<img src=\"http://openweathermap.org/img/wn/$icon@2x.png\" alt=\"OWN\">";

?>
</div>
</body>
</html>