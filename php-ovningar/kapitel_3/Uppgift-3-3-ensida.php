<?php
/*
* PHP version 7
* @category Lånekalkylator
* @author Karim Ryde <karye.webb@gmail.com>
    * @license PHP CC
    *Skriv ett skript som frågar efter två heltal via ett formulär, det första talet ska vara lägre än det andra. Skriv ut alla heltal mellan de två som matats in. Separera med mellanslag

    */
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Två tal</h1>
        <form action="#" method="POST">

            <?php

           
// Finns data?
if (isset ($_POST["tal1"], $_POST["tal2"])) {
   
    $tal1 = $_POST["tal1"];
    $tal2 = $_POST["tal2"];

}
if ($tal1 > $tal2) {
  echo " <p>Ditt första tall är större än det andra</p>";
} elseif ($tal1 <  $tal2) {
    for ($i = $tal1 + 1; $i < $tal2 ; $i++) { 
        echo " <p> $i </p>";
    }
}
    ?>
            <label for="tal1">Ange tal 1 </label>
            <input type="text" name="tal1" required> <br>
            <label for="tal2">Ange tal 2 </label>
            <input type="text" name="tal2" required>
            <button type="submit" class="btn btn-warning">Skriv ut</button>
        </form>
    </div>
</body>
</html>