<?php
/*
* PHP version 7
* @category   Skapa ett skript som frågar användaren hur många datorer hen äger. Skriptet ska sedan skriva ut korrekt i singular eller plural. 
Det innebär att om användaren har en dator skrivs det ut "Du har 1 dator". Om användaren har tex 3 datorer skrivs det ut "Du har 3 datorer".
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
    <title>Antalet datorer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <form action="#" method="post">
            <h1>Antalet datorer</h1>
            <label>
                <input type="text" name="antalDatorer">
            </label>
            <button type="submit">Skriv ut mening</button>
            <?php
            $datorer = filter_input(INPUT_POST, "antalDatorer", FILTER_SANITIZE_STRING);

            if ($datorer == 1) {
                echo "<p>Du har en dator</p>";
            } else {
                echo "<p>Du har $datorer datorer</p>";
            }
            ?>
        </form>
    </div>
</body>
</html>