<?php require('folder/dbconnect.php');
session_start();
$email = $_SESSION['email'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/header.css">

    <?php   require('folder/bootstrap.php'); ?>
  </head>

  <body>
      <?php require('header.php'); ?>
      <div class="container">
        <table class="table table-hover table-striped">
          <tr>
            <th>#</th>
            <th>Events</th>
              <th>From</th>
                <th>To</th>
                  <th>Event Address</th>
                    <th>Event Place</th>
                      <th>Booking Date & Time</th>
          </tr>
          <?php
            $query = mysqli_query($con, "SELECT * FROM category WHERE user_email='$email'");
            if(mysqli_num_rows($query) < 1){
              echo "<tr><td class='text-center' colspan='6'>Sorry No Event added.</td></tr>";
            }
            $i = 0;
            while ($a = mysqli_fetch_array($query)) {
              $i+=1;
              echo "<tr>
              <td>$i</td>
                  <td>".$a['event_name']."</td>
                      <td>".date('dS M Y',strtotime($a['event_from']))."</td>
                          <td>".date('dS M Y',strtotime($a['event_to']))."</td>
                              <td>".$a['event_address']."</td>
                                  <td>".$a['event_place']."</td>
                                      <td>".date('dS M Y, h:i A ',strtotime($a['created_at']))."</td>
              </tr>";
            }
           ?>
        </table>

      </div>
  </body>
</html>
