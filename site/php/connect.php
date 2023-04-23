<?php
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "muzyczniepl";

    $con = mysqli_connect($host, $db_user, $db_password, $db_name);


    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>