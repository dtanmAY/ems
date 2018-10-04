<?php
require('folder/dbconnect.php');
session_start();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/animate.css">
    <link rel="stylesheet" href="styles/header.css">
    <title>index_page</title>

  </head>
  <?php
  require('folder/bootstrap.php');
   ?>

  <body>
    <?php require('header.php'); ?>


    <div id="container-fluid world">

       <div id="container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

          </ol>


          <div class="carousel-inner">
            <div class="item active">
              <div class="carousel-content">
                <img src="images/birthday.jpg" style="width:100%; height:500px;">
                  <h2 class="zoomIn">Birthday</h2>
              </div>
            </div>

            <div class="item">
              <div class="carousel-content">
              <img src="images/corporate.jpg" style="width:100%; height:500px;" >
              <h2 class="zoomIn">Corporate Parties</h2>

              </div>
            </div>

            <div class="item">
              <div class="carousel-content">
              <img src="images/seminar1.jpg" style="width:100%; height:500px;" >
              <h2 class="zoomIn">SEMINAR</h2>

            </div>
            </div>


          </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="welcome">
        <div class="header">
          <h2>Welcome to Dvents</h2>
          <p>From Wedding Functions to Birthday Parties or Corporate Events to Musical Functions,<br>
We offer full range of Events Management Services that scale to your needs & budget.</p>
        </div>
      </div>

      <div class="about">
        <div class="row text-center">
          <div class="col-md-4 services">
            <div class="first">
              <h4>SERVICES</h4>
            </div><br>
              <p>Planning is the very first step of organizinng any event and Dvets implement theis stage </p>
                <button type="button" class="btn btn-success block-lg" data-toggle="modal" data-target="#myModal">Read More</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">SERVICES</h4>
                      </div>
                      <div class="modal-body">
                        <h2>1. Planning</h2><br>
                        <p class="servicePlan">Planning is the very first step of organizinng any event and Dvents implement theis stage efficiently and effectively. We always give a perfect touch to an event by finalizing a unique concept and then our spcialists shape that concept into a remarkable structure.</p><br>

                        <h2>2. Production</h2><br>
                        <p class="servicePlan">Dvents brings planning phase to execution by shaping the world class structures proficiently. The company always makes sure that client's event should be valued vastly and for that we beautify the event by utilizing all upgraded applications with effective communication. </p><br>

                        <h2>3. Management</h2><br>
                        <p class="servicePlan">Management plays a prominent role in the success of any event and Dvent Events absolutely believes this proclamation. In order to ensure the smooth running of an event, we stringently take care of the arrangements such as security assistance, manpower, infrastructure support, photography and interviews.</p><br>

                        <h2>4. Post Event</h2><br>
                        <p class="servicePlan">Once the program is over, Dvent will provide you with a complete description and resolution which will compare and explain budget to actual expense. Photo Album, Queries and event review accompanies the reconciliation and provides a qualitative assessment of the success of the event.

                          Being one of the top event planning companies, we at DVENT organize events that suits the clients’ budget. We highly respect all our clients and implement their ideas in the best possible ways. We believe in offering value for money. Moreover, we also have a very good network of contractors and retailers.

                          The experts at DVENT are highly trained and experienced in the field of organizing events. We understand the importance of every event and how each needs to be treated differently and innovatively.</p><br>



                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
          </div>

          <div class="col-md-4 people">
            <div class="second">
              <h4>Great People</h4>
            </div><br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-success block-lg" >Read More</a>
          </div>

          <div class="col-md-4 ideas">
            <div class="third">
              <h4>Great Ideas</h4>
            </div><br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-success block-lg" >Read More</a>
          </div>

        </div>
      </div><br><br>

      <div class="Services">
        <div class="row text-center">
          <div class="header">
            <h1>Dvents Services</h1><br>
            <p>We make your events samrt & imapctful by personalised event management services</p>
            <text>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </text>
          </div>
        </div>


      </div>











      <!-- <div class="header">
        <h3>EVENT BY CATEGORIES</h3>
      </div><br> -->


      <!-- <div class="profiles">
        <div class="row">
            <div class="col-md-4 first">
              <a href="user_login.php">
                <img src="images/party.jpg" width="100%" height="200px">
                <div class="text-content">
                  <p>PARTY</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 second">
              <a href="user_login.php">
                <img src="images/seminar.jpg" width="100%" height="200px">
                <div class="text-content">
                  <p>SEMINAR</p>
                </div>

              </a>

            </div>
            <div class="col-md-4 third">
              <a href="user_login.php">
                <img src="images/marriage.jpg" width="100%" height="200px">
                <div class="text-content">
                  <p>MARRIAGE</p>
                </div>

              </a>

            </div>
        </div>
      </div> -->

    </div><br><br>
  </body>
</html>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="owlcarousel/owl.carousel.min.js"></script>

<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
