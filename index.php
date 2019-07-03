<!DOCTYPE html>
<html>
	<head>
		<title>Silverstone</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<style>.w3-allerta {font-family: "Allerta Stencil", Sans-serif;}</style>
		<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://www.w3schools.com/lib/w3.js"></script>
		<!-- Jquery  -->
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
				    		'<strong>More/Less<span class="glyphicon glyphicon-option-vertical"></span></strong>';
				    	}
				    	else
				    	{
				    		console.log("here");
				    		document.getElementById("nav-more").innerHTML = 
				    		'<strong>More <span class="glyphicon glyphicon-option-vertical"></span></strong>';
				    	}
			    	});
			    });
			    $("#footer").load("footer.php");
			});
		</script>
		<!-- Angular JS -->
		<script>
			var app = angular.module("myApp", []);

			app.controller('personCtrl', function($scope){//, $location) {
			    $scope.firstName = "Kome";
			    $scope.lastName = "Michael";
			    $scope.fullName = function() {
			        return $scope.firstName + " " + $scope.lastName;
			    };
			    // $scope.myURL = $location.absUrl();
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
			<?php include 'header.php' ?>
		</div>	

		<!-- body  -->
		<div id="particles-js" class="w3-sand"  style="padding-top: 70px">
			<div id="sessionpanel"></div>
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
						              	<a href="bookings.php" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
						            		<strong>Booking</strong>
						            	</a>
						              	<a href="ivcf.php" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
						            		<strong>IVCF</strong>
						            	</a>
						              	<a href="gallery.php" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
						            		<strong>Gallery</strong>
						            	</a> 
						            	<!-- <a href="loggedin.php" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
						            		<strong>LogIn test</strong>
						            	</a> -->
						            </div>
					            </div>
							</div>
						</div>
					</div>

					<!-- Body of the body -->
					<div class="w3-col m6 l7">
						<div style="padding: 16px" class="w3-containter">
							<div class="slide w3-margin-bottom hovercard w3-display-container">	
								<div class="mySlides w3-animate-opacity">
									<img src="images/silverstone.jpg"
									style="width:100%; height: 400px">
									<span class="w3-display-bottommiddle">
										<h3 class="w3-center"><strong>We love them boys</strong></h3>
										<p class="w3-center">woo woo wooo!!</p>>
									</span>
								</div>
								<div class="mySlides w3-animate-opacity">
									<img src="images/kome1.jpg"
									style="width:100%; height: 400px">
									<span class="w3-display-bottommiddle">
										<h3 class="w3-center"><strong>Kome is AAWEESOOMMEEEEEE!!!!</strong></h3>
										<p class="w3-center">Isn't he such an adorable fella :)</p>
									</span>
								</div>
								<div class="mySlides w3-animate-opacity" >
									<img src="images/jeremyss.jpg"
									style="width:100%; height: 400px">
									<span class="w3-display-bottommiddle">
										<h3 class="w3-center"><strong>Jeremy is amazing</strong></h3>
										<p class="w3-center">Nice dude brooo!!</p>
									</span>
								</div>	
								<div class="mySlides w3-animate-opacity">
									<img src="images/jeremydd.jpg"
									style="width:100%; height: 400px">
									<span class="w3-display-bottommiddle">
										<h3 class="w3-center"><strong>Jeremy is Facinating and Intriguing</strong></h3>
										<p class="w3-center">Niiiiiiiiiiiiiiiiiiiiice!! :)</p>
									</span>
								</div>
								<div class="mySlides w3-animate-opacity">
									<img src="images/hansmile.jpg"
									style="width:100%; height: 400px">
									<span class="w3-display-bottommiddle">
										<h3 class="w3-center"><strong>Hans got the Cool</strong></h3>
										<p class="w3-center">Swagg game on point!!</p>
									</span>
								</div>
								<div class="mySlides w3-animate-opacity" >
									<img src="images/wilke.jpg"
									style="width:100%; height: 400px">
									<span class="w3-display-bottommiddle">
										<h3 class="w3-center"><strong>The fun and noble one in the Squad</strong></h3>
										<p class="w3-center">Can't wait for math3 and 2E (rubs palm quickly)!!</p>
									</span>
								</div>
								<div class="mySlides w3-animate-opacity" >
									<img src="images/mark.jpg"
									style="width:100%; height: 400px">
									<span class="w3-display-bottommiddle">
										<h3 class="w3-center"><strong>Name it, he knows something about it.</strong></h3>
										<p class="w3-center">Ride On broooo!!</p>
									</span>
								</div>	
								<div class="w3-containter w3-black">
									<button class="w3-button w3-display-left" onclick="myShow.previous()">&#10094;</button>
									<button class="w3-button w3-display-right" onclick="myShow.next()">&#10095;</button>
								</div>								
							</div>
							<hr>
							<div  ng-controller="personCtrl" style="border-style: solid;" class="w3-padding w3-text-black w3-allerta">
								<h3 class="w3-center">Enter your name below. Type Over Kome Michael to change</h3>
								<form>
									<p>Date: <input class="w3-input w3-round" type="text" id="datepicker"></p><br>
									First Name: <input class="w3-input w3-round"  type="text" ng-model="firstName"><br>
									Last  Name: <input class="w3-input w3-round" type="text" ng-model="lastName"><br>
									<br><h5 class="w3-center">Hello {{fullName()}} Welcome to this website</h5>
								</form>
							</div>
							<hr>
							<div class="hovercard w3-text-sand w3-padding w3-allerta">
								<h1 class="w3-center">Birthday Celebs</h1>
								<hr>
								<br>
								<div class="w3-white w3-round">
									<p class="w3-text-yellow w3-center"> Happy belated birthday</p><h3 class="w3-text-blue w3-center">Mark Van Egmond</h3>
									<p class="w3-text-red w3-center">Many happy returns to you.</p><p class="w3-text-green w3-center">Years of happiness and joy to come</p>
								</div>
								<div class="w3-round w3-center">
									<img src="images/birthday.gif" class="w3-round" alt="">
								</div>
							</div>
							<hr><hr>
							<div>
								<div class="w3-hide-small w3-padding hovercard">
									Hello there, welcome to my website, designed as my summer project of learning different aspects of web development through front and back end server side scripting and frameworks. Please browse throuh the site and if you want to indicate you visited the page, please leave your name above. Hope you enjoy the cheesiness of the site because I did not have as much functionality and I need ideas of what the website should do and I will be updating it with time. Enjoy!!
								</div>
							</div>
						</div>	
					</div>
					<div class=" w3-col m3 l3 w3-hide-small">
						<div style="padding: 16px" class="w3-containter w3-text-sand">
							<div class="w3-card-4 w3-margin-bottom w3-round">
								<h2 class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">Updates</h2>
							</div>
							<div class="w3-card-4 w3-margin-bottom w3-round">
								<header class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">
									<h3 id="header1">Lorem</h3>
								</header>
								<p id="news1" class="w3-padding"></p>
							</div>
							<br>
							<div class="w3-card-4 w3-margin-bottom w3-round">
								<header class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">
									<h3 id="header2">Ipsum</h3>
								</header>
								<p class="w3-padding" id="news2"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- FOOTER of Document -->
		<div id="footer"></div>
	</body>

	<script> 
		w3.slideshow(".mySlides", 4000);
		var myShow = w3.slideshow(".mySlides", 0);
	</script>
</html>
<script type="text/javascript">
	setTimeout(session, 4000);
	function session()
	{
		document.getElementById("sessionpanel").style.visibility = 'hidden';
	}
</script>
<script src="xmlfunc.js"></script>