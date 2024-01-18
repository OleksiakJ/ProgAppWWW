<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $baza = 'moja_strona';

    $link = new mysqli($dbhost, $dbuser, $dbpass, $baza);

    if ($link->connect_error) {
        die("Błąd połączenia z bazą danych: " . $link->connect_error);
    }
    $username  = 'admin';
    $password = 'admin';    
?>
