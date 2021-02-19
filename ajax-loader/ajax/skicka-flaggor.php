<?php
/* Backend sidan som ska svara */
session_start();
if (!isset($_SESSION["index"])) {
    $_SESSION["index"] = 2;
} else {
    $_SESSION["index"] += 6;
}


$allaFlaggor = scandir("../flags");

/* Vilken flagga som vi använder */

/* Skriv ut en flagga */


for ($i = 0; $i < 6 ; $i++) { 
    echo "<img src=\"./flags/{$allaFlaggor["index" + $i]}\" alt=\"\">";
}