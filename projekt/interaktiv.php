<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interaktiv berättelse</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="./barattelse.css">
</head>
<body>
    <div class="kontainer">
        <?php
        $chatt = "";
        $fråga = 0;

        // Finns data?
        if (isset($_POST["svarsruta"], $_POST["chatt"], $_POST["fråga"])) {

            // Ta emot data från formuläret
            $dinaSvar = $_POST["svarsruta"];
            $chatt = $_POST["chatt"];
            $fråga = $_POST["fråga"];
            

            // Frågor och svar
            $chatt .= "Du> $dinaSvar\n";

            switch ($fråga) {
                // Första fråga och svaren
                case 1:
                    if ($dinaSvar == "träsk" || $dinaSvar == "TRÄSK" || $dinaSvar == "Träsk") {
                        $chatt .= "Berättaröst> Du går vidare i ett träsk det ser klart ofarligt ut till en början men två krokodiler kommer och anfaller dig från vardera sida. Du kan välja mellan att fly eller slå tillbaka, skriv fly eller slå. \n";
                        $fråga = 2;
                    } elseif ($dinaSvar == "skog" || $dinaSvar == "SKOG" || $dinaSvar == "sKog") {
                        $chatt .= "Du väljer att gå in mot en djupare skog. Det är tungt och jobbigt men inga större faror verkar uppstå för din del. Det börjar bli natt, du måste välja mellan att fortsätta eller vila men riskera att möta på faror. Välj mellan vila eller fortsätta. \n";
                        $fråga = 3;
                    } else {
                        $chatt .= "Berättaröst> Ditt svar kan inte läsas av! Försök igen. \n";
                        $fråga = 4;
                    }
                    break;

                    // Andra frågan och svaren
                case 2:
                    if ($dinaSvar == "fly" || $dinaSvar == "FLY" || $dinaSvar == "Fly") {
                        $chatt .= "Du snubblar tragiskt och dör här. Tappat liv!\n";
                        $fråga = 5;
                    } elseif ($dinaSvar == "slå" || $dinaSvar == "SLÅ" || 
                    $dinaSvar == "Slå") {
                        $chatt .= " Du slår tillbaka och lyckas fly men du förblöder av ett bett du inte lagt märke till. Tappat liv!\n";
                        $fråga = 5;
                    }
                    break;

                case 3:
                    if ($dinaSvar == "vila" || $dinaSvar == "VILA" || $dinaSvar == "Vila") {
                        $chatt .= "Du vilar har det varmt och skönt sitter och njuter av dina stjärnor. Men när du väl sover. Hamnar du olyckligt mellan ett gräl av en noshörning och ett lejon. Du dör av panik och skador.\n";
                    } elseif ($dinaSvar == "slå" || $dinaSvar == "SLÅ" || 
                    $dinaSvar == "fortsätt" || "Fortsätt" || "FORTSÄTT") {
                        $chatt .= "Du fortsätter, du är på din yttersta mentala gräns men du hittar ett hem. Och där inne står din bästa vän Alex som kan ta dig hem. \n";
                    } elseif ($dinaSvar == "slå" || $dinaSvar == "SLÅ" || 
                    $dinaSvar == "fortsätt" || "Fortsätt" || "FORTSÄTT") 
                    $chatt .= "Du fortsätter, du är på din yttersta mentala gräns men du hittar ett hem. Och där inne står din bästa vän Alex som kan ta dig hem. \n";
                break;
                }                
            }
         else {
            $fråga = 1;
            $chatt = "Bott> Hej Sebastian Arnold! Du befinner dig i Amazon djungeln, du vet inte varför du gör det men du har en yxa i din hand och du kan välja att gå mot ett träsk till höger eller en tätare skog till vänster. I vilket fall vet du ej vad som händer du har tre liv på dig. Ditt första val blir mellan att gå in till ett träsk eller en skog\n";
        }
        ?>        
        <form action="#" method="POST">
            <textarea name="chatt" id="svarsruta" cols="30" rows="10" readonly><?php echo $chatt; ?></textarea>
            <input id="svarsruta" class="form-control" type="text" name="svarsruta">
            <input type="hidden" name="fråga" value="<?php echo $fråga; ?>">
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>
    </div>
</body>
</html>