<?php
    require '../db/connect.php';
    if(isset($_POST['search-submit'])){
        $prodname = $_POST['search-name'];
        $sql = "SELECT * FROM products where productname like '$prodname'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  


        if ($count == 1){
            echo "have";
        }
    }
?>