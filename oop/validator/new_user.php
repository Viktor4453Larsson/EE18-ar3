<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/

/* Ta emot data som skickas */
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);

/* Användarnamnet måste vara 6-12 tecken långt, stora & små bokstäver samt siffror */

$resultat = "";

function validateUsername($data)
{
    // Hitta en bokstav i alfabetet
    global $resultat;
    if (preg_match("/[a-zA-Z0-9]{6,12}/", $data)) {
        $resultat = "<p>&#10003; Innehåller 'en bokstav ur alfabetet'.</p>";
    } else {
        $resultat = "<p>&#10005; Innehåller INTE 'en bokstav ur alfabetet'.</p>";
    }
}
function validatePassword($data)
{
    // Hitta en bokstav i alfabetet
    if (preg_match("/[a-zA-Z0-9]{6,12}/", $data)) {
        echo "<p>&#10003; Innehåller 'en bokstav ur alfabetet'.</p>";
    } else {
        echo "<p>&#10005; Innehåller INTE 'en bokstav ur alfabetet'.</p>";
    }
}
function validateEmail()
{
    // Hitta en bokstav i alfabetet
    if (preg_match("/[a-zA-Z0-9]{6,12}/", $data)) {
        echo "<p>&#10003; Innehåller 'en bokstav ur alfabetet'.</p>";
    } else {
        echo "<p>&#10005; Innehåller INTE 'en bokstav ur alfabetet'.</p>";
    }
}
/* Kontrollera om data finns */
if ($username && $password && $email) {
    /* Kontrollera att alla variabler följer reglerna */
    validateUsername($username);
    
    validatePassword($password);
    
    validateEmail($email);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./css//style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Create new user</h1>
        <form action="#" method="post">
            <label>Username <input type="text" name="username"></label>
            <?php
            echo $resultat;
            ?>
            <label>Password <input type="password" name="password"></label>
            <label>Email <input type="email" name="email"></label>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>