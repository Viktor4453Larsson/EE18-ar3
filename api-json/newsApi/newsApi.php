<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nyhets API</title>
    <link rel="stylesheet" href="./newsApi.css">
</head>
<body>
<div class="box">
    <h1>Nyhets API</h1>
<?php
    /* API nyckeln */
    $key = "9d98cb13447c41a3a3c58fe4134dfe00";

    

     $url =  "https://newsapi.org/v2/everything?q=keyword&apiKey=9d98cb13447c41a3a3c58fe4134dfe00";
    
    $json = file_get_contents($url);
    

    $jsonData = json_decode($json);
    $totalResults = $jsonData->totalResults;
    $title = $jsonData->articles[0]->title;

    $articles = $jsonData->articles;
    $author = $articles[0]->$author;
    
    echo $author;
    echo $totalResults;
    echo $title;
?>
</div>
</body>
</html>