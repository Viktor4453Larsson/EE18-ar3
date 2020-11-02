<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulär</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form action="#" method="POST">
        <h1>Stränghantering</h1>
        <label for="epost">Ange din e-post här</label>
        <input id="epost" class="form-control" type="epost" name="epost" required> 
        <button type="submit" class="btn btn-warning">Skicka</button>
        </form>
    </div>
</body>
<?php
$epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);


// Om vi har data 
if ($epost) {

    // Dela upp med explode()
    $namnEpost = "$epost";
    $delar = explode("@", $epost);

    //var_dump($delar);

    echo  "<p>Namndelen: $delar[0] </p>";  
    echo "<p>Domän: $delar[1] </p>";


    // Dela med substr
    $namnEpost = substr('viktor.larsson020@gmail.com', 0, 17); //Hårdkodat!
    $delar = substr('viktor.larsson020@gmail.com', 18, 27); //Hårdkodat!

    //var_dump("$namnEpost");
    //var_dump("$delar");

    echo " <p>Namndelen är $namnEpost, och domänen är $delar</p>";

    // Dela upp med substr() med hjälp av strpos
    // Hitta var @ tecknet är någonstans

    $position = strpos($namnEpost, "@");
    echo " <p>@ finns på position $position</p>";
    $namn = substr($epost, 0, $namn);
    echo " <p>Namndelen är $namnEpost</p>";
    $domän = substr('viktor.larsson020@gmail.com', $position + 1);
    echo " <p>Domänen är $domän</p>";


    // Räkna ut antalet tecken i mejlen (svårare)
    $längd = strlen($epost);
    echo " <p>Antalet tecken är $längd</p>";
    $domän = substr('viktor.larsson020@gmail.com', - ($längd - $position - 1));
    echo " <p>Domän är $domän</p>";

    // Kan vi använda strstr(svårare)

    $domän = substr(strstr($epost, '@'), 1);
    //alternativt: $domän = substr($domän, 1);
    echo " <p>Domän är $domän</p>";
    $namn = strstr($epost, "@", true);
    echo " <p>Namndelen är $namnEpost</p>";
}
?>
</html>