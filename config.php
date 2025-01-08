<?php
    $host = "localhost";
    $user = "root";                     
    $pass = "Seng@123";                                  
    $db = "movietheatredb";
    $port = 3306;
    $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    $link = new mysqli($host, $user, $pass, $db , $port);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
?>