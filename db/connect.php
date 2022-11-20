<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trieu_db";

    $conn = new mysqli($host, $username, $password, $dbname);

    mysqli_select_db($conn, $dbname);
?>