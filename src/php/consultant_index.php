<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultant Login</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_index.css?v=1">
  </head>
  <body>
    <div class="form-div">
      <div class="image">
      </div>
      <div class="form-box">
        <div class="heading">
          <h1 class="title">Login</h1>
        </div>
        <form class="login" action="consultant_login.php" method="post">
          
        <?php if (isset($_GET['error'])) {?>
          <p class="error"><?php echo ($_GET['error']); ?></p>
          <?php } ?>
          
          <label class="input-label">User Name</label>
          <input type="text" class="input-field" name="username" placeholder="Enter Your User Name">
          <label class="input-label">Password</label>
          <input type="password" class="input-field" name="password" placeholder="Enter Your Password">
          <button type="submit" class="submit-btn">Login</button>
          <!--<span class="te">Don't have an account? <a href="consultant_create_account.php">Create account</a></span>-->
          <span class="cr">© 2022 SLBMTMS. All rights reserved.</span>
        </form>
      </div>
    </div>
  </body>
</html>
