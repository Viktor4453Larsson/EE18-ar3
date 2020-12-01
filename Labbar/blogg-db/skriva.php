<?php
/*
* En enkel blogg
* PHP version 7
* @category   webbapplikation med databas
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
include "./resuser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogg</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <nav>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
        <li class="nav-item"><a class="nav-link active" href="./skriva.php">Skriva</a></li>
        <li class="nav-item"><a class="nav-link" href="./lista.php">Admin</a></li>
    </ul>
</nav>
        <h1>Min blogg</h1>
        <form action="#" method="POST">
            <label>Ange rubrik <input type="text" name="header"></label>
            <label>Ange texten<textarea name="postText"></textarea></label>
            <button>Spara</button>
        </form>
        <?php
        $header = filter_input(INPUT_POST, 'header', FILTER_SANITIZE_STRING);
        $postText = filter_input(INPUT_POST, 'postText', FILTER_SANITIZE_STRING);
        if ($header && $postText) {
            var_dump($header, $postText);
            /* SQL anslutning */
            $sql = "INSERT INTO post (header, postText) VALUES ('$header', '$postText')";

            // Steg 2: Nu kör vi alla SQL satserna
            $result = $conn->query($sql);

            // Gick det att köra SQL koden?
            if (!$result) {
                die("Något blev fel med SQL-satsen");
            } else {
                echo "<p>Inlägget har registrerats</p>";
            }

            
            // Steg 3: Stänga ner anslutningen
            $conn->close();
        }
        ?>
    </div>
</body>
</html>