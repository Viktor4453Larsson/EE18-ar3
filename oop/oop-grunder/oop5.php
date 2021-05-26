<?php
include "./includes/person.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Olika metoder i OOP</h1>
</body>
</html>
<?php
$person1 = new Person("Daniel", "Blue", "28");
echo $person1->getName();
?>
