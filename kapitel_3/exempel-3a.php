<?php
/*
* PHP version 7
* @category Lånekalkylator
* @author Karim Ryde <karye.webb@gmail.com>
    * @license PHP CC
    *Gör ett skript som är en lånekalkylator. Mha radioknappar ska användaren kunna välja mella$_POSTn 1, 3 och 5 års lånetid. I en ruta ska användaren skriva i lånebeloppet och i nästa räntan i hela procent. Programmet ska sedan räkna ut den totala lånekostnaden. Räknas ut genom ränta på ränta-principen, årsvis). Så för ett tvåårigt lån på 5000 med räntan 4% skulle alltså lånekostnaden bli 5000*1,04*1,04 - 5000. Observera att lånet är "amorteringsfritt".

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
        <form action="exempel-3b-svar.php" method="POST">
            <label for="lån">Lånebeloppet</label>
            <input type="text" name="lån"> <br>
            <label for="ränta">Ränta</label>
            <input type="text" name="ränta">

            <input id="knapp1" class="form-control" type="radio" name="lånetid" value="1"> Låneränta ett år
            <input id="knapp2" class="form-control" type="radio" name="lånetid" value="3"> Låneränta 3 år
            <input id="knapp3" class="form-control" type="radio" name="lånetid" value="5"> Låneränta 5 år <br>
            <button type="submit" class="btn btn-warning">Räkna ut</button>
        </form>
    </div>
</body>
</html>
