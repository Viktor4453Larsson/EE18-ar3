<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Passwordmeter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <h1>Stränghantering</h1>
            <label for="lösen">Ange ditt lösenord</label>
            <input id="lösen" class="form-control" type="text" name="lösen" required>
            <button type="submit" class="btn btn-warning">Skicka</button>
        </form>
    </div>
</body>
<?php
$lösen = filter_input(INPUT_POST, "lösen", FILTER_SANITIZE_STRING);


// Om vi har data 
if ($lösen) {
    // Minst åtta tecken 
    $längd = strlen($lösen);
    if ($längd < 8) {
        echo " <p>Du behöver flera tecken för ett bättre lösenord</p>";
    } else {
        echo " <p>Din längd är bra på lösenorder</p>";
    }

    // Minst en stor bokstav 
    $versaler = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "Å", "Ä", "Ö"];
    // Testa alla bokstäver en i taget
    $flagga = false;
    foreach ($versaler as $versal) {
        $pos = strpos($lösen, $versal);

        if ($pos !== false) {
            $flagga = true;
        }
    }
    if ($flagga == true) {
        echo " <p>Lösenordet innehåller minst en versial, bra</p>";
    } else {
        echo " <p>Lösenordet är svagt, har inga versaler</p>";
    }
    
    


    // Minst en liten bokstav
    $versaler = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "å", "ä", "ö"];
    // Testa alla bokstäver en i taget
    $flagga = false;
    foreach ($versaler as $versal) {
        $pos = strpos($lösen, $versal);

        if ($pos !== false) {
            $flagga = true;
        }
    }
    if ($flagga == true) {
        echo " <p>Lösenordet innehåller minst en liten bokstav, bra</p>";
    } else {
        echo " <p>Lösenordet är svagt, har små bokstäver</p>";
    }


    // Minst ett nummer 



    // Minst en symbol 



}
?>
</html>