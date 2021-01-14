<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/

session_start();
// Man loggar ut genom att ta bort session
session_destroy();

// Hoppa till sidan logga in
header("Location: ./loggaIn.php");
