<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arrayer och Foreach()</title>
    <link rel="stylesheet" href="./exempel-2.css">
</head>
<body>
    <?php
    // En array
    $länder = ["Sverige", "Norge", "Finland"];

    // Skriver ut en hel array 
    print_r($länder);


    echo " <p>$länder[0]</p> ";
    echo " <p>$länder[1]</p> ";
    echo " <p>$länder[2]</p> ";

    // Utöka en array
    $länder[] = "Danmark";

    print_r($länder);

    // Ta bort ett element från en array (Finland)
    unset($länder[2]);
    print_r($länder);
    echo " <p></p>";

    // Associativ array (Bra att använda i databaser)
    $elever = []; // Tom array

    $elever["Viktor"] = "Guitar";
    $elever["Lukas"] = "Keyboard";
    $elever["Olle"] = "Munspel";
    print_r($elever);

    /* Loppar igenom en hel array -> bättre för arrayer med foreach */

    foreach ($länder as $land) {
        echo " <p>$land</p> ";
    }
    //Loopa igenom arrayen elever 
    foreach ($elever as $instrument) {
        echo " <p>$instrument</p> ";
    }
    foreach ($elever as $key => $instrument) {
        echo " <p>$key spelar $instrument</p> ";
    }

    // Skriv ut en tabell


    echo "<table>";
    echo "<tr>";
    echo "<td>John</td>";
    echo "<td>Doe</td>";
    echo "</tr>";
    echo "<td>Jane</td>";
    echo "<td>Doe</td>";
    echo "</tr>";
    echo "<table>";

    echo " <p></p>";

    echo "<table>";
    foreach ($länder as $land) {
        echo "<tr>";
        echo " <td>$land</td> ";
        echo "</tr>";
    }
    echo "<table>";

    echo " <p></p>";
    // Skrive elever som tabeller
    echo "<table>";
    echo "<th>Namn</th>";
    echo "<th>Instrument</th>";
    foreach ($elever as $key => $instrument) {
        echo "<tr>";
        echo "<td>$key</td>";
        echo " <td>$instrument</td> ";
        echo "</tr>";
    }
    echo "</table>";

    // Splita en sträng 

    $mening = "Newton's law of universal gravitation is usually stated as that every particle attracts every other particle in the universe with a force that is directly proportional to the product of their masses and inversely proportional to the square of the distance between their centers.";

    $allaOrd = explode("", $mening);

    // Skriv ut alla orden i en numrerade
    echo "<table>";
    echo "<tr>
    <th>Ordning</th>
    </tr>";
    echo "<tr>
    <th>Ord</th>
    </tr>";
    foreach ($allaOrd as $key => $ord) {
        echo "<tr>";
        echo " $key + 1";
        echo "<tr>";
        echo " <td>$key</td><td>$ord</td> ";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>