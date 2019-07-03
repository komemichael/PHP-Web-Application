<?php
	$file = $_GET['file'];
	$date = date("d-m-y-h:m");

	switch ($file) {
		case 'utility':
			util($date);
			break;
		case 'nonutility':
			nonutil($date);
			break;
		case 'prayer':
			prayer($date);
			break;
		default:
			echo 'NO File selected for download';
			exit();
			break;
	}

	function util($date)
	{
		$conn = mysqli_connect("localhost","root","","bills");

		$sql = "SELECT * FROM utility";
		$result = $conn->query($sql);
		$num_column = mysqli_num_fields($result);		

		$csv_header = '';
		for($i=0;$i<$num_column;$i++) {
			$csv_header .= '"' . mysqli_field_name($result,$i) . '",';
		}	
		$csv_header .= "\n";

		$csv_row ='';
		while($row = $result->fetch_row()) {
			for($i=0;$i<$num_column;$i++) {
				$csv_row .= '"' . $row[$i] . '",';
			}
			$csv_row .= "\n";
		}
		/* Download as CSV File */
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename=util'.$date.'.csv');
		echo $csv_header . $csv_row;
		exit;
	}

	function nonutil($date)
	{
		$conn = mysqli_connect("localhost","root","","bills");

		$sql = "SELECT * FROM nonutility";
		$result = $conn->query($sql);
		$num_column = mysqli_num_fields($result);		

		$csv_header = '';
		for($i=0;$i<$num_column;$i++) {
			$csv_header .= '"' . mysqli_field_name($result,$i) . '",';
		}	
		$csv_header .= "\n";

		$csv_row ='';
		while($row = $result->fetch_row()) {
			for($i=0;$i<$num_column;$i++) {
				$csv_row .= '"' . $row[$i] . '",';
			}
			$csv_row .= "\n";
		}
		/* Download as CSV File */
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename=nonutil'.$date.'.csv');
		echo $csv_header . $csv_row;
		exit;
	}

	function prayer($date)
	{
		$conn = mysqli_connect("localhost","root","","prayer");

		$sql = "SELECT * FROM prayer";
		$result = $conn->query($sql);
		$num_column = mysqli_num_fields($result);		

		$csv_header = '';
		for($i=0;$i<$num_column;$i++) {
			$csv_header .= '"' . mysqli_field_name($result,$i) . '",';
		}	
		$csv_header .= "\n";

		$csv_row ='';
		while($row = $result->fetch_row()) {
			for($i=0;$i<$num_column;$i++) {
				$csv_row .= '"' . $row[$i] . '",';
			}
			$csv_row .= "\n";
		}
		/* Download as CSV File */
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename=prayer'.$date.'.csv');
		echo $csv_header . $csv_row;
		exit;
	}

	function mysqli_field_name($result, $field_offset)
	{
	    $properties = mysqli_fetch_field_direct($result, $field_offset);
	    return is_object($properties) ? $properties->name : null;
	}
?>