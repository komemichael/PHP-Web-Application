<!DOCTYPE html>
<html>
	<head>
		<title>IVCF</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nova+Scrip" />
		<style>.novascript {font-family: "Nova Scrips", Sans-serif; font-size: 19px;}</style>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://www.w3schools.com/lib/w3.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#sidebar").hide();
				$("#nav-elem").hide();
				$("#submitprayer").show();
				$("#requestprayer").hide();
			    $( "#datepicker" ).datepicker();
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
						<div style="padding: 16px" class="w3-containter novascript">
							<div class="hovercard w3-padding">
								<div id="tabpills" class="w3-bar w3-center w3-light-grey w3-round">
									<button id="home1tab" class="w3-button w3-bar-item pilltab" onclick="opentab('home1','home1tab')">Home</button>
									<button id="gallerytab" class="w3-button w3-bar-item pilltab" onclick="opentab('gallery','gallerytab')">Gallery</button>
									<button id="contacttab" class="w3-button w3-bar-item pilltab" onclick="opentab('contact','contacttab')">Contacts and Info</button>
									<button id="prayertab" class="w3-button w3-bar-item pilltab" onclick="opentab('prayer','prayertab')">Prayer</button>
								</div>

								<div>
									<div id="home1" class="pill">
										<br>
										<h2 class="w3-center w3-text-sand w3-padding">Welcome</h2>
										<hr>
										<div class="w3-padding w3-round">
											<img class="w3-round" src="images/sick.jpg" alt="" style="width: 100%;height: 350px">
										</div>
										<br>
										<div class="w3-padding">
											<p class="w3-text-sand">Welcome to the IVCF Tab of the website. Here  you can find information on what is going on with the University of Manitoba chapter of IVCF.</p>
											<p class="w3-text-sand">
												There are also pictures in the gallery tab where you can click to see what IVCF events has taken place in our house. We (Just Kome) is looking for a volunteer every event to take solid pictures in order to populate the gallery.
											</p>
											<p class="w3-text-sand">
												There is also a section for prayer. More on this inn the prayer tab. If you have any questions related to IVCF I don't know about putting their info online yet so I will just put myself(Kome) as the contact person for now. Enjoy!
											</p>
										</div>
									</div>
									<div id="gallery" class="pill">
										<h4>Gallery</h4>
										<p>Below are some of the wonderul pictures of IVCF events that happened in the guys house. FUN!</p>

										<div class="w3-row-padding w3-margin-top">

											<div class="w3-third">
												<div class="w3-card-2">
													<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/brynncurt.jpg" onclick="modal(this)" 
													style="width:100%; height: 150px">
												</div>
											</div>

											<div class="w3-third">
												<div class="w3-card-2">
													<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/jermarbrelis.jpg" onclick="modal(this)"
													style="width: 100%; height: 150px">
												</div>
											</div>

											<div class="w3-third">
												<div class="w3-card-2">
													<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/justhouse.jpg" onclick="modal(this)"
													style="width: 100%; height: 150px">
												</div>
											</div>
										</div>

										<div class="w3-row-padding w3-margin-top">
											<div class="w3-third">
												<div class="w3-card-2">
													<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/silverstone.jpg" onclick="modal(this)" 
													style="width: 100%; height: 150px">
												</div>
											</div>

											<div class="w3-third">
												<div class="w3-card-2">
													<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/brynncurt.jpg" onclick="modal(this)" 
													style="width: 100%; height: 150px">
												</div>
											</div>

											<div class="w3-third">
												<div class="w3-card-2">
													<img class="w3-round w3-border w3-hover-opacity img-responsive" src="images/justhouse.jpg" onclick="modal(this)"
													style="width: 100%; height: 150px">
												</div>
											</div>
										</div>

										<div class="w3-center w3-animate-zoom">
											<div class="w3-modal" id="modal" onclick="this.style.display = 'none'">
												<img class="w3-modal-content w3-image" id="images" style="height: 550px">
											</div>
										</div>
									</div>
									<div id="contact" class="pill">
										<h4>Contact</h4>
										<div class="w3-padding w3-round">
											<img class="w3-round" src="images/bestteamever.jpg" alt="" style="width: 100%;height: 350px">
										</div>
										<hr>
										<br>
										<p>For now, I am going to drop Kome as the person of contact. And as more people are willing to have their contact up, they wil be added</p>
									</div>
									<div id="prayer" class="pill">
										<br>
										<h4 class="w3-text-sand">Prayers</h4>
										<hr>
										<div class="w3-padding w3-round">
											<img class="w3-round" src="images/komhappy.jpg" alt="" style="width: 100%;height: 350px">
										</div><br>
										<p class="w3-text-sand">Hello there, our Ivcf community really cares about the people in the group and one way we can all support each other is through prayer. Below, there is an option to either pray for someone or drp a prayer point anonmously for someone to pray for you.</p>
										<br>
										<div class=" w3-containter">
											<button class="w3-light-grey w3-round w3-padding w3-bar" onclick="$('#submitprayer').toggle(function(){$('#requestprayer').toggle()})">Pray For Someone</button>
											<div class="w3-margin-bottom w3-padding w3-sand" id="submitprayer" style="visibility: block">
												<p>Click button to reload page and randomly get anonymous prayer request</p>
												<br>
												<button class="w3-button w3-bar w3-dark-grey w3-round" onclick="location.reload()"> Click Me. </button>
												<hr>
												<div id="prayerpoint" class="w3-flat-asbestos w3-padding"></div>
											</div>
											<br>
											<button onclick="$('#requestprayer').toggle(function(){$('#submitprayer').toggle()})" class="w3-light-grey w3-padding w3-round w3-bar">Submit a prayer point</button>
											<div id="requestprayer" class="w3-padding w3-sand">
												<br>
												<form class="w3-containter w3-margin-bottom" action="ivcf.php" method="POST">
													<input type="text" name="prayerpoint" placeholder="What do you want prayer for (Name Optional)" class="w3-input w3-text-blue-grey">
													<br>
													<input class="w3-button w3-bar w3-round w3-dark-grey" type="submit" name="submit">
												</form>
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
		// $.ajax({
		// 	url:'test.php?call=true', type:'GET',
  // }); 

		function modal(element){
			document.getElementById("images").src =  element.src;
			document.getElementById("modal").style.display = 'block';
		}

		function opentab(ivcftab, pilltabhead){
			var pills = document.getElementsByClassName("pill");
			var pilltab = document.getElementsByClassName('pilltab');
			var tab = document.getElementById(ivcftab);
			for (var i = 0; i < pills.length; i++) {
				pills[i].style.display = 'none';
				pilltab[i].classList.remove('w3-dark-grey');
			}

			tab.style.display = 'block';
			document.getElementById(pilltabhead).classList.add('w3-dark-grey');
		}

		opentab('home1','home1tab');
	</script>

	<script src="xmlfunc.js"></script>
</html>

<?php
	prayer();

	function prayer()
	{
		$db = mysqli_connect('localhost','root','','prayer');

		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$sqlcount = "SELECT * FROM prayer";
		$resultcount = mysqli_query($db,$sqlcount);
		$count = mysqli_num_rows($resultcount);
		$random = rand(1,$count);
		$zero = 0;

	    $sqlresult = "SELECT * FROM prayer WHERE idprayer=$random";
	  	$result = mysqli_query($db,$sqlresult);
	  	$row = mysqli_fetch_assoc($result);
	  	echo '<script>document.getElementById("prayerpoint").innerHTML = \''.$row["prayerpoint"].'\'</script>';

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $postprayer = mysqli_real_escape_string($db,$_POST['prayerpoint']);

		  	if (!is_null($postprayer)) {
		  		$sql1 = "INSERT INTO tempprayer (tempprayer,ischecked) VALUES ('$postprayer','$zero')";
		  		if (mysqli_query($db, $sql1)) {
					echo "<script>window.alert('Success!')</script>";
				} else {
					echo "Error: " . $sql1 . "<br>" . mysqli_error($db);
				}
		  	}

		}
	}
?>