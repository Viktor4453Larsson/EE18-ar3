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
                        <li class="nav-item anamn"><?php
                        echo $_SESSION["anamn"];
                        ?></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link active" href="./loggaIn.php">Logga in</a></li> 
                        <li class="nav-item"><a class="nav-link" href="./registrera.php">Registrera</a></li>
                    <?php } ?>       
            </ul>
        </nav>
        </header>
        <main>
            <form action="#" method="POST">
                <label>Användarnamn <input type="text" name="anamn" required></label>
                <label>Lösenord <input type="password" name="lösen1" required></label>
                <button type="submit">Logga In</button>
            </form>
            <?php
            // Filtrera och skydda mot framtida hot
            $anvandernamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $lösenord1 = filter_input(INPUT_POST, "lösen1", FILTER_SANITIZE_STRING);

            //var_dump($anvandernamn, $lösenord1);


            // Ett till steg av skydd
            if ($anvandernamn && $lösenord1) {
                // Finns det en användare
                $sql = "SELECT *  FROM användare WHERE anamn LIKE '$anvandernamn'";
                $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                    echo " <p class=\"alert alert-danger\" role='alert'> Användarnamnet är redan taget och upptaget</p>";
                } else {
                    // Få ut hash:et isåfall
                    $rad = $result->fetch_assoc();
                    $hash = $rad['hash'];
                    //Kontrollera lösenordet
                    if (password_verify($lösenord1, $hash)) {
                        //Inloggad  
                        echo " <p class=\"alert alert-success\" role='alert'>Lösenordet är korrekt!</p>";
                        $_SESSION["anamn"] = $anvandernamn;

                        // Hoppa till en sida som heter lista
                        header("Location: ./lista.php");
                    } else {
                        //Fel 
                        echo " <p class=\"alert alert-danger\" role='alert'>Lösenordet stämmer inte!</p>";
                    }
                }
            }


            ?>
        </main>
    </div>
</body>
</html>