<!-- Skapa ett skript som ber användaren mata in lönen för 3 anställda. 
Skriptet ska sedan presentera medellönen för personalen. -->
<!--/* Bygg huvud och kropp */  -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medelönen på jobbet</title>
    <!-- /* Gör en ritning av sidan */ -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <!-- Hur vi skickar runt informationen -->
        <form action="#" method="POST">
            <!-- Sidans titel -->
         <h1>Medelönen på jobbet</h1>
         <!-- Be användaren matta in 3 olika löner som du sedan kommer använda för beräkning -->
         <p>Observera att siffrorna måste skrivas ihopsatta</p>
         <label for="text">Skriv in lönen på den första personen i ett valfritt belopp <br> (Lön för person 1)</label>
         <input type="text" name="p1">
         <label for="text">Gör det samma med en annan person <br> (Lön för person 2)</label>
         <input type="text" name="p2">
         <label for="text">Ytterligare med en tredje person <br> (Lön för person 3)</label>
         <input type="text" name="p3">
         <button type="submit">Kolla medelönen på kollegorna</button>
        </form>
        <?php
        /* Gör ett filter för dem inputs du använder */
        $lönFörPerson1 = filter_input(INPUT_POST, "p1", FILTER_SANITIZE_STRING);
        $lönFörPerson2 = filter_input(INPUT_POST, "p2", FILTER_SANITIZE_STRING);
        $lönFörPerson3 = filter_input(INPUT_POST, "p3", FILTER_SANITIZE_STRING); if ($lönFörPerson1 && $lönFörPerson2 && $lönFörPerson3) {
            /* Skapa en variabel som kommer lägga ihop medellvärdet */
            $medelvärdet = ($lönFörPerson1 + $lönFörPerson2 + $lönFörPerson3) / 3; 
        /* Skriv ut medelvärdets summa */
        echo "<p>Medelvärdet på dina kollegors lön är $medelvärdet</p>";
         }
        ?>
    </div>
</body>
</html>
