<!DOCTYPE html>
<html>
	<head>
		<title>Gallery</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Atomic+Age" />
		<style>.atomicage {font-family: "Atomic Age", Sans-serif; font-size: 19px;}</style>
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
			    $("#afterfall2017").hide();
			    $("#sidebaropener").click(function(){
			    	$("#sidebar").toggle(function(){
			    		$('#sidebarimage').slideToggle();
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
				    		'<strong>Less  <span class="glyphicon glyphicon-option-vertical"></span></strong>';
				    	}
			    	});
			    });
			});
		</script>
	</head>

	<body >
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
						              	<a href="gallery.php" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
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
								<div id="gallery" class="pill w3-text-sand atomicage">
									<h2 class="w3-center"><strong>Gallery</strong></h2>
									<br><hr><br>
									<p>Hello, I know for now the gallery page is kind of empty, we want to make a lot of memories at this house before some of us move out so if you take a picture with any one of the guys in our house, pleae share it. I will create an upload link at the user section where you can add pictures to the database. You wouldn't necessarily see the pictures yet because the admin (Kome) has to "approve" the pictures and then you can request it on your page.</p>
									<br>
									<p>
										 Please note, your pictures may be uploaded and made public on the website so please indicate when submitting your pictures that you do agree for it to be made public. If you did not check for your ppicture to be made public, only you will be able to see it when you log in. Join us in experiencing our memories as Silverstone 2015 - 2018 Guys house. :)
									</p>


									<div class=" w3-containter">
										<button class="w3-light-grey w3-round w3-padding w3-bar" onclick="$('#beforefall2017').toggle()">Before Fall 2017 <span><strong>&#8659;</strong></span></button>
										<div class="w3-margin-bottom w3-padding w3-dark-grey" id="beforefall2017" style="visibility: block">
											<p>Pictures before fall and we had Mark Join us</p>
											<hr><br>
											<div class="w3-row-padding w3-margin-top">
												<div class="w3-third">
													<div class="w3-card-2">
														<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/silverstone.jpg" onclick="modal(this)" 
														style="width: 200px; height: 200px">
													</div>
												</div>

												<div class="w3-third">
													<div class="w3-card-2">
														<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/kome.jpg" onclick="modal(this)"
														style="width: 200px; height: 200px">
													</div>
												</div>

												<div class="w3-third">
													<div class="w3-card-2">
														<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/alex.jpg" onclick="modal(this)"
														style="width: 200px; height: 200px">
													</div>
												</div>
											</div>
											<div class="w3-row-padding w3-margin-top">
												<div class="w3-third">
													<div class="w3-card-2">
														<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/jeremys.jpg" onclick="modal(this)" 
														style="width: 200px; height: 200px">
													</div>
												</div>

												<div class="w3-third">
													<div class="w3-card-2">
														<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/jeremyd.jpg" onclick="modal(this)"
														style="width: 200px; height: 200px">
													</div>
												</div>

												<div class="w3-third">
													<div class="w3-card-2">
														<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/hans.jpg" onclick="modal(this)"
														style="width: 200px; height: 200px">
													</div>
												</div>
											</div>
										</div>
										<button onclick="$('#afterfall2017').toggle()" class="w3-light-grey w3-padding w3-round w3-bar">After Fall 2017 <span><strong>&#8659;</strong></span></button>
										<div id="afterfall2017" class="w3-padding w3-dark-grey">
											<br>
											<p>Pictures when we got the gang all together. The six of us.</p>
										</div>

										<div class="w3-center w3-animate-zoom">
											<div class="w3-modal" id="modal" onclick="this.style.display = 'none'">
												<img class="w3-modal-content w3-image" id="images" style="height: 550px">
											</div>
										</div>
									</div>
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
								</p>
							</div>
							<br>
							<div class="w3-card-4 w3-margin-bottom w3-round">
								<header class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">
									<h3 id="header2">Ipsum</h3>
								</header>
								<p class="w3-padding" id="news2">
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
		function modal(element){
			document.getElementById("images").src =  element.src;
			document.getElementById("modal").style.display = 'block';
		}
	</script>
	<script src="xmlfunc.js"></script>
</html>
