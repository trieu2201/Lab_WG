<?php
require 'connect.php';
if(isset($_POST['del-submit'])){
    $del_prod = $_POST['del-prod-name'];
    if(!empty($del_prod)){
        $sqlfind = "SELECT * FROM products WHERE productname = '$del_prod'";
        $qry = mysqli_query($conn, $sqlfind) or die("Find Problems");
        $count = mysqli_num_rows($qry);
        if($count == 1){
            $sql = "DELETE FROM products WHERE productname='$del_prod'";
            if($conn->query($sql) == TRUE){
                echo "Delete Succesfull";
            }
            else {
                echo "Fail at {$sql}".$conn->error;
            }
            header("Location: http://localhost/trieu.com/index.php?page=product");
        }
        else{
            echo "Can't find product";
            header("Location: http://localhost/trieu.com/index.php?action=delete");
        }
    }
    else{
        echo "Input Information";
        header("Location: http://localhost/trieu.com/index.php?action=delete");
    }
}
?>