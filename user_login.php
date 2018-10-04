<?php require('folder/dbconnect.php');

session_start();
$msg = "";
if (isset($_POST['submit']))
{

  $email=mysqli_real_escape_string($con, $_POST['email']);
  $pwd=mysqli_real_escape_string($con, $_POST['pwd']);
  $query=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM user_profiles WHERE email='$email' and pwd='$pwd'"));
  if ($query['email'])
  {

      $_SESSION['email']=$email;
      $_SESSION['pwd']=$pwd;

      if(isset($_SESSION['event_token']) && $_SESSION['event_token']=='event_token'){
         header('Location: eventSubmit.php');
      }else{
        header('Location: index.php');
      }




  }else {

      $msg = "Incorrect Email-ID Or Password";
  }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user__login</title>
  </head>
  <?php require('folder/bootstrap.php'); ?>
  <style media="screen">
    *{
      margin: 0px;
      padding: 0px;
    }
    .global{
      width: 500px;
      height: auto;
      margin: 0 auto;
      margin-top: 100px;
    }
  </style>
  <body>
    <div class="container-fluid global">
      <h3 >User Login</h3>
      <span class="text-danger"><?php echo $msg; ?></span><br><br>
      <form class="" action="" method="post">
        <input type="text" name="email" class="form-control" placeholder="Email" required="true"><br>
        <input type="password" name="pwd" class="form-control" placeholder="Password" required="true"><br>
        <button type="submit" name="submit" class="btn btn-success btn-block">logIn</button><br>
      </form>
        <p>Not Registered ? <a href="create_user.php">Create Account</a>  </p>
    </div>
  </body>
</html>
