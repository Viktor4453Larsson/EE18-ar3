<!-- Skriv ett skript som frågar hur långt Max och Jakob hoppade. 
Skriv därefter ut hur mycket längre som Max hoppade. -->

<!--/* Bygg huvud och kropp */  -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hur mycket längre hoppade Max än Jakob?</title>
     <!-- /* Gör en ritning av sidan */ -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <!-- För att få informationen skickad tillbaks till samma sidan -->
        <form action="#" method="POST">
        <!-- Titel som används -->
        <h1>Hur mycket längre hoppade Max än Jakob?</h1>
        <!-- Beskriver för användaren att Max hopplängd måste skrivas ut -->
        <label for="">Skriv hur långt Max hoppade i antalet meter?</label>
        <input type="text" name="max">
         <!-- Beskriver för användaren att Jakob hopplängd måste skrivas ut -->
        <label for="">Skirv hur långt Jakob hoppade i antalet meter?</label>
        <input type="text" name="jakob">
        <button type="submit">Kolla</button>
        </form>
        <?php
        $max = filter_input(INPUT_POST, "max", FILTER_SANITIZE_STRING); 
        $jakob = filter_input(INPUT_POST, "jakob", FILTER_SANITIZE_STRING); 
        if ($max && $jakob) {
            $maxLängreÄn = $max - $jakob; 
            echo " <p>Max är $maxLängreÄn meter längre än Jakob</p>";
        }
        ?>
    </div>
</body>
</html>
<!-- /* Gör en ritning av sidan */ -->



