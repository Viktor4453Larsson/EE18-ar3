<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plugg-träning-ett</title>
    <link rel="stylesheet" href="style.css">
    <p></p>
    <input type="text" name="Anvandarnamn">
    <label for="anv">Skriv ditt användarnamn</label>
    <p></p>
    <input type="text" name="Losenord">
    <label for="los">Skriv ditt lösenord</label>
    <p></p>
    <label for="man" >Man</label>
    <input type="radio" id="man" value="man" checked > 
    <p></p>
    <label for="kvinna">Kvinna</label>
    <input type="radio" id="kvinna" value="kvinna">
</head>
<p></p>
<button type="submit">Skicka</button> 
<body>
    <form action="#" method="POST"></form>
    <?php
    // Gör en HTML 5 här // (Klar)

    // Skriv ut dagens datum, dag och år (Träna)

    // Gör en inloggningsruta med användarnamn och lösenord samt en radioknapp där du kan välja kön (Träna på mera)

    // Se till att allt finns tillgängligt på en och samma sida (Träna)
    
    $dagensDag = date("d");
    $dagensMånad = date("F");
    $dagensDatum = date("1", $unixTimestamp);
   

    echo " <p></p>";
    echo " <p> Idag är det $dagensDatum $dagensMånad och $dagensDag </p>";
    
    ?>
</body>
</html>