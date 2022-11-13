<div>
  <form action="function/login_processing.php" method="post">
    <span>Username: </span>
    <input type="text" name="username" value="<?php if(isset($_COOKIE['uname'])) echo $_COOKIE['uname'];?>">
    <br>
    <span>Passwork: </span>
    <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>>
    <br>
    <div class="form-check">
      <label class="form-check-lable text-muted">
        <input type="checkbox" class="form-check-input" name="remember" value="1">
        Keep me signed in
      </label>
    </div>
    <input type="submit" name="submit" id="Login">
  </form>
  <a href="page/register.php">Haven't got account yet</a>
</div>