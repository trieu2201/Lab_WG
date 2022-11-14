<?php
    session_start();
    require '../db/connect.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember = $_POST['remember'];
        if($remember == 1){
            setcookie('uname', $username, time()+60*60*24*10, "/");
            setcookie('password', $password, time()+60*60*24*10, "/");
        }
        if(!empty($username) && !empty($password)){
            $sqlLogin = "SELECT * FROM users WHERE email = '$username' && password = '$password'";
            $qry = mysqli_query($conn, $sqlLogin) or die("Login problem");
            $count = mysqli_num_rows($qry);
            if($count == 1){
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['user'] = $username;
                header("Location: ../index.php");
            }
            else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("JavaScript Alert Box by PHP")';  
                echo '</script>';  
                header("Location: http://localhost/trieu.com/index.php?page=login");
            }
        }
        else{
            echo "Please input all information";
        }
    }
?>