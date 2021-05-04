<?php

/* Detta är en modul som kan återanvändas */
class User {

    /* Alla våra metoder */
    /* De substantiv det har */
    public $username = 'ryu';
    public $email = "ryuninja@google.com";

    public function addFriend(){
        return "$this->email added a new friend";
    }

}

/* Ett nytt objekt */
    $userOne = new User();
    $userTwo = new User();

    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';


?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OOP Introduktion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>