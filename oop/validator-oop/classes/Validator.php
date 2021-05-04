<?php
/*
* PHP version 7
* @category   
* @author     Viktor Larsson <viktor.larsson020@gmail.com>
* @license    PHP CC
*/

/**
 * 1. Skapa en klass
*  2. Skapa en konstruktor
*  3. Kontrollera att inga fält saknas
 * 4. Skapa funktioner för att validera
 * 4.1 En funktion för att validera username
 * 4.1 En funktion för att validera email
*  4.2 En funktion för att validera lösenord
*  5. Returnera en array med alla fel
 * 
 * 
 */

 class Validator {
     /* Användarnamnet måste vara 6-12 tecken långt, stora & små bokstäver samt siffror */
     /* Detaljerna på det vi använder */
private $errors = [];
private $data;

public function set($postdata)
{
    $this->data = $postdata;
}


public function validateUsername()
{
    // Hitta en bokstav i alfabetet
    $this->errors;
    if (!preg_match("/[a-zA-Z0-9]{6,12}/", $this->data["username"])) {
        $this->errors["username"][] = "<p>&#10005; Innehåller INTE a-z, A_Z, 0-9 </p> <br>";
    }
}
public function validatePassword()
{
    // Hitta en bokstav i alfabetet
    $this->errors;
    if (!preg_match("/[a-zåäö]/", $this->data["password"]) > 0) {
        $this->errors["password"][] = 'password must contain a least one lowercase character <br>';
    }
    if (!preg_match("/[A-ZÅÄÖ]/", $this->data["password"]) > 0) {
        $this->errors["password"][] = 'password must contain a least one uppercase character <br>';
    }
    if (!preg_match("/[0-9]/", $this->data["password"]) > 0) {
        $this->errors["password"][] = 'password must contain a least one alphanumeric <br>';
    }
    if (!preg_match("/[#%&¤_\*\-\+\@\!\?\(\)\[\]\$£€]/", $this->data["password"]) > 0) {
        $this->errors["password"][] = 'password must contain a least one special character <br>';
    }
    if (!preg_match("/^.{8,40}$/", $this->data["password"]) > 0) {
        $this->errors["password"][] = 'password must at least 8 character long <br>';
    }
}
public function validateEmail()
{
    // Hitta en bokstav i alfabetet
     $this->errors;
    if (!filter_var($this->data["email"], FILTER_VALIDATE_EMAIL)) {
        $this->errors["email"][] = "Invalid email format";
      }
}
public  function showErrors($type) {
    if (array_key_exists($type, $this->errors)) 
    {
        echo "<p>";
        foreach ($this->errors[$type] as $error) {
            echo $error;
        } 
        echo "</p>";
    }
    } 
 }