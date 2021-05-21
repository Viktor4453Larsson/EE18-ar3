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
protected $first = "Viktor";
/* Efternamn */
private $last = "Larsson"; 
/* Ålder */
private $age = "18";

}
/* Detta är en klass */
class Pet extends Person {
/* Den som  äger djuret */
public function owner(){
    $a = $this->first;
    return $a;
}
}
/* Detta är ett objekt som vi använder */
$pet01 = new Pet();
echo $pet01->owner();
?>
