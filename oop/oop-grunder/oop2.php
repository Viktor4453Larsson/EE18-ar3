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
/* Detta är en klass */
class Person {
/* Förnamn */
private $first = "Viktor";
/* Efternamn */
private $last = "Larsson"; 
/* Ålder */
private $age = "18";
public function owner()
{
    $a = $this->first;
    return $a;
}
public function enamn()
{
    $b = $this->last;
    return $b;
}
public function alder()
{
    $c = $this->age;
    return $c;
}
}
/* Detta är en klass */
class Pet {
/* Den som  äger djuret */
public function owner()
{
    $a = "hej där!";
    return $a;
}
}
/* Detta är ett objekt som vi använder */
$pet01 = new Person();
echo $pet01->owner();
echo "<br></br>";
$pet02 = new Person();
echo $pet02->enamn();
echo "<br></br>";
$pet03 = new Person();
echo $pet03->alder();
?>
