
<?php
/*
* En enkel blogg
* PHP version 7
* @category   webbapplikation med databas
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
include "../sakerhet/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Länder och GPS kordinater</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../permanent_lagring.css">
</head>
<body>
    <div class="kontainer">
    <h1>Länder och GPS kordinater</h1>
    <nav>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" href="../lasa1.php">Lista</a></li>
        <li class="nav-item"><a class="nav-link active" href="./admin/skriva1.php">Skriva</a></li>
        <li class="nav-item"><a class="nav-link" href="../sok1.php">Sök efter kordinater och länder</a></li>
    </ul>
</nav>   
        <form action="#" method="POST">
            <label>Ange GPS kordinater ex. 59,297326418,0522474 <input required type="text" name="kordinater"></label>
            <label >Ange kommentarer<textarea required name="kommentar"></textarea></label>
            <label>Ange Land ex. Spanien <input required type="text" name="namn"></label>
            <button>Spara</button>
        </form>
        <?php
        $gps = filter_input(INPUT_POST, "kordinater", FILTER_SANITIZE_STRING);
        $land = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
        $kommentar = filter_input(INPUT_POST, "kommentar", FILTER_SANITIZE_STRING);
        if ($gps && $land && $kommentar) {
            //var_dump($gps, $land, $kommentar);
            /* SQL anslutning */
            $sql = "INSERT INTO lander (namn, kordinater, kommentar) VALUES ('$land', '$gps', '$kommentar')";

            // Steg 2: Nu kör vi alla SQL satserna
            $resultat = $conn->query($sql);

            // Gick det att köra SQL koden?
            if (!$resultat) {
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