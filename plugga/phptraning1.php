<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plugg-träning-ett</title>
    <link rel="stylesheet" href="style.css">
    <p></p>
    <input type="text" name="anvandarnamn">
    <label for="anv">Skriv in ditt användarnamn här</label>
    <p></p>
    <input type="text" name="losenord">
    <label for="los">Skriv in ditt lösenord här</label>
    <p></p>
    <input type="radio" name="val">
    <label for="man" id="man">Man</label>
    <p></p>
    <input type="radio" name="val">
    <label for="kvinna" id="kvinna">Kvinna</label>
</head>
<p></p>
<button type="submit">Skicka</button>
<body>
    <form action="#" method="POST">
        <?php
        if (isset($_POST["Anvandarnamn"], $_POST["Losenord"], $_POST["man"], $_POST["kvinna"])) {

            $anvNamn = $_POST["anvandarnamn"];
            $password = $_POST["losenord"];
            $man = $_POST["val"];
            $kvinna = $_POST["val"];    
            $dagensDatum = date("d");
            $dagensDag = date("F");
            $dagensVeckodag = date("1", $unixTimestamp);


            echo " <p>Dagens datum är $dagensDatum, $dagensDag $dagensVeckodag</p>";
            echo " <p></p>";
            echo " <p>$anvNamn, $password, $man, $kvinna</p>";
            
        }
        // Gör en HTML 5 här // (Klar)

        // Skriv ut dagens datum, dag och år (klar kolla bara $unixTimestamp)

        // Gör en inloggningsruta med användarnamn och lösenord samt en radioknapp där du kan välja kön (klar )

        // Se till att allt finns tillgängligt på en och samma sida (klar)
        ?>
    </form>
</body>
</html>