<?php
require 'connect.php';
if(isset($_POST['up-submit'])){
    $up_prod = $_POST['up-prod-name'];
    $up_price = $_POST['up-prod-price'];
    $up_manu = $_POST['up-prod-manu'];
    $up_color = $_POST['up-prod-color'];
    
    if(!empty($up_prod)){
        $sqlfind = "SELECT * FROM products WHERE productname = '$up_prod'";
        $qry = mysqli_query($conn, $sqlfind) or die("Find Problems");
        $count = mysqli_num_rows($qry);
        if($count == 1){
            if(!empty($up_price)){
                $sql = "UPDATE products SET `price` = '$up_price' WHERE `productname` = '$up_prod'";
                if($conn->query($sql) == TRUE){
                    echo "Insert Succesfull";
                }
                else {
                    echo "Fail at {$sql}".$conn->error;
                }
            }
            if(!empty($up_manu)){
                $sql = "UPDATE products SET `manufacturers` = '$up_manu' WHERE `productname` = '$up_prod'";
                if($conn->query($sql) == TRUE){
                    echo "Insert Succesfull";
                }
                else {
                    echo "Fail at {$sql}".$conn->error;
                }
            }
            if(!empty($up_color)){
                $sql = "UPDATE products SET `color` = '$up_color' WHERE `productname` = '$up_prod'";
                if($conn->query($sql) == TRUE){
                    echo "Insert Succesfull";
                }
                else {
                    echo "Fail at {$sql}".$conn->error;
                }
            }
            header("Location: http://localhost/trieu.com/index.php?page=product");
        }
        else{
            echo "Can't find product";
            header("Location: http://localhost/trieu.com/index.php?action=update");
        }
    }

    
}
?>