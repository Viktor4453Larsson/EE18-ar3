
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slumpa fram sex ordspråk</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="ordsprak.css">
</head>
<body>
<?php
    // Skapa en array med tio ordspråk
    $ordsprak[] = "Blyga pojkar får aldrig kyssa vackra flickor.";
    $ordsprak[] = "Den som gapar över mycket mister ofta hela stycket.";
    $ordsprak[] = "Nöden haver ingen lag";
    $ordsprak[] = "Tala är silver tiga är guld. (ibland är det bättre att vara tyst än att prata)";
    $ordsprak[] = "Nöden haver ingen lag";
    $ordsprak[] = "Ju fler kockar desto sämre soppa";
    $ordsprak[] = "Den som gapar över mycket mister ofta hela stycket.";
    $ordsprak[] = "Bättre en fågel i handen än tio i skogen.";
    $ordsprak[] = "Borta bra, men hemma bäst";
    $ordsprak[] = "Alla vägar bär till Rom";
 

    // Slumpa fram ett tal mellan 0 och 9 med funktionen rand()
    echo " <ol> ";
    for ($i = 0; $i < 6; $i++) {
        $index = rand(0, 9); 
        echo " <li>$ordsprak[$index]</li> "; 
        

        
    }
    echo " </ol> ";

   $tagna = [];
   if (!in_array($index, $tagna)) {
    echo " <p>$ordsprak[$index]</p> ";

    // Spara nu talet som kastats
    $tagna[] = $index;
   } else

   $i--;
    // Skriv ut ordspråket 
    print_r($tagna);
    
?>
</body>
</html>