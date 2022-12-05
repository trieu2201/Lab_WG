<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trieu_db";

    $conn = new mysqli($host, $username, $password, $dbname);

    mysqli_select_db($conn, $dbname);

    $sql = "SELECT pid, productname, price, manufacturers, color FROM products";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Name</th><th>Manufacturers</th><th>Color</th><th>Price</th></tr>";  
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["pid"]."</td><td>".$row["productname"]."</td><td>".$row["manufacturers"]."</td><td>".$row["color"]."</td><td>".$row["price"]."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
?>
<?php
if (isset($_SESSION['usernames']) && isset($_SESSION['userlevel'])) { 
?>

<div>
  <a class="btn btn-primary" href="http://localhost/trieu.com/index.php?action=insert" role="button">Insert</a>
  <a class="btn btn-primary" href="http://localhost/trieu.com/index.php?action=update" role="button">Update</a>
  <a class="btn btn-primary" href="http://localhost/trieu.com/index.php?action=delete" role="button">Delete</a>
</div>

<?php } ?>
