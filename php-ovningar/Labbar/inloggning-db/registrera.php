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
            <?php if (isset($_SESSION["anamn"])) { ?>
                        <li class="nav-item"><a class="nav-link" href="./loggaUt.php">Logga ut</a></li>
                        <li class="nav-item"><a class="nav-link" href="./lista.php">Lista</a></li>
                        <li class="nav-item"><a class="nav-link" href="./skriva1.php">Skriva</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link " href="./loggaIn.php">Logga in</a></li> 
                        <li class="nav-item"><a class="nav-link active" href="./registrera.php">Registrera</a></li>
                        <li class="nav-item"><a class="nav-link " href="./sok1.php">Sök</a></li> 
                        <li class="nav-item"><a class="nav-link" href="./lasa1.php">Läsa</a></li>
                    <?php } ?>    
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
            $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
            $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
            $anamn= filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $lösen1 = filter_input(INPUT_POST, "lösen1", FILTER_SANITIZE_STRING);
            $lösen2 = filter_input(INPUT_POST, "lösen2", FILTER_SANITIZE_STRING);

            // Ett till steg av skydd
            if ($fnamn && $enamn && $anamn && $lösen1 && $lösen2) {
                // @TODO kontrollera att användarnamnet inte används flera gånger, att eposten fungerar och kräv mera av lösenordet

                $sql = "SELECT *  FROM user WHERE anamn = '$anamn'";
               $result = $conn->query($sql);

                if ($result->num_rows != 0) {
                    echo " <p class=\"alert alert-danger\" role='alert'> Användarnamnet är redan taget och upptaget</p>";
                } else {
                    // Kontrollera om lösenorden matchar med varandra 
                    if ($lösen1 == $lösen2) {
                        //Räkna ut hash 
                        $hash = password_hash($lösen1, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO user (fnamn, enamn, anamn, hash, antal) VALUES ( '$fnamn', '$enamn', '$anamn', '$hash', '$antal')";
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