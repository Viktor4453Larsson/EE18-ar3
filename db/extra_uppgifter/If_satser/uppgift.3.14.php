<?php
/*
* PHP version 7
* @category   För att få delta i en tävling måste man vara mellan 16 och 19 år gammal. 
Skapa ett skript som frågar användaren hur gammal hen.
Skriptet skriver sedan ut om hen får delta i tävlingen och om hen är för ung eller om hen är för gammal.
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Får du delta i tävlingen?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konatiner">
        <form action="#" method="post">
            <h1>Får du delta i tävlingen?</h1>
            <label> Hur gammal är du det är en åldersgräns här?
                <input type="text" name="alder">
            </label>
            <button type="submit">Kolla svar</button>
            <?php
            $ålder = filter_input(INPUT_POST, "alder", FILTER_SANITIZE_STRING);

            if ($ålder <= 15) {
                echo "<p>Du är för ung för att delta i tävlingen tyvärr</p>";
            } elseif ($ålder >= 20) {
                echo "<p>Du är för gammal för att delta i tävlingen</p>";
            } else {
                echo "<p>Du får delta i tävlingen, gratulerar</p>";
            }
            ?>
        </form>
    </div>
</body>
</html>