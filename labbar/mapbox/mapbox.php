<?php
$textDokument = fopen("textdokument.txt", "w");

fwrite($textDokument, "Longitude->Latitude->text");
fclose($textDokument);

?>