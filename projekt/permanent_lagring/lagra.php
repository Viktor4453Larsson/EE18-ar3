<?php
/*
* PHP version 7
* @category   Permanent lagring av gps kordinater och länder
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
/* Ta med databasen som du vill använda */
include "./projekt/permanent_lagring/sakerhet/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titeln på sidan -->
    <title>Länder och GPS kordinater</title>
    <!-- Boostrap länk -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Färger, läng och bredd osv -->
    <link rel="stylesheet" href="permanent_lagring.css">
</head>
<body>
    <!-- Byrålåda för alla saker inuti -->
    <div class="kontainer">
        <h1>Länder och GPS kordinater</h1>
        <!-- Navigationsbar -->
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="./taemot.php">Läs informationen som kommer in</a></li>
                <li class="nav-item"><a class="nav-link active" href="./lagra.php">Skriv ut informationen</a></li>
                <li class="nav-item"><a class="nav-link " href="./skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./sok.php">Sök efter kordinater och länder</a></li>
            </ul>
        </nav>
        <!-- Ett formulär för GPS kordinater och länder -->
        <form action="#" method="POST">
            <label>Ange GPS kordinater ex. 59,297326418,0522474 <input type="text" name="kordinater"> </label>
            <label>Ange Land ex. Spanien <input type="text" name="namn"> </label>
            <button>Spara dina resultat</button>
        </form>
        <?php
        include "./projekt/permanent_lagring/sakerhet/conn.php";
        /* Ett spam skydd för onödiga tecken och krävande att användaren fyller i information innan nästa steg börjar */
        $sql = "SELECT * FROM lander";
        $resultat = $conn->query($sql);

        /* Spara värdet som tagits upp i rätt variabel */
        if ($gps && $land && $kommentar) {
            var_dump($gps, $land, $kommentar);

            $sql = "INSERT INTO permanent (lander) VALUES ('$gps') AND INSERT INTO permanent (lander) VALUES ('$land') AND INSERT INTO permanent (lander) VALUES ('$kommentar') ";

            $result = $conn->query($sql);

            /* En kontrollcheck att allt fungerar som det ska */
            if (!$result) {
                die("Något gick fel när du skrev in ditt meddelande");
            } else {
                echo "<p>Ditt inlägg har sparats</p>";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>