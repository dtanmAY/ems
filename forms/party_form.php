<?php
require('../folder/bootstrap.php');
require('../folder/dbconnect.php');

if (isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $contno=$_POST['contno'];
  $query=mysqli_query($con, "INSERT INTO party(name, email, age, contno) VALUES('$name', '$email', '$age', '$contno')");
  if ($query)
   {
    // echo "<script>alert('Form Submited');</script>";
    header('Location: ../display.php');
  }else {
    echo "<script>alert('Some Error Occured');</script>";

  }

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../cssForms/party_form.css">
    <title></title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="party">
        <div class="header">
          <h3>PARTY FROM</h3>
        </div><br>

        <form class="" action="" method="post">
          <input type="text" name="name"  class="form-control" placeholder="Name" required="true"><br>
          <input type="email" name="email"  class="form-control" placeholder="Email" required="true"><br>
          <input type="int" name="age"  class="form-control" placeholder="Age" required="true"><br>
          <input type="int" name="contno"  class="form-control" placeholder="Contact Number" required="true"><br>
          <button type="submit" class="btn btn-success block-lg" name="submit">submit</button><br>
        </form>
      </div>
    </div>
  </body>
</html>
