<?php
/*
* PHP version 7
* @category   Permanent lagring av gps kordinater och länder
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
/* Inkludera databasen som du använder */
include "./sakerhet/conn.php";
?>
<!-- Kropp och huvud -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titeln på sidan -->
    <title>Länder och GPS kordinater</title>
    <!-- Alla färger och former -->
    <link rel="stylesheet" href="permanent_lagring.css">
    <!-- Boostrap länk för att styla om saker lite -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <!-- En byrålåda för att lagra allting -->
    <div class="kontainer">
        <h1>Länder och GPS kordinater</h1>
        <!-- Navigationspanel -->
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="./lasa1.php">Lista</a></li>
                <li class="nav-item"><a class="nav-link " href="./admin/skriva1.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link active" href="./sok1.php">Sök efter kordinater och länder</a></li>
            </ul>
        </nav>
        <!-- För att formuläret ska kunna fungera -->
        <form action="#" method="POST">
            <!-- Sök bland resultaten som stoppats in -->
            <label>Ange Sökterm <input type="text" name="sökterm"></label>
            <button>Sök</button>
        </form>
        <?php
        /* Spamskydd */
        $sökterm = filter_input(INPUT_POST, "sökterm", FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        $radera = filter_input(INPUT_POST, 'radera', FILTER_SANITIZE_STRING);

        /* Ser till att man letar efter resultaten på rätt ställe */
        if ($sökterm) {

            /* SQL kommando för att kunna söka */

            $sql = "SELECT * FROM lander WHERE kordinater LIKE '%$sökterm%' OR namn LIKE '%$sökterm%' OR kommentar LIKE '%$sökterm%'";

            $resultat = $conn->query($sql);

            /* Kolla att inga problem uppståt under processen */
            if (!$resultat) {
                die("Ett fel uppstod med SQL satsen" . $conn->error);
            } else {
                echo "<p> class=\"alert alert-info\" Antalet " . $resultat->num_rows . "Hittade inlägg </p>";
            }

            /* Kommando för att kolla om allt fungerar korrekt */
            //var_dump($resultat);

            /* Visa resultatet i kontainern */
            while ($rad = $resultat->fetch_assoc()) {
                $snippet = mb_substr($rad['inlagg'], 0, 30) . "...";
                echo "<tr class=\"inlägg\"> ";
                echo "<td>$snippet</td>";
                echo "<td>$rad[id]</td>";
                echo "<td>$rad[namn]</td>";
                echo "<td>$rad[kordinater]</td>";
                echo "<td>$rad[kommentar]</td>";
                echo "<td>$rad[date]</td>";
                echo "</tr>";  
                echo "<td><a class=\"alert alert-warning\" href=\"redigera.php?id=$rad[id]\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a></td>";
                echo "<td><a class=\"alert alert-danger\" href=\"radera.php?id=$rad[id]\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>";
            }

               
                
                
                
                
           

            /* Stänger av databsen när vi inte behöver den mera */
            $conn->close();
        }
        ?>
    </div>
</body>
</html>