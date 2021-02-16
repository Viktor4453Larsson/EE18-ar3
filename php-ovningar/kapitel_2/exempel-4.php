<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backgrundsfärg</title>
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
    /* En byrå som samlar alla tidigare färger i en för alla har samma nman på type */
   $bytaFarg = $_POST["färg"];
   /* Skriver ut en css i PHP som ändrar färg på den byrålåda vi hade innan med alla färgerna, ändrar den efter den färg vi valt */
echo "<body style=\"background: $bytaFarg;\">";
    ?>

</html>