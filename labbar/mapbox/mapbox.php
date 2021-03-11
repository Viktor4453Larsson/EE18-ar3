<?php
// Tar emot text
$texten = filter_input(INPUT_POST, "texten", FILTER_SANITIZE_STRING);

$textDokument = fopen("textdokument.txt", "w");

fwrite($textDokument, $texten);
fclose($textDokument);

?>