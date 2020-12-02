<?php
/*
* PHP version 7
* @category   Ett fik har en kampanj där personer äldre än 65 år och personer mellan 12 och 18 år erbjuds att köpa kaffe extra billigt. 
Skriv ett skript som kollar om användaren får köpa kaffe extra billigt. 
Skriptet får endast ha en if-sats.
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fika med kaffe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <form action="#" method="post">
            <h1>Fika med kaffe</h1>
            <label> Har du rätt till rabatt på kaffet? Skriv in din ålder för att kolla.
                <input type="text" name="kaffeRabatt">
            </label>
            <button type="submit">Kolla</button>
            <?php
            $kaffe = filter_input(INPUT_POST, "kaffeRabatt",  FILTER_SANITIZE_STRING);
            if ($kaffe >= 65) {
                echo "<p>Du har rätt till rabatt</p>";
            } elseif ($kaffe <= 18) {
                echo "<p>Du har rätt till rabatt</p>";
            }
            else {
                echo "<p>Du har inte rätt till rabatt, vill du ha kaffe ändå</p>";
            }
            ?>
        </form>
    </div>
</body>
</html>