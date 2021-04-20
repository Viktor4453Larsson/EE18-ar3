<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chuck Norris</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="box">
    <h1>Skämt med Chuck Norris</h1>
<?php
    /* Själva anropet på tjänsten */
    $url = "https://api.chucknorris.io/jokes/random";
    /* Gör ett anropp */
    $json = file_get_contents($url);
    /* Lägga Json filen i en annan variabel */
    $jsonData = json_decode($json);
    echo "<p>$jsonData->value</p>";
    echo "<p>Skapad den $jsonData->created_at</p>";
    echo "<img src=\"$jsonData->icon_url\" alt=\"Chuck Norris\">";
?>
</div>
</body>
</html>