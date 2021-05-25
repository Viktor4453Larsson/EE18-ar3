<?php
include "includes/person.inc.php";
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
    <h1>Hej här tränar jag på oop</h1>
</body>
</html>
<?php
$person1 = new Person();
$person1->setName("Daniel");
echo $person1->name;

$person2 = new Person();
$person2->setName("Timmy");
echo $person2->name;
echo $person2->name;
?>
