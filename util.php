<?php
	$user = $password = "";

  	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $date  = test_input($_POST["date"]);
	    $month  = test_input($_POST["month"]);
	    $billtype = test_input($_POST["billtype"]);
	    $totalamount = test_input($_POST["totalamount"]);
	    $payto = test_input($_POST["payto"]);

	    $six = 6;
	    $amountby6 = $totalamount / $six;

	    $servername = "localhost";
	    $users = "root";
	    $passwrd = "";
	    $dbname = "bills";
	    
	    $conn = mysqli_connect($servername, $users, $passwrd, $dbname);
	    // Check connection
	    if (!$conn) {
	      die("Connection failed: " . mysqli_connect_error());
	    }

	    $sql = "INSERT INTO utility (date, month, billtype, totalamount, Kome, Alex, Smith, Dyck, Hans, Mark, payto) VALUES('$date', '$month','$billtype','$totalamount', '$amountby6', '$amountby6', '$amountby6', '$amountby6', '$amountby6', '$amountby6','$payto')";

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


