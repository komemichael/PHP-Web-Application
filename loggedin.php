<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Logged In</title>
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
			    $( "#datepicker1" ).datepicker();
			    $( "#datepicker2" ).datepicker();
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
				    		document.getElementById("nav-more").innerHTML = 
				    		'<strong>More/Less  <span class="glyphicon glyphicon-option-vertical"></span></strong>';
				    	}
			    	});
			    });
			    $("#sessionpanel").show();
			    $("#footer").load("footer.php");
			});
		</script>

		<script>
			var app = angular.module('myApp', []);

        	app.controller('myCtrl', function($scope, $http) 
			{  $http.get("nonutility.php")
			   .then(function(responseX)
			   {       
			       $scope.responseX = responseX.data;  
			   });
			   $http.get("utility.php")
			   .then(function(responseY)
			   {      
			       $scope.responseY = responseY.data;
			   });
			});

			app.controller('message', function($scope, $http) 
			{  $http.get("messages.php")
			   .then(function(responseM)
			   {
			       $scope.responseM = responseM.data;  
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
							<h2 class="w3-jumbotron w3-text-sand w3-center">Hello <?php echo $_SESSION["login_user"]; ?></h2> 
							<div class="w3-card-4 w3-margin-bottom w3-round w3-hide-large w3-hide-medium">
								<a href="logout.php" class="w3-block w3-round w3-button w3-dark-grey w3-text-sand"><strong>Signout</strong></a>
							</div>
							<br><hr><br>
							<div class="hovercard w3-padding">
								<div id="tabpills" class="w3-bar w3-center w3-light-grey w3-round">
									<button id="home1tab" class="w3-button w3-bar-item pilltab" onclick="opentab('home1','home1tab')">Home</button>
									<div class="w3-dropdown-hover" id="utiltab" class="pilltab">
										<button  class="w3-button w3-bar-item">Bills</button>
										<div class="w3-dropdown-content w3-bar-block w3-border">
											<button id="utiltab" class="w3-button w3-bar-item pilltab" onclick="opentab('util','utiltab')">Utility Info</button>
											<button id="utiltab" class="w3-button w3-bar-item pilltab" onclick="opentab('nonutil','utiltab')">Non-Utility Info</button>
										</div>
									</div>
									<button id="contacttab" class="w3-button w3-bar-item pilltab" onclick="opentab('contact','contacttab')">Contacts and Info</button>
									<button id="enternonutiltab" class="w3-button w3-bar-item pilltab" onclick="opentab('enternonutil','enternonutiltab')">Enter nonUtil</button>
									<button id="enterutiltab" class="w3-button w3-bar-item pilltab" onclick="opentab('enterutil','enterutiltab')">Enter Util</button>
									<button id="messagesstab" class="w3-button w3-bar-item pilltab" onclick="opentab('messagess','messagesstab')">Messages</button>
								</div>

								<div>
									<div id="home1" class="pill w3-text-sand">
										<br>
										<h2 class="w3-center">Welcome such mighthy Silverstoner</h2><hr>
										<p>Follow the tab links to navigate. Hope you have a good experience with this secret side of the website.</p>
										<br>
										<p>Fun fact this was the hardest part of the site to code because In addition to the many many php activities, it also uses Angular and XMLhttp requests</p>
										<br>
										<p>Maybe I should post a fun fact about the house here so that everyone can appreciate my mememity</p>
									</div>
									<div id="utilandnontil">
										<div id="nonutil" class="pill">
											<br>
											<br>
											<div class="hovercard" ng-controller="myCtrl" style="overflow-y:scroll; height: 500px">
												<table class="w3-table w3-striped w3-hoverable w3-text-black" >
													<tr class="w3-dark-grey">
														<th>Date</th>
														<th>Name of Bill</th>
														<th>Amount</th>
														<th>Amount by 6</th>
														<th>Notes (Pay-to, etc)</th>
													</tr>
													<tr ng-repeat="x in responseX">
														<td>{{x.date}}</td>
														<td>{{x.namebill}}</td>
														<td>{{x.amount}}</td>
														<td>{{x.amountbysix}}</td>
														<td>{{x.notes}}</td>
													</tr>
												</table>
											</div>
										</div>
										<div id="util" class="pill">
											<br>
											<br>
											<div class="hovercard" ng-controller="myCtrl" style="overflow-y:scroll; height: 500px">
												<table class="w3-table w3-striped w3-hoverable w3-text-black" >
													<tr class="w3-dark-grey">
														<th>Date</th>
														<th>Month</th>
														<th>Bill</th>
														<th>Amount</th>
														<th>Amount/person</th>
														<th>Pay-To</th>
													</tr>
													<tr ng-repeat="y in responseY">
														<td>{{y.date}}</td>
														<td>{{y.month}}</td>
														<td>{{y.billtype}}</td>
														<td>{{y.totalamount}}</td>
														<td>{{y.totalamount / 6}}</td>
														<td>{{y.payto}}</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<div id="contact" class="pill">
										<br>
										<h4>Contact</h4>
										<p>Lorem ioident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
									<div id="enternonutil" class="pill w3-text-black">
										<br>
										<h4>Enter Non-Utility Bill</h4>
										<hr>
										<form action="nonutil.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;" method="POST">
											<input id="datepicker" ng-model="date" class="w3-input w3-round" type="text" name="date" placeholder="date">
											<br>
											<input ng-model="namebill" class="w3-input w3-round" type="text" name="namebill" placeholder="namebill">
											<br>
											<input ng-model="amount" class="w3-input w3-round" type="text" name="amount" placeholder="amount">
											<br>
											<input ng-model="notes" class="w3-input w3-round" type="text" name="note" placeholder="notes">
											<br>
											<input type="checkbox" class="w3-check" name="">
											<input type="reset">
											<button class="w3-button w3-round" onclick="setTimeout(function(){ alert('Successfuly added')}, 3000)">Submit</button>
										</form>
									</div>

									<div id="enterutil" class="pill w3-text-black">
										<br>
										<h4>Enter Utility Bill</h4>
										<hr>
										<form action="util.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;" method="POST">
											<input id="datepicker1" ng-model="date" class="w3-input w3-round" type="text" name="date" placeholder="date">
											<br>
											<select class="w3-select" name="month">
												<option value="" disabled selected>Select what month</option>
												<option value="January">January</option>
												<option value="February">February</option>
												<option value="March">March</option>
												<option value="April">April</option>
												<option value="May">May</option>
												<option value="June">June</option>
												<option value="July">July</option>
												<option value="August">August</option>
												<option value="September">September</option>
												<option value="October">October</option>
												<option value="November">November</option>
												<option value="December">December</option>
											</select>
											<br>
											<br>
											<input ng-model="namebill" class="w3-input w3-round" type="text" name="billtype" placeholder="Type of Bill">
											<br>
											<input ng-model="amount" class="w3-input w3-round" type="text" name="totalamount" placeholder="Amount">
											<br>
											<input list="purchasers" name="payto" class="w3-input" placeholder="Pay-to">
											<datalist id="purchasers">
												<option value="Kome">
												<option value="Smith">
												<option value="Dyck">
												<option value="Alex">
												<option value="Hans">
												<option value="Mark">
											</datalist>
											<br>
											<input type="checkbox" class="w3-check" name="">
											<input type="reset">
											<button class="w3-button w3-round" onclick="setTimeout(function(){ alert('Successfuly added')}, 3000)">Submit</button>
										</form>
									</div>
									<div id="messagess" class="pill">
										<br>
										<div class="w3-text-sand w3-hide-small">
											<h3>For large and medium screens, check side of screen for Messages</h3>
										</div>
										<div class="w3-card-4 w3-margin-bottom w3-round w3-hide-large w3-hide-medium" ng-controller='message'>
											<header class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">
												<h3>Messages</h3>
											</header>
											<div class="w3-padding " style="overflow-y:scroll; height: 500px">
												<div ng-repeat="m in responseM" class="w3-panel w3-grey w3-round">
													<p>{{m.message}}</p>
													<span>
														<form >
															<input style="display: none" type="text" name="message" value="{{m.message}}">
															<input type="submit" name="readfootermessage" value="Mark read">
															<input type="submit" name="deletefootermessage" value="Delete">
														</form>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr>

							<div class="w3-containter w3-padding w3-flat-asbestos w3-text-blue-grey hovercard">
								<br>
								<h3 class="w3-center w3-text-sand">Confirm Payment By Someone</h3>
								<br>
								<form action="utility.php" method="post">
									<input type="text" name="howmuchpaid" class="w3-input w3-round" placeholder="How much were you paid">
									<br>
									<div class="w3-tooltip">
										<input id="datepicker2" ng-model="date" class="w3-input w3-round" type="text" name="datepaid" placeholder="Date Full bill was initially Paid">
										<p class="w3-text w3-text-sand">Please refer to the Bill for this information</p>
									</div>
									<br>
									<select name="whopaid" class="w3-select">
										<option value="" disabled selected>Paid By</option>
										<option value="Kome">kome</option>
										<option value="Smith">Jeremy S</option>
										<option value="Dyck">Jeremy D</option>
										<option value="Hans">Hans</option>
										<option value="Alex">Alex</option>
										<option value="Mark">Mark</option>
									</select>
									 <br>
									 <br>
									<input class="w3-button w3-bar w3-dark-grey w3-round" type="submit" name="submitconfirmpaid" value="Confirm Payment">
								</form>
							</div>

							<hr>
							<div id="downloads" class="w3-padding">
								<h2 class="w3-text-sand w3-center">Downloads</h2>
								<br>
								 <a href="downloads.php?file=utility" class="w3-tooltip">
								 	<img src="images/folder_download.png" class="hovercard">
								 	<p class="w3-text w3-tag">Download Utility Bills</p>
								 </a>

								 <a href="downloads.php?file=nonutility" class="w3-tooltip">
								 	<img src="images/folder_download.png" class="hovercard">
								 	<p class="w3-text w3-tag">Download Non Utility Bills</p>
								 </a>

								 <a href="downloads.php?file=prayer" class="w3-tooltip">
								 	<img src="images/folder_download.png" class="hovercard">
								 	<p class="w3-text w3-tag">Download Prayers</p>
								 </a>
							</div>

							<hr><br>
							<div class="hovercard w3-padding">
								<h3 class="w3-center w3-text-blue-grey w3-light-grey w3-round"><strong>Upload Files to the Server</strong></h3>
								<br>
								<p class="w3-text-sand">This section is for if you wish to upload photos to be used for the website. You will see the pictures in your logged in page unless you tick the checkbox to make it public</p>
								<p class="w3-text-sand">
									Note: I am using the checkbox as a way to confirm you agree for the picture to be made public.
								</p>
							    <form enctype="multipart/form-data" method="post" action="fileprocessing.php?user=<?php echo $_SESSION["login_user"]; ?>">
							        <input class="w3-input w3-animate-input" type="file" name="fileToUpload" /><br />
							        <input class="w3-check" type="checkbox" name="ischecked" checked="checked">
									<label><strong>Only check this if you agree to make the picture public.</strong></label>
									<br>
							        <input class="w3-button w3-bar w3-round w3-grey" type="submit" name="uploadfile" value="UploadFile" />
							    </form>
							</div>
							<hr><br>
							<div>
								<div class="w3-hide-small w3-padding hovercard">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
							<div id="xml" class="w3-containter w3-padding hovercard"></div>
						</div>	
					</div>

					<!-- side news and updates -->
					<div class=" w3-col m3 l3 w3-hide-small">
						<div class="w3-card-4 w3-margin-bottom w3-round">
							<a href="logout.php" class="w3-block w3-round w3-button w3-dark-grey w3-text-sand"><strong>Signout</strong></a>
						</div>
						
						<div style="padding: 16px" class="w3-containter w3-text-sand">
							<?php include 'updates.php'; ?>
							<br>
							<div class="w3-card-4 w3-margin-bottom w3-round" ng-controller='message'>
								<header class="w3-containter w3-center w3-dark-grey w3-padding w3-round w3-text-sand">
									<h3 id="header2">Messages</h3>
								</header>
								<div class="w3-padding" style="overflow-y:scroll; height: 500px">
									<div ng-repeat="m in responseM" class="w3-panel w3-grey w3-round">
										<p>{{m.message}}</p>
										<!-- <span>
											<form >
												<input style="display: none" type="text" name="messagee" value="{{m.message}}">
												<input type="submit" name="readfootermessagee" value="Mark read">
												<input type="submit" name="deletefootermessagee" value="Delete">
											</form>
										</span> -->
									</div>
								</div>
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
		function modal(element){
			document.getElementById("images").src =  element.src;
			document.getElementById("modal").style.display = 'block';
		}

		function opentab(tab, pilltabhead){
			var pills = document.getElementsByClassName("pill");
			var pilltab = document.getElementsByClassName('pilltab');

			var tab = document.getElementById(tab);
			for (var i = 0; i < pills.length; i++) {
				pills[i].style.display = 'none';
				pilltab[i].classList.remove('w3-dark-grey');
			}
			tab.style.display = 'block';
			document.getElementById(pilltabhead).classList.add('w3-dark-grey');
		}

		opentab('home1','home1tab');

	</script>
</html>

<script type="text/javascript">
	setTimeout(session, 2000);
	function session()
	{
		$("#sessionpanel").remove();
	}
</script>
<script src="xmlfunc.js"></script>