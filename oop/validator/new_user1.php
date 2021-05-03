<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
/* Ta emot data som skickas */
function showErrors($type) {
    echo "<p>";
    foreach ($errors[$type] as $error) {
        echo $error;
    } 
    echo "</p>";
}
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
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
            <label>Username <input type="text" name="username" required></label>
            <?php
            showErrors("username");
            ?>
            <label>Password <input type="password" name="password" required></label>
            <?php
            showErrors("password");
            ?>
            <label>Email <input type="email" name="email" required></label>
            <?php
            showErrors("email");
            ?>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>
<?php
/* Användarnamnet måste vara 6-12 tecken långt, stora & små bokstäver samt siffror */
$errors = [];
function validateUsername($data)
{
    // Hitta en bokstav i alfabetet
    global $errors;
    if (!preg_match("/[a-zA-Z0-9]{6,12}/", $data)) {
        $errors["username"][] = "<p>&#10005; Innehåller INTE a-z, A_Z, 0-9 </p> <br>";
    }
}
function validatePassword($data)
{
    // Hitta en bokstav i alfabetet
    global $errors;
    if (!preg_match("/[a-zåäö]/", $data) > 0) {
        $errors["password"][] = 'password must contain a least one lowercase character <br>';
    }
    if (!preg_match("/[A-ZÅÄÖ]/", $data) > 0) {
        $errors["password"][] = 'password must contain a least one uppercase character <br>';
    }
    if (!preg_match("/[0-9]/", $data) > 0) {
        $errors["password"][] = 'password must contain a least one alphanumeric <br>';
    }
    if (!preg_match("/[#%&¤_\*\-\+\@\!\?\(\)\[\]\$£€]/", $data) > 0) {
        $errors["password"][] = 'password must contain a least one special character <br>';
    }
    if (!preg_match("/^.{8,40}$/", $data) > 0) {
        $errors["password"][] = 'password must at least 8 character long <br>';
    }
}
function validateEmail()
{
    // Hitta en bokstav i alfabetet
    global $errors;
    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
        $errors["email"][] = "Invalid email format";
      }
}
?>
