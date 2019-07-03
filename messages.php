<?php
	session_start();
	message();

	if (isset($_POST['deletefootermessage'])) {
		$message = $_POST["message"];
		echo $message;
		//deletemessage($message);
	}
	// if (isset('readfootermessage')) {
	// 	markreadmessage($_POST["message"]);
	// }

	// function deletemessage($message)
	// {
	// 	$conn = mysqli_connect("localhost","root","",'messages');

	// 	$data = array();
	// 	if (!$conn)
	// 	{die("Connection failed: " . mysqli_connect_error());}
	// 	else
	// 	{    
	// 		$sql = "select id from footermessage where message = '".$message."' ";
	// 	    $id = $conn->query($sql);

	// 	    $sql = "ALTER TABLE footermessage DROP COLUMN ".$id.;

	// 		if (!$conn->query($sql))
	// 		{
	// 		die('Error: ' . mysql_error());
	// 		}
	// 		echo "1 record deleted go back to delete another!";

	// 	    $conn->close();
	// 	}
	// }

	function message()
	{
		$conn = mysqli_connect("localhost","root","",'messages');
		$data = array();
		// Check connection
		if (!$conn)
		{
		    die("Connection failed: " . mysqli_connect_error());
		}
		else
		{      
		    $sql = "select * from footermessage where messageperson = '".$_SESSION['login_user']."' ";
		    $result = $conn->query($sql);

		    if($result->num_rows > 0)
		    {

		        while ($row = $result->fetch_array())
		        {

		            $data[] = $row;

		        }
		        $res_final = json_encode($data);         
		        echo $res_final;
		    } 
		    else
		    {
		        echo"0 results";

		    }   
		    $conn->close();
		}
	}
?>