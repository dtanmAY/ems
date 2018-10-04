<?php
require("dbconnect.php");
require("bootstrap.php");
require("bootstrapjavascript.php");
if (isset($_POST['submit']))
{
    $fname=trim($_POST['fname']);
    $pwd=trim($_POST['pwd']);

    $sql=mysqli_query($con, "DELETE FROM useradd WHERE fname='$fname' and pwd='$pwd'");
    if (mysqli_query($con, $sql))
    {
      echo "user deleted";

    }
    else {

      echo "invalid username or pwd";
    }

}
 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" method="post">
      <input type="text" class="form-control text-center" name="fname">
      <input type="password" class="form-control text-center" name="pwd">
      <button type="submit" class="btn btn-success" name="submit">submit</button>
    </form>

  </body>
</html>
