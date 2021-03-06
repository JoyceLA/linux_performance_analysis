<?php
 session_start(); 
// al volver al index si existe una session, esta sera destruida, existen formas de conservarlas como con un if(session_start()!= NULL). Pero por el momento para el ejemplo no es valido. 

//Sesion activa, redireccionar al panel
if (isset($_SESSION['username']) || isset($_SESSION['id_user'])){
  header("location: user_panel.php");
}
$alert = $_SESSION['alert'];
//Delete session variables when load page loggin
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['user']);
unset($_SESSION['email']);
 ?>
<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="../assets/styles.css" rel="stylesheet" media="screen">
     
    <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

      <form class="form-signin" action="../scripts/verify_account.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="User name or Email" name="username">
        <input type="password" class="input-block-level" placeholder="Password" name="pass">
         <div style="color:#FF0000">
           <?php echo $alert ?>
        </div>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" name="login_user" type="submit" value="sign">Sign in</button>
        <button class="btn btn-default btn-link pull-right" name="register" type="button" value="registin" onclick="location.href='user_register.php'">Register Account!</button>      
      </form>
      
    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>