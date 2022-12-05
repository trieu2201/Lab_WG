<?php
  include_once("../session.php");
  include '../inc/header.php';
?>

<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trieu_db";

    $conn = new mysqli($host, $username, $password, $dbname);

    if(isset($_POST['search-submit'])){
    $prodname = $_POST['search-name'];
    $sql = "SELECT * FROM products WHERE productname LIKE '%".$prodname."%'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
      echo "<table><tr><th>Name</th><th>Manufacturers</th><th>Color</th><th>Price</th></tr>";  
      while($row=mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>".$row["productname"]."</td>
                <td>".$row["manufacturers"]."</td>
                <td>".$row["color"]."</td>
                <td>".$row["price"]."</td>
              </tr>";
      }
      echo "</table>";
    }
    else{
      echo "<tr><td>0 result found</td></tr>";
    }
  }
?>

<?php
  include '../inc/footer.php';
?>
