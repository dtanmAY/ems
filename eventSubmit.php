<?php
require('folder/dbconnect.php');
session_start();
if(!isset($_SESSION['email'])){
  $_SESSION['event_token'] = "event_token";
  echo "<script>alert('You are unautorised, Please Login First.');</script>";
  echo "<script>location.href='user_login.php';</script>";

}

if (isset($_POST['submit']))
{
  $event_name=$_POST['event_name'];
  $event_address=$_POST['event_address'];
  $event_place=$_POST['event_place'];
  $event_from=$_POST['date_from'];
  $event_to=$_POST['date_to'];
  $user_email = $_SESSION['email'];



  $query = mysqli_query($con, "SELECT event_id FROM category ORDER BY event_id DESC LIMIT 1;");
  $array = mysqli_fetch_array($query);
  $incremented = explode("_",$array['event_id']);
  $incremented = $incremented[1]+1;
  $event_id = "E_".$incremented;

  // print_r($_POST);  die();

  $query=mysqli_query($con, "INSERT INTO category(event_id, user_email, event_name, event_from, event_to, event_address, event_place) VALUES('$event_id','$user_email','$event_name', '$event_from', '$event_to', '$event_address', '$event_place')");
  if($query)
  {
    echo"<script>alert('Event Placed Successfully');</script>";
    header('Location:events.php');
  }else {
    echo"<script>alert('Something Went Wrong');</script>";
  }
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <?php require('folder/bootstrap.php'); ?>

  <style media="screen">
    *{
      margin: 0px;
      padding: 0px;
    }
    .global{
      margin: 0 auto;
      width: 750px;
      height: auto;
      border: 1px solid #ef9d9d;
      padding: 20px;
      margin-top: 100px;
    }
    .btn-success{
      transition: .5s;
    }
    .btn-success:hover{
      color: #fff;
      background-color: #000
    }
  </style>

  <body>
    <div class="contanier-fluid global">
      <h4>Event Form</h4>
      <form class="" action="" method="post">

        <select class="form-control" name="event_name" required="true">
          <option>Select event</option>
          <option>Birthday Party</option>
          <option>Seminar</option>
          <option>Weddings</option>

        </select><br>
        <div class="row">
          <div class="col-md-6">
            From:  <input type="date" name="date_from" class="form-control" placeholder="From">
          </div>
          <div class="col-md-6">
            To: <input type="date" name="date_to" class="form-control" placeholder="To">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="event_address" class="form-control" placeholder="Address" required="true">
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-6">
            <input type="text" name="event_place"  class="form-control" placeholder="Place" required="true">
          </div>
          <div class="col-md-6">

          </div>

        </div><br>

        <button type="submit" name="submit" class="btn btn-success block lg">Submit</button>
      </form>
    </div>
  </body>
</html>
