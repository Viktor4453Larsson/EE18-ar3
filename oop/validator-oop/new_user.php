<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/
/* Ta emot data som skickas */
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "./classes/Validator.php";
$check = new Validator();
/* Här används klassen Validator på data som skickas */
if (isset($_POST["submit"])) {
    $check->set($_POST);
    $check->validateEmail();
    $check->validatePassword();
    $check->validateUsername();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Create new user</h1>
        <form action="#" method="post">
            <label>Username <input type="text" name="username" required></label>
            <?php
            $check->showErrors("username");
            ?>
            <label>Password <input type="password" name="password" required></label>
            <?php
            $check->showErrors("password");
            ?>
            <label>Email <input type="email" name="email" required></label>
            <?php
            $check->showErrors("email");
            ?>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>