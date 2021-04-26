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
        <!-- Ser till att vi kan ladda upp filer från vår dator -->
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label>Ange filen som du använder
                <input type="file" name="file">
            </label>
            <!-- Knapp för att skicka upp -->
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>