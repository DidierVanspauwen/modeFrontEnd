  
<link rel="stylesheet" href="login.css">
<?php
    $_SESSION['isIngelogd'] = true;
    $thisPage = $_SERVER['PHP_SELF'];
?>

<form action="<?php echo $thisPage; ?>" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <br>
    <input type="text" placeholder="Enter Username" name="uname" value="n.elbannouri@outlook.com" />
    <br>
    <label for="psw"><b>Password</b></label>
    <br>
    <input type="password" placeholder="Enter Password" name="psw" value="nadir" />  
    <br>

    <input type="hidden" name="frmLogin" value="frmLogin" />
    <br>
    <button type="submit">Login</button>
    <br> <br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
      <br>
    </label>
  </div>

  <div class="container">
    <span class="psw">Forgot <a href="#">password?</a></span>
    <br><br>
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>

    
