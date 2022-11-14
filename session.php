<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Locaion: page/login.php");
    }
?>