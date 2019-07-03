<?php
$conn = mysqli_connect("localhost","root","",'bills');
$data = array();
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{      
    $sql = "select * from nonutility";
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
?>