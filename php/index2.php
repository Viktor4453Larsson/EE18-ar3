<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p>
    // Mindre än större än 

    <?php
    4 <  5 ; 
    ?>

    // IF-satser i PHP

    <?php
    $saker = 7 ; // Sätt det här till ett nummer mindre än 5!

    if ($saker < 10) {
        echo "Så får du 10% rabbat!" ;
    }
    else{
        echo "Du får 5% rabbat!" ;
    }
    ?>
    // Skriv din IF/Else sats här!
    <?php
    if (3 < 2) {
        echo "Det här uttalandet är sant!" ;
    }
    else{
        echo "Det här uttalandet är falskt!" ;
    }
    ?>

    // Tillbakablick

    <?php
    if (1<2) {
echo "if" ;
    }
    elseif (2<3) {
    echo "elseif" ;
    }
    else 
    {
        echo "else" ;
    }
    ?>

    // Switches

    <?php
    switch (2) {
        case '0':
          echo 'Variabeln är 0' ;
            break;
    
    case 1:
        echo 'Variabeln är 1' ;
          break;
  
  case 2:
    echo 'Variabeln är 2' ;
      break;
      default: 
      echo "Värdet är inte 0,1 eller 2" ;
}
    ?>

    // Switchar och index

    <?php
    $frukt = "Apelsin" ; // Variabel för frukt.
    
    switch ($frukt) {
      case  "Apelsin": 
        echo "Smarigt." ;
      break;
      default:
        echo "Default" ;
      break;
    }
    ?>

    <?php
    $i = 5 ; 
    
    switch ($i) {
        case 0: 
            echo '$i är 0. ' ;
        break; 
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "$i är någonstans mellan 1 och 5. " ;
        break; 
        case 6:
        case 7:
            echo '$i är alltingen 7 eller 8. ';
        break; 
        default: 
        echo "Jag vet inte hur mycket \$i är. ";
    }
 endswitch; 
    ?>
</p>
</body>
</html>