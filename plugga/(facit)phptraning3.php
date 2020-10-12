<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP övningar 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="POST">
        <label>Klicka här för mejl!</label>
        <input type="radio" name="val" value="1"><br>
        <label>Klicka här för telefonnumer</label>
        <input type="radio" name="val" value="2"><br>
        <button type="submit">Skicka här</button>
    </form>
    <!-- Gör två stycken radio buttons med en if sats där man kan välja mellan mejl eller telefonnummer, skriv ut att vi tar kontakt med tel eller mejl respektive.(klar, skrivs inte ut av någon anledning) -->
    <?php
    if (isset($_POST["val"])) {
        $val = $_POST["val"];
        var_dump($val);

        $dagensDatum = date("d");
        $dagensMånad = date("F");

        echo " <p>$dagensDatum, $dagensMånad</p>";
        if ($val == "1") {
            echo " <p>Vi kommer kontakta dig via $val</p>";
        } elseif ($val == "2") {
            echo " <p>Vi kommer kontakta dig via $val</p>";
        }
    }
    ?>

    <!-- Skriv ut dagens datum -->
</body>
</html>