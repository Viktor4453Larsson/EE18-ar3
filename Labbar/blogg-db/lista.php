<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
        <li class="nav-item"><a class="nav-link active" href="./skriva.php">Skriva</a></li>
        <li class="nav-item"><a class="nav-link" href="./lista.php">Admin</a></li>
    </ul>
</body>
</html>
<?php
include "./resuser/conn.php";
// 2. Ställ en SQL-fråga
$sql = "SELECT * FROM blogg";
$result = $conn->query($sql);


// Gick det bra?
if (!$result) {
    die("Något blev fel med SQL-satsen.");
} else {
    echo "<p>Lista på blogg kunde hämtas.</p>";
}

// Presentera resultatet
while ($rad = $result->fetch_assoc()) {
    echo "<p>$rad[rubrik] $rad[inlagg]</p>";
}
?>