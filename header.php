
    <div id="container-fluid global">
        <div class="row text-center top_div " style="background-color:#cacdd1">
          <div class="col-md-6 tool_box1">
            <div class="col-sm-4 first">
              <p><img src="images/call.png" alt="call_image" width="16px" height="16px">
              (+01)123 456 7899</p>
            </div>
            <div class="col-sm-4 second">
              <p><img src="images/envelope.png" alt="envelope_image" width="16px" height="16px">
              contact@dvents.com</p>
            </div>
            <div class="col-sm-4 third">
              <p><img src="images/clock.png" alt="clock_image" width="16px" height="16px">
                Mon-Fri 9.00 am - 6.00pm</p>
            </div>

          </div>
          <div class="col-md-6 tool_box2">
            <ul>
              <?php
              if(isset($_SESSION['email'])){
                echo '<li>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Welcome, '.$_SESSION['email'].'
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="myevents.php">My Events</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                  </div>
                </li>';
              }else{
                echo "<a href='user_login.php'>Login</a>";
              }
               ?>

              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-facebook"></a></li>
              <li><a href="#" class="fa fa-google"></a></li>
              <li><a href="#" class="fa fa-linkedin"></a></li>


            </ul>
          </div>

        </div>
    <nav class="navbar navbar navbar-fixed">
      <div class="container-fluid world">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dvents <br>Making Events Simpler </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#">Services</a>
              <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services</a> -->
              <!-- <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul> -->
            </li>
            <li class="dropdown">
              <a href="events.php">Events</a>
              <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="events.php">Events<span class="caret"></span></a> -->
              <!-- <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul> -->
            </li>



            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>




          </ul>
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul> -->
        </div>
      </div>
    </nav>
  </div>
