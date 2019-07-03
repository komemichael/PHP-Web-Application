<?php 

	$filename = $_FILES["fileToUpload"]["name"];
	$filetype = $_FILES["fileToUpload"]["type"];
	$filesize = $_FILES["fileToUpload"]["size"] / 1024;
	$tempfile = $_FILES["fileToUpload"]["tmp_name"];
	$ischecked = $_POST['ischecked'];
	$uploadedby = $_GET['user'];
	$user_check = $_SESSION['login_user'];

	//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploadfiles/" . $_FILES["fileToUpload"]["name"]);

	if (isset($_POST['uploadfile'])) {

		$conn = mysqli_connect("localhost","root","","messages");
		if (!$conn) {
	      die("Connection failed: " . mysqli_connect_error());
	    }

	    $sql = "INSERT INTO uploadedfile (filename, filetype, filesize, tempfile, ischecked, uploadedby) VALUES('$filename', '$filetype','$filesize','$tempfile', '$ischecked','$uploadedby')";

	    if (!(mysqli_query($conn, $sql))) {
	      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	    }
	    else {
     		mysqli_close($conn);
     		if ($_FILES["fileToUpload"]["error"] > 0)
		   {
			   echo "Apologies, an error has occurred.";
			   echo "Error Code: " . $_FILES["fileToUpload"]["error"];
			   }
			else
			   {

			   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploadfiles/" . $_FILES["fileToUpload"]["name"]);
			}

			echo '<script> window.location.replace("loggedin.php");</script>';

     		sleep(3);
     		echo "<script>
             			window.history.go(-1);
     			</script>";
	    }
	}
?>