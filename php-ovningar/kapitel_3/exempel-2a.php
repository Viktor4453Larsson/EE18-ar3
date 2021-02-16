<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php /** 
     *  Laugh on Monday, laugh for danger.
   * 
     * Laugh on Tuesday, kiss a stranger.
    * Laugh on Wednesday, laugh for a letter.
    *Laugh on Thursday, something better.
    *Laugh on Friday, laugh for sorrow.
    *Laugh on Saturday, joy tomorrow.
     
    */

    // Veckodag på engelska 

    $idag = date("l");

  /*  if ($idag == "Monday") {
        echo " <p></p> ";
    } elseif ($idag == "Tuseday") {
        echo " <p></p> "; 
    } 
    } elseif ($idag == "Wednesday") {
        echo " <p></p> "; 
    } 
    } elseif ($idag == "Thursday") {
        echo " <p></p> "; 
    } 
    } elseif ($idag == "Friday") {
        echo " <p></p> "; 
    } 
    } elseif ($idag == "Saturday") {
        echo " <p></p> "; 
    }  
 } elseif ($idag == "Sunday") {
        echo " <p></p> "; 
    } */
    

    switch ($idag) {
        case 'Monday':
           echo " <p>Laugh on Monday, laugh for danger</p> ";
            break;
        case 'Tuseday':
           echo " <p>Laugh on Tuesday, kiss a stranger.</p> ";
            break;
        case 'Wednesday':
           echo " <p>Laugh on Wednesday, laugh for a letter.</p> ";
            break;
        case 'Thursday':
           echo " <p>Laugh on Thursday, something better.</p> ";
            break;
        case 'Friday':
           echo " <p>Laugh on Friday, laugh for sorrow.</p> ";
            break;
        case 'Saturday':
           echo " <p>Laugh on Saturday, joy tomorrow.</p> ";
            break;
        case 'Sunday':
           echo " <p></p> ";
            break;
        
        default:
            echo " <p>No day selected!</p> ";
            break;
    }
   

    // Hur upprepar man saker kod?

    for ( $i = 0; $i  < 11; $i ++ ) { 
        echo " <p>Hej $i</p> ";
    }
    ?>
</body>
</html>