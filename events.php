<?php require('folder/bootstrap.php');
session_start();
 ?>

<link rel="stylesheet" href="styles/header.css">
<?php require('header.php'); ?>

<div class="container-fluid global eventImage">
  <div class="row text-center">
    <h4 class="headTitle">Select a Category</h4><br>
    <div class="col-md-4 first">
      <a href="eventSubmit.php">
        <img src="images/birthday1.jpg" alt="birthdayEvent" width="300" height="250">
        <h4>Birthday</h4>

      </a>
    </div>
    <div class="col-md-4 second">
      <a href="eventSubmit.php">
        <img src="images/seminar.jpg" alt="seminarEvent" width="300" height="250">
        <h4>Seminar</h4>
      </a>


    </div>
    <div class="col-md-4 third">
      <a href="eventSubmit.php">
        <img src="images/marriageEvent.jpg" alt="weddingEvent" width="300" height="250">
        <h4>Wedding</h4>
      </a>

    </div>
  </div><br>
  <div class="row text-center">
    <div class="col-md-4 second">
      <a href="eventSubmit.php">
        <img src="images/conference.jpg" alt="conferenceEvent" width="300" height="250">
        <h4>Conference</h4>
      </a>
    </div>
    <div class="col-md-4 second">


    </div>
    <div class="col-md-4 third">

    </div>
  </div><br>

</div>
