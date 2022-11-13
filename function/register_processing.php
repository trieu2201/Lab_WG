<?php
require '../db/connect.php';
if(isset($_POST['reg-submit'])){
    $reg_fullname = $_POST['reg-fullname'];
    $reg_username = $_POST['reg-username'];
    $reg_password = $_POST['reg-password'];
    if(!empty($reg_fullname) && !empty($reg_username) && !empty($reg_password)){
        $sql = "INSERT INTO `users` (`fullname`, `email`, `password`) VALUES ('$reg_fullname', '$reg_username', md5('$reg_password'))";

        if($conn->query($sql) == TRUE){
            echo "Insert Succesfull";
            header("Location: ../index.php");
        }
        else {
            echo "Fail at {$sql}".$conn->error;
        }

    }
    else{
        echo "Please input all information";
    }
}
?>

<a href="index.php">Turn Back</a>