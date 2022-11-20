<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trieu_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS products (
  pid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  productname VARCHAR(100) NOT NULL,
  price VARCHAR(30) NOT NULL,
  manufacturers VARCHAR(30) NOT NULL,
  color VARCHAR(30) NOT NULL
)";

// sql to create table
$sql1 = "CREATE TABLE IF NOT EXISTS users (
  pid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  usernames VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  fullname VARCHAR(30) NOT NULL,
  userlevel VARCHAR(30) NOT NULL
)";

$conn->query($sql);
$conn->query($sql1);

mysqli_close($conn);
?>