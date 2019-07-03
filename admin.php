<?php
   include('sessionadmin.php');
?>
<html>
	<head>
		<title>Admin aka Kome</title>
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
		<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script><!-- 
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
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
				<span class="w3-text-black"><b>Admin Page</b></span>
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
						            	<a href="loggedin.php" class="w3-bar-item w3-button w3-hover-sand w3-margin-bottom w3-hover-shadow w3-center">
						            		<strong>LogIn test</strong>
						            	</a>
						            </div>
					            </div>
							</div>
						</div>
					</div>

					<!-- Body of the body -->
					<div class="w3-col m6 l7 w3-padding">
						<div class="w3-padding w3-dark-grey w3-margin-top w3-margin-bottom w3-round hovercard">
							<div class="w3-padding">
								<h3 class="w3-text-sand w3-margin-bottom">Confirm New User</h3>
								<form class="w3-padding" action="admin.php" method="post">
									<input id="fname" class="w3-input w3-text-black" type="text" name="firstnameinput">
									<br>
									<input id="lname" class="w3-input w3-text-black " type="text" name="lastnameinput">
									<br>
									<input id="uname" class="w3-input w3-text-black" type="text" name="usernameinput">
									<br>
									<input id="pass" class="w3-input w3-text-black" type="text" name="passwordinput">
									<br>
									<input class="w3-button w3-round w3-bar w3-grey" type="submit" value="Confirm User" name="submituserpublic">
								</form>
							</div>
						</div>
						<br>
						<div class="w3-padding w3-dark-grey w3-margin-top w3-margin-bottom w3-round hovercard">
							<div class="w3-padding">
								<h3 class="w3-text-sand w3-margin-bottom">Confirm Prayer Points</h3>
								<form class="w3-padding" action="admin.php" method="post">
									<input id="prayerinput" class="w3-input w3-text-black" type="text" name="prayerinput">
									<br>
									<input class="w3-button w3-bar w3-round w3-grey" type="submit" value="Confirm Prayer" name="submitprayer">
								</form>
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

</html>
<script type="text/javascript">
	setTimeout(session, 3000);
	function session()
	{
		document.getElementById("sessionpanel").style.visibility = 'hidden';
	}
</script>
<script src="xmlfunc.js"></script>

<?php
	@confirmpublicuser();
	@confirmprayer();

	if(isset($_POST['submituserpublic']))
	{
	   updatepubliclogindb();
	}

	if(isset($_POST['submitprayer']))
	{
	   updateprayerdb();
	}

	function updatepubliclogindb()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $firstname = test_input($_POST["firstnameinput"]);
		    $lastname = test_input($_POST["lastnameinput"]);
		    $username = test_input($_POST["usernameinput"]);
		    $password = test_input($_POST["passwordinput"]);

		    $servername = "localhost";
		    $users = "root";
		    $passwrd = "";
		    $dbname = "login";
		    
		    $conn = mysqli_connect($servername, $users, $passwrd, $dbname);
		    // Check connection
		    if (!$conn) {
		      die("Connection failed: " . mysqli_connect_error());
		    }

		    $sql = "INSERT INTO login (firstname, lastname, username, password) VALUES('$firstname', '$lastname','$username', '$password')";

		    if (!(mysqli_query($conn, $sql))) {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		    }
		    else {
		    	$sql1 = "UPDATE tempcreateuser SET ischecked=1 WHERE username='".$username."'";
		    	if (!(mysqli_query($conn, $sql1))) {
			      echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
			    }
			    else
			    {
			    	mysqli_close($conn);
		     		sleep(3);
		     		echo "<script>
		             			window.history.go(-1);
		     			</script>";
		     		}
		    }
		    
		}
	}

	function updateprayerdb()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $prayerpoint = test_input($_POST["prayerinput"]);

		    $servername = "localhost";
		    $users = "root";
		    $passwrd = "";
		    $dbname = "prayer";
		    
		    $conn = mysqli_connect($servername, $users, $passwrd, $dbname);
		    // Check connection
		    if (!$conn) {
		      die("Connection failed: " . mysqli_connect_error());
		    }

		    $sql = "INSERT INTO prayer (prayerpoint) VALUES('$prayerpoint')";

		    if (!(mysqli_query($conn, $sql))) {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		    }
		    else {
		    	$sql1 = "UPDATE tempprayer SET ischecked=1 WHERE tempprayer='".$prayerpoint."'";
		    	if (!(mysqli_query($conn, $sql1))) {
			      echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
			    }
			    else
			    {
			    	mysqli_close($conn);
		     		sleep(3);
		     		echo "<script>
		             			window.history.go(-1);
		     			</script>";
		     		}
		    }
		    
		}
	}

	function confirmpublicuser()
	{
		$conn = mysqli_connect("localhost","root","",'login');
		$data = array();
		if (!$conn){die("Connection failed: " . mysqli_connect_error());}
		else
		{      
		    $sql = "select * from tempcreateuser where ischecked=0";
		    $result = $conn->query($sql);
		    if ($result->num_rows > 0) {
			    $row = $result->fetch_array();
			    $firstname = $row["firstname"];
			    $lastname = $row["lastname"];
			    $username = $row["username"];
			    $password = $row["password"];

			    echo "<script>document.getElementById('fname').value = '".$firstname."';document.getElementById('lname').value = '".$lastname."';document.getElementById('uname').value = '".$username."';document.getElementById('pass').value = '".$password."' ;</script>";
		        // echo "<script>document.getElementById('insertuser').innerHTML = \"".$message."\"</script>";
			} else {
			    echo "0 results";
			}  
		    $conn->close();
		}
	}

	function confirmprayer()
	{
		$conn = mysqli_connect("localhost","root","",'prayer');
		$data = array();
		if (!$conn){die("Connection failed: " . mysqli_connect_error());}
		else
		{      
		    $sql = "select * from tempprayer where ischecked=0";
		    $result = $conn->query($sql);
		    if ($result->num_rows > 0) {
			    $row = $result->fetch_array();
			    $prayerpoint = $row["tempprayer"];
			    echo "<script>console.log('here');</script>";
			    echo "<script>document.getElementById('prayerinput').value = '".$prayerpoint."' ;</script>";
		        // echo "<script>document.getElementById('insertuser').innerHTML = \"".$message."\"</script>";
			} else {
			    echo "0 results";
			}  
		    $conn->close();
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
 ?>

