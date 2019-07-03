<?php
	$user = $password = "";

  	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $date  = test_input($_POST["date"]);
	    $billname = test_input($_POST["namebill"]);
	    $amount = test_input($_POST["amount"]);
	    $six = 6;
	    $amountby6 = $amount / $six;
	    $notes = test_input($_POST["note"]);

	    $servername = "localhost";
	    $users = "root";
	    $passwrd = "";
	    $dbname = "bills";
	    
	    $conn = mysqli_connect($servername, $users, $passwrd, $dbname);
	    // Check connection
	    if (!$conn) {
	      die("Connection failed: " . mysqli_connect_error());
	    }

	    $sql = "INSERT INTO nonutility (date, namebill, amount, amountbysix, notes) VALUES('$date', '$billname','$amount', '$amountby6','$notes')";

	    if (!(mysqli_query($conn, $sql))) {
	      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	    }
	    else {

     		mysqli_close($conn);
     		sleep(3);
     		echo "<script>
             			window.history.go(-1);
     			</script>";
	    }
	    
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	//<meta http-equiv="refresh" content="3; url=http://localhost/projects/site/loggedin.html">
?>


