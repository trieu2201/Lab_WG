<?php
  include_once("session.php");
?>

<?php
  include 'inc/header.php';
  include 'db/createdb.php';
  include 'db/createtable.php';
?>

<?php
  if(isset($_GET['page'])){
    $getvalue = $_GET['page'];
    if($getvalue == 'product/chuot'){
      include 'page/products/mouse.php';
    }
    elseif($getvalue == 'product/tainghe'){
      include 'page/products/headphone.php';
    }
    elseif($getvalue == 'product'){
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

<?php
  if(isset($_GET['action'])){
    $getvalue = $_GET['action'];
    if($getvalue == 'insert'){ 
?>    
<div>
  <div>Insert new Products</div>
  <form action="db/insertprod.php" method="post">
    <div class="form-outline mb-4">
      <label class="form-label" for="prod-name">Product Name</label>
      <input type="text" id="prod-name" name="prod-name"  class="form-control" />
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="prod-price">Price</label>
      <input type="text" id="prod-price" name="prod-price" class="form-control" />
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="prod-manu">Manufacturers</label>
      <input type="text" id="prod-manu" name="prod-manu" class="form-control" />
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="prod-color">Color</label>
      <input type="text" id="prod-color" name="prod-color" class="form-control" />
    </div>
    <br>
    <input type="submit" name="in-submit" id="Insert">
  </form>
</div>
<?php
    }
    elseif($getvalue == 'update'){
?>  
    <div>
      <form action="db/updateprod.php" method="post">
        <div class="form-outline mb-4">
          <label class="form-label" for="up-prod-name">Product Name</label>
          <input type="text" id="up-prod-name" name="up-prod-name"  class="form-control" />
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="up-prod-price">New Price</label>
          <input type="text" id="up-prod-price" name="up-prod-price"  class="form-control" />
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="up-prod-manu">New Manufacturer</label>
          <input type="text" id="up-prod-manu" name="up-prod-manu"  class="form-control" />
        </div><div class="form-outline mb-4">
          <label class="form-label" for="up-prod-color">New Color</label>
          <input type="text" id="up-prod-color" name="up-prod-color"  class="form-control" />
        </div>
        <input type="submit" name="up-submit" id="Update">
    </div>
      </form>
    </div>
<?php    
    }
    elseif($getvalue == 'delete'){
?>
      <div>
        <form action="db/deleteprod.php" method="post">
          <div class="form-outline mb-4">
            <label class="form-label" for="del-prod-name">Product Name</label>
            <input type="text" id="del-prod-name" name="del-prod-name"  class="form-control" />
          </div>
          <input type="submit" name="del-submit" id="Delete">  
        </form>
      </div>
<?php
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