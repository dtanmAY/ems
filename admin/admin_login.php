<?php
require("../folder/bootstrap.php");
require("../folder/dbconnect.php");
require("../folder/bootstrapjavascript.php");

session_start();
if(isset($_POST['login']))
{
      $uname=$_POST['uname'];
      $pwd=$_POST['pwd'];
      $sql="select * from admin_login where uname='$uname' and pwd='$pwd'";

      $rs=mysqli_query($con, $sql);
      if(mysqli_num_rows($rs) > 0)
      {
          $_SESSION['uname']=$uname;
          header("location: ../index.php");
      }
      else{
          print "<script>alert('invalid username or password. Please try again');</script>";
      }

}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheet/adminlogin.css">
    <title>AdminLogin</title>
    <link rel="icon" href="../images/icon.png">
  </head>
  <body class="body">
    <div id="global">
      <div class="col-sm-4 col-sm-offset-4">

       <form class=""  method="post">

        <h3>Admin Login</h3><br>

          <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" class="form-control" name="uname" placeholder="username" required="true">
      </div><br>

      <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
      <input type="password"  class="form-control" name="pwd"  placeholder="password" required="true">
    </div><br>



      <button type="submit" class="btn btn-success btn-lg btn-block"  name="login">log In</button><br>
      <a href="forgot.php" class='pull-right'>Forgot Password</a>
      <a href="../index.php" class='pull-left'>Home</span>
        </a>
      </form>

  </div>


    </div>



  </body>
</html>
