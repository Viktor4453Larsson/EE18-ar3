<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php introduktion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //echo "<p>Idag är det \"";
    //echo date("1");
    //echo "\". </p>;
    

    //echo "<p>Idag är det \"" . date("1") . "\". </p>";

    /* Med en variabel */
    //$idag = date("1");
    //echo "<p>Idag är det \"\$idag".</p>";

    // Dagens datum, Inte $dDatum 
    // Undvik $dat
     $dagensDag = date("d");
     $månad = date("F");
     $dagensDatum = date("l", $unixTimestamp);
     echo "<p>Idag är  $dagensDag  $dagensDatum $månad\"</p>";
     // Idag är monday 14 September. 


     //Hämta ut några server variabler 
     echo "<p>$_SERVER[SERVER_ADDR]</p>";


    ?>
</body>
</html>