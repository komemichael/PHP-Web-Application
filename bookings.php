<!DOCTYPE html>
<html>
	<head>
		<title>Booking</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
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
			    	$(this).addClass('w3-card-4').addClass('w3-round-large');
			    }).mouseleave(function(){
			    	$(this).removeClass('w3-card-4').removeClass('w3-round-large');
			    });
			    $("#nav-more").click(function(){
			    	$("#nav-elem").toggle(function(){
			    		var navelem = document.getElementById("nav-elem");
				    	if (navelem.style.visibility == "block") {
				    		document.getElementById("nav-more").innerHTML = 
				    		'<strong>More <span class="glyphicon glyphicon-option-vertical"></span></strong>';
				    	}
				    	else
				    	{
				    		console.log("here");
				    		document.getElementById("nav-more").innerHTML = 
				    		'<strong>More/Less  <span class="glyphicon glyphicon-option-vertical"></span></strong>';
				    	}
			    	});
			    });
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
		</script>
	</head>

	<body ng-app="myApp">
		<!-- HEADER of Document -->
		<div class="w3-top w3-padding w3-grey w3-card-4">
			<?php include 'header.php' ?>	
		</div>	

		<!-- body  -->
		<div class="w3-sand"  style="padding-top: 70px">
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
							<div class="hovercard w3-padding">
								<div id="postsuccess" class="w3-panel"></div>
								<div>
									<h1><strong>Bookings</strong></h1>
									<hr><br>
									<div class="w3-padding w3-round">
										<img class="w3-round" src="images/highschool.jpg" alt="" style="width: 100%;height: 300px">
									</div>
									<br>
									<h3 class="w3-center w3-text-sand"><strong>Please fill out the sections below</strong></h3>
									<br>
									<form class="w3-containter" action="bookings.php" method="POST">
										<input id="fullname" class="w3-text-black w3-input w3-animate-input w3-round" type="text" name="fullname" placeholder="Full name"><br>
										<input id="email" class="w3-text-black w3-input w3-animate-input w3-round" type="text" name="email" placeholder="Email"><br>
										<input id="phone" class="w3-text-black w3-input w3-animate-input w3-round" type="text" name="phone" placeholder="Phone Number"><br>
										<input id="datepicker" class="w3-text-black w3-input w3-animate-input w3-round" type="text" name="date" placeholder="Date"><br>
										<input id="time" class="w3-text-black w3-input w3-animate-input w3-round" type="text" name="time" placeholder="Time of Event"><br>
										<input id="eventtitle" class="w3-text-black w3-input w3-animate-input w3-round" type="text" name="eventtitle" placeholder="Title of Event"><br>
										<input class="w3-button w3-bar w3-dark-grey w3-round" type="submit" name="submitconfirmbooking" value="Book">
									</form>
								</div>
							</div>
							<hr>
							<div>
								<div class="w3-hide-small w3-padding hovercard">
									Hello welcome to our bookings page. Here you can schedule a hang out with the guys or if you are IVCF person wanting to use our house for meetings, make sure to indicate you have the house booked for your meeting so as not to conflict with other meetings the guys personally schedule. You know what they say, always do you bookings! Okay maybe only Kome says that. Booking information will be posted on the log-in page so if there is a conflict with time and date, your booking will NOT be processed. There are ways around this. wink wink!
								</div>
							</div>
							<div id="xml" class="w3-containter w3-padding hovercard"></div>
						</div>	
					</div>

					<!-- side news and updates -->
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
		<?php include 'footer.php' ?>
	</body>


	<script> 
		// w3.slideshow(".mySlides", 3000);
		xml();

		function xml(){
			var xhttp = new XMLHttpRequest();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			      thisfunction(this);
			    }
			};
			xhttp.open("GET", "sites.xml", true);
			xhttp.send();

			function thisfunction(xml){
				var fullname = document.getElementById("fullname").value;
				var email = document.getElementById("email").value;
				var phone = document.getElementById("phone").value;
				var xmldoc = xml.responseXML;
				console.log(xmldoc);
				var bookings = xmldoc.getElementsByTagName("bookings")[0];
				console.log(bookings);

				newbook = xmldoc.createElement("book");
				newText = xmldoc.createTextNode("hello worldsss");
				newbook.appendChild(newText);
				console.log(newbook);
				bookings.appendChild(newbook);


				console.log(xmldoc);
				//successtimeout();

			}
		}

		function successtimeout(){
			if (true) {
				document.getElementById("postsuccess").innerHTML = "Success!!!"
			}
		}
	</script>
	<script src="xmlfunc.js"></script>
</html>

<?php 
	$conn = mysqli_connect("localhost","root","komeeyrtyguhlizeilie",'messages');

	if (isset($_POST['submitconfirmbooking']))
	{
		bookevent($conn);	
	}

	function bookevent($conn)
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $date  = test_input($_POST["date"]);
		    $fullname  = test_input($_POST["fullname"]);
		    $email = test_input($_POST["email"]);
		    $phone = test_input($_POST["phone"]);
		    $time = test_input($_POST["time"]);
		    $eventtitle = test_input($_POST["eventtitle"]);

		    // Check connection
		    if (!$conn) {
		      die("Connection failed: " . mysqli_connect_error());
		    }

		    $sql = "INSERT INTO bookings (fullname, email, phone, date, eventtime, eventname) VALUES('$fullname','$email','$phone','$date','$time','$eventtitle')";

		    if (!(mysqli_query($conn, $sql))) {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		    }
		    else {
		    	echo 'Done';
	     		// mysqli_close($conn);
	     		// sleep(3);
	     		// echo "<script>
	       //       			window.history.go(-1);
	     		// 	</script>";
		    }
		    
		}
	}

	
?>
