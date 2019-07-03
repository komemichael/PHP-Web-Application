<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
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
			    $("#footer").load("footer.php");
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
										<a href="#" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
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
								<div id="aboutHeader"></div>
								<div id="about"></div>
							</div>
							<hr>
							<div>
								<div class="w3-hide-small w3-padding hovercard">
									For more about the website and the house in general, you can browse through the pages of the wbsite and for silverstoners, you re welcome to ask Kome any questions. Also, there is a link at the bottom to leave a message for the guys or Kome the Admin himself so don't be shy to ask, I won't bite this time.
								</div>
							</div>
							<div id="xml" class="w3-containter w3-padding hovercard"></div>
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
				var xmldoc = xml.responseXML;
				var about = xmldoc.getElementsByTagName("paragraph")[0];

				var inhtml = "";
				inhtml += about.childNodes[0].nodeValue;

				document.getElementById("about").innerHTML = inhtml;
				document.getElementById("aboutHeader").innerHTML = "<h1>" +xmldoc.getElementsByTagName
				("headerAbout")[0].childNodes[0].nodeValue + "</h1><hr>";
			}
		}
	</script>
	<script src="xmlfunc.js"></script>
</html>
