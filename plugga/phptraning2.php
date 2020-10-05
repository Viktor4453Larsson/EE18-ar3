<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plugga övningar i PHP 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="#" method="POST">
    <!-- Gör två ruttor för tal ett och tal två inmatning.(klar)  -->
<input type="text" name="tal1">
<label for="tal1">Skriv ditt första tal här!</label>
<p></p>
<input type="text" name="tal2">
<label for="tal2">Skriv ditt andra tal här!</label>
<p></p>
<input type="radio" name="val" value="1">
<label for="val">Tryck här om du ska få mejl</label>
<p></p>
<input type="radio" name="val" value="2">
<label for="val">Tryck här om du ska få på telefon</label>
<p></p>
<input type="radio" name="färg" value="red">
<label for="färg">Röd backgrund</label>
<p></p>
<input type="radio" name="färg" value="blue">
<label for="färg">Blå backgrund</label>
<p></p>
<input type="radio" name="färg" value="green">
<label for="färg">Grön backgrund</label>
<p></p>
<input type="radio" name="färg" value="yellow">
<label for="färg">Gul backgrund</label>
    <p></p>
    <button type="submit">Skicka här!!!</button>
    
        <?php
        if (isset($_POST["tal1"], $_POST["tal2"], $_POST["färg"])) {
            $number1 = $_POST["tal1"];
            $number2 = $_POST["tal2"];
            $summa = $_POST["summa"];
            $backgrund = $_POST["färg"];

            // Räkna båda talen.(klar)
            $summa = $number1 + $number2;

            // Skriv ut dem.(klar men fungerar ej)

            echo "<p>Första talet $number1 och det andra talet $number2 blir summan $summa</p>";
        }
// Gör två stycken radio buttons med en if sats där man kan välja mellan mejl eller telefonnummer, skriv ut att vi tar kontakt med tel eller mejl respektive.(klar, skrivs inte ut av någon anledning)

if ($valAvKontakt == 1) {
    $valAvKontakt = $_POST["val"];

    echo " <p>Vi kommer skicka på din mejl den info du behöver</p>";
} elseif ($valAvKontakt == 2) {

    echo " <p> Vi kommer skicka på din telefon den info du behöver</p> ";
} 

    //Byt backgrundsfärg.(klar)    
if ($backgrund = "style.farg") {
    $backgrund = $_POST["färg"];
echo "<body style=\"background: $backgrund;\">";
}
  //Gör en array lägg till Stockholm, Göteborg och Malmö i den.(klar)      
$städer = ["Bengtsfors", "Flemingsberg", "Flen"];
echo " <p></p>";
echo " <p></p>";
print_r($städer);

$städer[] = "Stockholm"; 

print_r($städer);

echo " <p></p>";

$städer[] = "Göteborg"; 

print_r($städer);

echo " <p></p>";

$städer[] = "Malmö"; 

print_r($städer);
        ?>
    </form>
</body>
</html>