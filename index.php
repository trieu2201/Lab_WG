<?php
  include_once("session.php");
?>

<?php
  include 'inc/header.php';
?>


<?php
  if(isset($_GET['page'])){
    $getvalue = $_GET['page'];
    if($getvalue == 'product/chuot'){
      include 'page/products.php';
    }
    elseif($getvalue == 'home'){
      include 'page/home.php';
    }
    elseif($getvalue == 'login'){
      include 'page/login.php';
    }
    elseif($getvalue == 'register'){
      include 'page/register.php';
    }
    elseif($getvalue == 'logout'){
      include 'function/logout_processing.php';
    }
  } 
?>




  <div>
    <hr/>
  </div>

  <br>
<?php
  include 'inc/footer.php';
?>