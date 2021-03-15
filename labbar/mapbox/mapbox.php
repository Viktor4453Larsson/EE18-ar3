<?php

// Skicka all text till BackEnd systemet

// Tar emot text
$texten = filter_input(INPUT_POST, "texten", FILTER_SANITIZE_STRING);

// Spara filen istället som en tsv fil
$textDokument = fopen("textdokument.txt", "a");

fwrite($textDokument, $texten);
fclose($textDokument);


?>