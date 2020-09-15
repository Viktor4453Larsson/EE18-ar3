<?php
/** 
 * Enkel Inloggning
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>farenheit och celcius</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="kontainer">
    <?php
    // Få lösenord och användarnamn
    $Lösenord = $_POST["lösenord"];
    $Användarnamn = $_POST["användarnamn"];

    // Se till att lösenord och användarnamn stämmer
if ($Lösenord == "123" && $Användarnamn == "Viktor") {
    echo "<div class=\"alert alert-success\" role=\"alert\">
    Du är inloggad!
  </div>";
} else {
    header("Location:exempel-1b.php?fel=1");
}
    ?>
</div>
</html>