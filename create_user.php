<?php
require('folder/dbconnect.php');
session_start();
if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  $re_pwd=$_POST['re_pwd'];
  $query=mysqli_query($con, "INSERT INTO user_profiles(email, pwd, re_pwd) VALUES('$email', '$pwd', '$re_pwd')");
  if($query){
    $_SESSION['email']=$email;
    $_SESSION['pwd']=$pwd;

    header('Location:index.php');
  }else {
    echo "<script>alert('Something went wrong');</script>";
  }
}
mysqli_close($con);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
  require('folder/bootstrap.php');
   ?>
<style media="screen">
  *{
    margin: 0px;
    padding: 0px;
  }
  .container{
    width: 500px;
    height: auto;
    margin-top: 20px;

  }
</style>
  <body>
    <div class="container">
      <h3>Create Your Account</h3><br>
      <form class="" action="" method="post">
        <input type="email" name="email" class="form-control" placeholder="Email" required="true"><br>
        <input type="password" name="pwd" class="form-control" placeholder="Password" required="true"><br>
        <input type="password" name="re_pwd" class="form-control" placeholder="Confirm Password" required="true"><br>
        <button type="submit" class="btn btn-success block-lg" name="submit">Register</button><br>
      </form>
      <br>
        <p>By clicking "Register" you agree to our
        <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
      </p>
      <p>Already have an account? <a href="user_login.php">Login</a> </p>
    </div>
  </body>
</html>
