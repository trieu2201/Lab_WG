<?php
require 'connect.php';
if(isset($_POST['in-submit'])){
    $in_prod = $_POST['prod-name'];
    $in_price = $_POST['prod-price'];
    $in_manu = $_POST['prod-manu'];
    $in_color = $_POST['prod-color'];
    if(!empty($in_prod) && !empty($in_price) && !empty($in_manu) && !empty($in_color)){
        $sql = "INSERT INTO `products` (`productname`, `price`, `manufacturers`, `color`) VALUES ('$in_prod', '$in_price', '$in_manu', '$in_color')";
        if($conn->query($sql) == TRUE){
            echo "Insert Succesfull";
            header("Location: http://localhost/trieu.com/index.php?page=product");
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