<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    // Hur man skriver stränger i PHP (ord) //

<h1>Min första PHP Sida</h1>
<p>Den här HTML visas som den skulle vitsats</p>
<?php echo "<p>Men den här koden blir avbruten av PHP och gjord till HTML</p>";?>
<?php echo "<ul><li>Du kan använda vilka HTML taggar som du vill,</li><li>som den här listan.</li></ul>";?>
<?php
echo "ecko är ett så simpelt kommando" ; 
?>
<?php
echo "jag lär mig något" ;
?>

// Hur man räknar ut tal // 

<?php
echo  25 * 37;
?>

// Hur man skapar variabler // 

<?php
$mittNamn = "Viktor" ;
$minÅlder = "18" ;
echo $mittNamn ;
echo $minÅlder ;
?>

// Det här är en kommentar 

<footer>
  <p>Den här koden är bara vanlig HTML</p>
</footer>
</body>
</html>