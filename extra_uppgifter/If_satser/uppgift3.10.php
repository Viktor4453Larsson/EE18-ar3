<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
* För att få åka berg-och-dalbana på en nöjespark så måste man vara mellan 1,4 och 1,9 meter lång. 
Skapa ett skript som frågar om användarens längd.
Skriptet skriver ut om hen får åka eller inte.
*/
?>
<!-- Bygg huvud och kropp -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ge en titel till något -->
    <form action="#" method="post">
    <title>Berg och dalbana</title>
    <!-- Gör en ritning -->
    <link rel="stylesheet" href="style.css">
    <!-- Skapar en låda för allting -->
    <div class="kontainer">
        <!-- Titel igen -->
        <h1>Berg och dalbana</h1>
        <p>Välkommen till vår berg och dalbana du behöver vara mellan 1,4 till 1,9 meter lång för att åka!</p>
        <label>Skriv hur lång du är?
        <input type="text" name="längd">
        </label>
        <button type="submit">Får du åka eller inte?</button>   
    <?php
    $ärDuTillräckligtLång = filter_input(INPUT_POST, "längd", FILTER_SANITIZE_STRING);
    if ($ärDuTillräckligtLång == "0") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.0") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.1") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.2") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.3") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.4") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.5") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.6") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.7") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.8") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "0.9") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "1") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.1") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.2") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.3") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.4") {
        echo "<p>Du får åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.5") {
        echo "<p>Du får åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.6") {
        echo "<p>Du får åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.7") {
        echo "<p>Du får åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.8") {
        echo "<p>Du får åka</p>";
    } elseif ($ärDuTillräckligtLång == "1.9") {
        echo "<p>Du får åka</p>";
    } elseif ($ärDuTillräckligtLång == "2.0") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "2.1") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "2.2") {
        echo "<p>Du får inte åka</p>";
    } elseif ($ärDuTillräckligtLång == "2.3") {
        echo "<p>Du får inte åka</p>";
    }
    ?>
    </form>
    </div>
</head>
<body>

</body>
</html>