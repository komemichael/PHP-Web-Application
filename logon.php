<!DOCTYPE html>
<html>
  <head>
    <title>Log In</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#sidebar").hide();
        $("#nav-elem").hide();
          $( "#datepicker" ).datepicker();
          $("#sidebaropener").click(function(){
            $("#sidebar").toggle(function(){
              $('#sidebarimage').toggle();
            });
          });
          $(".hovercard").hover(function(){
            $(this).addClass('w3-card-4 w3-round-large animated bounce');
          }).mouseleave(function(){
            $(this).removeClass('w3-card-4 w3-round-large');
          });
          $("#nav-more").click(function(){
            $("#nav-elem").toggle(function(){
              var navelem = document.getElementById("nav-elem");
              if (navelem.style.visibility != "block") {
                document.getElementById("nav-more").innerHTML = 
                '<strong>More/Less <span class="glyphicon glyphicon-option-vertical"></span></strong>';
              }
              else
              {
                console.log("here");
                document.getElementById("nav-more").innerHTML = 
                '<strong>More <span class="glyphicon glyphicon-option-vertical"></span></strong>';
              }
            });
          });
          $("#sessionpanel").show();
          $("#footer").load("footer.php");
      });
    </script>

    <script>
      var app = angular.module('myApp', []);
      app.controller('personCtrl', function($scope){//, $location) {
          $scope.firstName = "Kome";
          $scope.lastName = "Michael";
          $scope.fullName = function() {
              return $scope.firstName + " " + $scope.lastName;
          };
          // $scope.myURL = $location.absUrl();
      });

      app.controller('login', function($scope){
        $scope.date = "today";
      });
    </script>
    <script type="text/javascript">
      particlesJS.load('particles-js', 'particles.json', function() {
          console.log('callback - particles.js config loaded');
      });
    </script>
  </head>

  <body ng-app="myApp">
    <!-- HEADER of Document -->
    <div class="w3-top w3-padding w3-grey w3-card-4">
      <header  id="head">
        <nav >
          <div class="w3-bar">
            <a href="#" id="sidebaropener" class="w3-bar-item w3-button w3-hover-shadow">
              <strong><span class="glyphicon glyphicon-menu-hamburger"></span></strong>
            </a>
            <a href="index.php" id="home" class="w3-bar-item w3-button w3-hover-shadow">
              <strong><span class="glyphicon glyphicon-home"></span></strong>
            </a>
            <a href="guys.html#!kome" class="w3-bar-item w3-button w3-hover-shadow">
              <span class="w3-hide-small"><strong>Kome</strong></span>
              <span class="w3-hide-medium w3-hide-large" ><img src="images/kome.jpg" style=" height:30px; width: 40px"></span>
            </a>
            <a href="guys.html#!jeremys" class="w3-bar-item w3-button w3-hover-shadow">
              <span class="w3-hide-small"><strong>Jeremy</strong></span>
              <span class="w3-hide-medium w3-hide-large" ><img src="images/jeremys.jpg" style=" height:30px; width: 40px"></span>
            </a>
            <div id="nav-elem">
              <a href="guys.html#!alex" class="w3-bar-item w3-button w3-hover-shadow" id="nav-elem">
                <span class="w3-hide-small"><strong>Alex</strong></span>
                <span class="w3-hide-medium w3-hide-large" ><img src="images/alex.jpg" style=" height:30px; width: 40px"></span>
              </a>
              <a href="guys.html#" class="w3-bar-item w3-button w3-hover-shadow">
                <span class="w3-hide-small"><strong>Hans</strong></span>
                <span class="w3-hide-medium w3-hide-large" ><img src="images/hans.jpg" style=" height:30px; width: 40px"></span>
              </a>
              <a href="#" class="w3-bar-item w3-button w3-hover-shadow">
                <span class="w3-hide-small"><strong>JeremyD</strong></span>
                <span class="w3-hide-medium w3-hide-large" ><img src="images/jeremyd.jpg" style=" height:30px; width: 40px"></span>
              </a>
              <a href="#" class="w3-bar-item w3-button w3-hover-shadow">
                <span class="w3-hide-small"><strong>Mark</strong></span>
                <span class="w3-hide-medium w3-hide-large" ><img src="images/kome.jpg" style=" height:30px; width: 40px"></span>
              </a>
            </div>
            <a href="#" class="w3-bar-item w3-button w3-hover-shadow" id="nav-more" ">
              <strong>More <span class="glyphicon glyphicon-option-vertical"></span></strong>
            </a>

            <div class="w3-right">
              
              <div id="search" style="display: none;" class="w3-hide-small" onmouseleave="this.style.display='none'">
                <input type="text" class="w3-round" >
              </div>
              <a href="#" onclick="document.getElementById('createuser').style.display='block'" class="w3-bar-item w3-button w3-hover-shadow">
                <span class="glyphicon glyphicon-user"></span>
              </a>
              <a href="#" onmouseover="document.getElementById('search').style.display='inline-block'" class="w3-bar-item w3-button w3-hover-shadow">
                <span class="glyphicon glyphicon-search"></span>
              </a>
            </div>
          </div>
        </nav>

        <div class="w3-modal" id="createuser">
          <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-display-container w3-round-large">
            <?php include 'createuser.php' ?>
          </div>
        </div>
      </header> 
    </div>  
    

    <!-- body  -->
    <div id="particles-js" class="w3-sand" style="padding-top: 70px">

        <div id='sessionpanel' class="w3-modal w3-round">
          <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-round">
            <div id="sessionpanelmessage" class="w3-text-white w3-padding w3-round w3-red"></div>
            <?php 
              $message = "<div class='w3-center'><h3>Not Logged In!</h3></div>";
                echo ("<script type='text/javascript'>
                         document.getElementById('sessionpanelmessage').innerHTML = \"".$message. "\";
                      </script>");
                  sleep(2);
            ?>
          </div>
        </div>

      <h1 class="w3-xxlarge w3-text-white ">
        <span class= "w3-round w3-padding w3-black w3-opacity-min"><b>SILVERSTONE</b></span> 
        <span class="w3-hide-small w3-text-blue-grey">GuysHouse</span>
      </h1>

      <!-- Sidebar -->
      <div style="padding: 50px">

        <!-- BODY of Document -->
        <div class="w3-row w3-flat-asbestos w3-round">
          <!-- Side bar -->
          <div class=" w3-col m3 l2">
            <div class=" w3-containter">
              <div class="w3-col s3 m2 l2" >  
                <div class="w3-containter w3-hide-small w3-padding w3-col s3 m2 l2" id="sidebarimage" >
                  <img src="images/silverstone.jpg" class="w3-round" style="height: 500px; width: 100%">
                </div>   
                      <div class="w3-containter w3-col s3 m2 l2">
                        <span>...</span>
                        <div  id="sidebar" class="w3-sidebar w3-bar-block w3-round w3-dark-grey" style="height: 500px;">  
                          <a href="index.php" class="w3-bar-item w3-button w3-hover-sand w3-hover-shadow w3-margin-bottom w3-center " >
                            <strong>Home</strong>
                          </a>
                    <a href="about.php" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
                            <strong>About</strong>
                          </a>
                            <a href="bookings.html" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
                            <strong>Booking</strong>
                          </a>
                            <a href="ivcf.html" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
                            <strong>IVCF</strong>
                          </a>
                            <a href="gallery.html" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
                            <strong>Gallery</strong>
                          </a> 
                        </div>
                      </div>
              </div>
            </div>
          </div>

          <!-- Body of the body -->
          <div class="w3-col m6 l7">
            <div style="padding: 16px" class="w3-containter">
              <?php include('login.php');?>
              <div id="xml" class="w3-containter w3-padding hovercard"></div>
            </div>  
          </div>

          <!-- News and Updates -->
          <div class=" w3-col m3 l3 w3-hide-small">
            <div style="padding: 16px" class="w3-containter w3-text-sand">
              <div class="w3-card-4 w3-margin-bottom w3-round">
                <h2 class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">Updates</h2>
              </div>
              <div class="w3-card-4 w3-margin-bottom w3-round">
                <header class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">
                  <h3 id="header1">Lorem</h3>
                </header>
                <p id="news1" class="w3-padding">
                  <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi .</i>
                </p>
              </div>
              <br>
              <div class="w3-card-4 w3-margin-bottom w3-round">
                <header class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">
                  <h3 id="header2">Ipsum</h3>
                </header>
                <p class="w3-padding" id="news2">
                  <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labor magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laisi .</i>
                </p>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER of Document -->
    <div id="footer"></div>
  </body>
</html>


<script type="text/javascript">
  setTimeout(session, 2000);
  function session()
  {
    $("#sessionpanel").remove();
  }
</script>
<script src="xmlfunc.js"></script>