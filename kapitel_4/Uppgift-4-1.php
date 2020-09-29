<?php
/*
* PHP version 7
* @category Lånekalkylator
* @author Karim Ryde <karye.webb@gmail.com>
    *Skapa en webbapp med ett formulär där användaren kan mata in 5 st namn. Kalla textrutorna för namn[]. Sortera sedan namnen och skriv ut dem i bokstavsordning, ett på varje rad.
    *
    *
    *
    *
    *
    *
    *
    *
    *
    *
    */
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arrayer med namn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./EE18-ar3/./kapitel_4/./Uppgift-4-1.css">
</head>
<body>
    <div class="container">
        <h1>Arrayer med namn</h1>
        <form action="#" method="POST">

           
            <label for="namn">Ange namn 1</label>
            <input id="namn" type="text" name="namn[]"> <br>
            <label for="namn">Ange namn 2</label>
            <input id="namn" type="text" name="namn[]"> <br>
            <label for="namn">Ange namn 3</label>
            <input id="namn" type="text" name="namn[]"> <br>
            <label for="namn">Ange namn 4</label>
            <input id="namn" type="text" name="namn[]"> <br>
            <label for="namn">Ange namn 5</label>
            <input id="namn" type="text" name="namn[]"> <br>
            <button type="submit" class="btn btn-warning">Skicka</button>
        </form>
        <?php
            // Finns data?
            if (isset($_POST["namn"])) {
                $namn = $_POST["namn"];

                var_dump($namn);

                sort($namn);
                foreach ($namn as $namnet) {
                    echo " <p>$namnet</p>";
                }
            }

            ?>
    </div>
</body>
</html>