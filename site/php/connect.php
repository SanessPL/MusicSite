<?php
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "muzyczniepl";

    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>