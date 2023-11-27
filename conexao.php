<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "migseventoskids";

    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_error) { 
        echo"connect failed". $mysqli->connect_error;
        exit();
    } 

?>