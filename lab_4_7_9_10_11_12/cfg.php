<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dppass = '';
    $db = 'moja_strona';

    $link = mysqli_connect($dbhost,$dbuser,$dppass,$db);
    if(!$link)echo '<b>przerwanie połączenia</b>';

    $login = "admin";
    $pass = "admin";
?> 