<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login-trieu.com";

    $conn = new mysqli($host, $username, $password, $dbname);

    mysqli_select_db($conn, $dbname);
?>