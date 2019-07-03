<div id="createusertab">
	<span class="w3-button w3-red w3-display-topright" onclick="document.getElementById('createuser').style.display='none'">&times;</span>
	<div class="w3-container w3-card w3-padding w3-dark-grey w3-round">
		<h1 class="w3-text-sand w3-center">SIGN UP TO BE A SILVERSTONER</h1>
		<br>
		<div class="w3-center"><img src="images/user_avatar.png" alt="Avatar" style="width:15%" class="w3-circle w3-center"></div>
		<hr><br>
		<form action="createuser.php" method="POST" class="w3-padding">
			<input ng-model="firstname" class="w3-input w3-round w3-text-black w3-animate-input" type="text" name="firstname" placeholder="Firstname">
			<br><br>
			<input ng-model="lastname" class="w3-input w3-round w3-text-black w3-animate-input" type="text" name="lastname" placeholder="Lastname" >
			<br><br>
			<input ng-model="username" class="w3-input w3-round w3-text-black w3-animate-input" type="text" name="username" placeholder="Username">
			<br><br>
			<input ng-model="password1" class="w3-input w3-round w3-text-black w3-animate-input" type="password" name="password1" placeholder="Password" onchange="checkboxiftrue()">
			<br>	
			<input ng-model="password2" class="w3-input w3-round w3-text-black w3-animate-input" type="password" name="password2" placeholder="Confirm password" onchange="checkboxiftrue()">
			<br>
			<input id="checkbox" type="checkbox" class="w3-check" name="check" onclick="password_check()">
			<button id="submitbutton" class="w3-button w3-disabled w3-round" disabled="true">Submit</button>
			<br>
		</form>
		<script> 
			function checkboxiftrue()
			{
				checkbox.checked = false;
				password_check();
			}

			function password_check(){
				var password1 = document.getElementsByName("password1")[0].value;
				var password2 = document.getElementsByName("password2")[0].value;
				var button = document.getElementById("submitbutton");
				if ((password1 == password2) && (checkbox.checked)) {
					button.classList.remove("w3-disabled");
					button.disabled = false;
				}
				else
				{
					button.classList.add("w3-disabled");
					button.disabled = true;
				}
			}
		</script>
	</div>
</div>

<?php
	@create();

	function create()
	{
		include('config.php');
	  	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  		$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
	  		$lastname = mysqli_real_escape_string($db,$_POST['lastname']);
		    $username = mysqli_real_escape_string($db,$_POST['username']);
	      	$password111 = mysqli_real_escape_string($db,$_POST['password1']);
	      	$password211 = mysqli_real_escape_string($db,$_POST['password2']);

		    if ($password211 == $password111) {
		    	$sql = "INSERT INTO tempcreateuser(firstname, lastname, username, password) VALUES('$firstname', '$lastname','$username', '$password111')";

			    if (!(mysqli_query($db, $sql))) {
			      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			    }
			    else {
		     		mysqli_close($conn);
		     		
		     		$message = "<div id='sessionpanel' class='w3-modal w3-round'><div class='w3-modal-content w3-animate-zoom w3-card-4 w3-round'><div id='sessionpanelmessage' class='w3-text-white w3-padding w3-round w3-red'><h3 class='w3-center'>Create user Successful; Waiting for Admin to confirm registration</h3></div></div></div>";
		     		 echo ("<script type='text/javascript'>
		               document.write(\"".$message. "\");
		            </script>");
		      		sleep(5);
					header("location: logon.php");
			    }
		    }
		}
	}
?>