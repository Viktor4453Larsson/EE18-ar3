<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
include "./resuser/conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Inloggning</h1>
            <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./registrera.php">Registrera</a></li>
                <li class="nav-item"><a class="nav-link " href="./loggaIn.php">Logga In</a></li>
                <li class="nav-item"><a class="nav-link" href="./loggaUt.php">Logga ut </a></li>
                <li class="nav-item"><a class="nav-link" href="./lista.php">Lista</a></li>
            </ul>
        </nav>
        </header>
        <main>
            <form action="#" method="POST">
                <label>Förnamn <input type="text" name="fnamn" required></label>
                <label>Efternamn <input type="text" name="enamn" required></label>
                <label>Användarnamn <input type="text" name="anamn" required></label>
                <label>Lösenord <input type="password" name="lösen1" required></label>
                <label>Upprepa lösenord <input type="password" name="lösen2" required></label>
                <button type="submit">Registrera</button>
            </form>
            <?php
            // Filtrera och skydda mot framtida hot
            $namn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
            $efternamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
            $anvandernamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $lösenord1 = filter_input(INPUT_POST, "lösen1", FILTER_SANITIZE_STRING);
            $lösenord2 = filter_input(INPUT_POST, "lösen2", FILTER_SANITIZE_STRING);

            // Ett till steg av skydd
            if ($namn && $efternamn && $anvandernamn && $lösenord1 && $lösenord2) {
                // @TODO kontrollera att användarnamnet inte används flera gånger, att eposten fungerar och kräv mera av lösenordet

                $sql = "SELECT *  FROM användare WHERE anamn LIKE '$anvandernamn'";
               $result = $conn->query($sql);

                if ($result->num_rows != 0) {
                    echo " <p class=\"alert alert-danger\" role='alert'> Användarnamnet är redan taget och upptaget</p>";
                } else {
                    // Kontrollera om lösenorden matchar med varandra 
                    if ($lösenord1 == $lösenord2) {
                        //var_dump($namn, $efternamn, $anvandernamn, $lösenord1, $lösenord2);
                        //Räkna ut hash 
                        $hash = password_hash($lösenord1, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO användare (fnamn, enamn, anamn, hash) VALUES ( '$namn', '$efternamn', '$anvandernamn', '$hash')";
                        $conn->query($sql);
                        echo "<p class=\"alert alert-success\" role='alert'>Allt fungerar, tack för att du registrerade dig</p>";
                    } else {
                        echo "<p class=\"alert alert-danger\" role='alert'>Lösenorden matchar inte, testa igen</p>";
                    }         
                }
                // Stäng av databasen 
                $conn->close();
            }

            ?>
        </main>
    </div>
</body>
</html>