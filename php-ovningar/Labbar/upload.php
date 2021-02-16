<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ladda upp filer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Ladda upp filer</h1>
        <!-- Här kan vi sätta gränser, och olika former av restruktioner -->
        <?php
        if (isset($_POST['submit'])) {
            /* Här tar vi emot filen om knappen är tryckt */
            $file = $_FILES['file'];
            var_dump($file);


            /* Läser av alla värden på filerna med kommandon */
            $fileName = $file['name'];

            $fileName = $file["name"];
            $fileSize = $file["siza"];
            $fileType = $file["type"];
            $fileTempName = $file["tmp_name"];
            $error = $file["error"];

            $fileExt = explode(".", $fileName);
            
            /* Tillåtna filtyper */
            $allowed = ["jpeg", "jpg", "png", "gif"];

            $delar = explode("/", $fileType);
            $imageType = $delar[1];


            /* Tillåter vi filen? Ex. jpeg, jpg, png och gif */
            if (in_array($imageType, $allowed)) {
                if ($error === 0) {
                    /* Gränsen för filen som laddas upp */
                    if ($fileSize <= 10000000) {
                        /* Ge alla filer ett unikt id */
                        $fileNameNew = uniqid("", true) . ".$imageType";
                        /* Var vi vill att vår fil ska komma in någonstans */
                        $fileDestination = "bilder/$fileNameNew";
                        /* Flytta filen in i vår mapp */
                        move_uploaded_file($fileTempName, $fileDestination);
                    } else {
                        echo "<p>Filen du har försökt ladda upp är för stor</p>";
                    }
                   
                } else {
                    echo "<p>Din fil fick ett problem</p>";
                }
            } else {
                echo "<p>Filtypen som du försökt ladda upp är inte tillåten, testa med jpeg, jpg, png eller gif</p>";
            }

        }
        ?>
    </div>
</body>
</html>