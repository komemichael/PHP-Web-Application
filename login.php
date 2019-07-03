<div id="login">
	<div class="w3-container w3-card w3-padding w3-dark-grey">
		<h1 class="w3-text-sand w3-center">LOG IN SILVERSTONERS</h1>
		<br>
		<div class="w3-center"><img src="images/user_avatar.png" alt="Avatar" style="width:15%" class="w3-circle w3-center"></div>
		<hr><br>
		<form action="login.php" method="POST" class="w3-padding">
			<input ng-model="username" class="w3-input w3-round w3-text-black w3-animate-input" type="text" name="username" placeholder="username">
			<br><br>
			<input ng-model="password" class="w3-input w3-round w3-text-black w3-animate-input" type="password" name="password" placeholder="password">
			<br>
			<input type="checkbox" class="w3-check" name="">
			<button class="w3-button w3-round">Submit</button>
			<br>
		</form>
	</div>
</div>

<?php
	@login();
	
	function login()
	{
		include('config.php');
		session_start();

	  	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $username = mysqli_real_escape_string($db,$_POST['username']);
	      	$password = mysqli_real_escape_string($db,$_POST['password']);

		    $sql = "SELECT loginid FROM login WHERE username = '$username' and password = '$password'";

	      	$result = mysqli_query($db,$sql);
	      	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      	$active = $row['active'];
		    $count = mysqli_num_rows($result);

		    if($count == 1) {
				$_SESSION['login_user'] = $username;
				echo ("<div id='sessionpanel' class='w3-panel w3-green w3-round'>
				    <h3>Welcome welcome" . $username . "</h3></div>");
				$success = "success!!!";
				sleep(3);
				header("location: loggedin.php");
			}else {
			 	$message = "<div id='sessionpanel' class='w3-panel w3-center w3-green w3-round'><h3>Please try again: Log In Failed!</h3></div>";
				echo ("<script type='text/javascript'>
				       document.write(\"".$message. "\");
				    </script>");
				sleep(4);
				header("location:logon.php");
			}
		}
	}
?>