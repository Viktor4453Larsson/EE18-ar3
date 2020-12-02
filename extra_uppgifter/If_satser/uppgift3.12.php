<?php
/*
* PHP version 7
* @category   Skapa ett skript som frågar användaren vilken plats hen kom på i senaste idrottsturneringen. 
Skriptet ska sedan berätta om användaren fick guld, silver, brons eller ingen medalj.  
Skriptet får endast ha en switch-sats,
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medaljer och idrott</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <form action="#" method="post">
            <h1>Vilken plats kom du på?</h1>
            <label> Skriv vad du placerade på din senaste idrottstävling, Glöm inte stor bokstav i början!
                <input type="text" name="plats">
            </label>
            <button type="submit">Kolla din medalj</button>
            <?php
            $medalj = filter_input(INPUT_POST, "plats", FILTER_SANITIZE_STRING);
            switch ($medalj) {
                case 'Etta':
                    echo "<p>Du fick en guldmedalj</p>";
                    break;
                    case 'Tvåa':
                        echo "<p>Du fick en silvermedalj</p>";
                        break;
                        case 'Trea':
                            echo "<p>Du fick en bronsmedalj</p>";
                            break;
                            case 'Fyra':
                                echo "<p>Du fick ingen medalj</p>";
                                break;
                default:
                    # code...
                    break;
            }
            ?>
        </form>
    </div>
</body>
</html>