 <?php
//     $conn = mysqli_connect("localhost","root","",'bills');
//     //utility($conn);
//     $date = $_GET['date'];
//     $amount = $_GET['amount'];
//     delete($conn, $date, $amount);

//     function delete($conn,$valuedate, $valueamount)
//     {
//         if (!$conn)
//         { die("Connection failed: " . mysqli_connect_error()); }
//         else
//         {     
//             $sqls = "select * from nonutility where date='".$valuedate."' && amount='".$valueamount."'";
//             $result = $conn->query($sqls);
//             if($result->num_rows > 0)
//             {
//                 $row = $result->fetch_array();
//                 $id = $row["id"];
//                 echo $id;
//                 // $sql = "DELETE FROM nonutility WHERE id = $id";

//                 $sql = "UPDATE nonutility SET notes = NULL WHERE id = $id";
//                 if (!$res = $conn->query($sql)) {
//                     $_SESSION['alertify'] = 'alertify.error("' . $link->error . '")';
//                 } else {
//                     $_SESSION['alertify'] = 'alertify.success("Success")';
//                 }
//             }
//             else
//             {
//                 echo"0 results";
//             } 
//             $conn->close();
//         }
//     }

    // function utility($conn)
    // {
    //     $data = array();
    //     // Check connection
    //     if (!$conn)
    //     {
    //         die("Connection failed: " . mysqli_connect_error());
    //     }
    //     else
    //     {      
    //         $sql = "select * from utility";
    //         $result = $conn->query($sql);

    //         if($result->num_rows > 0)
    //         {

    //             while ($row = $result->fetch_array())
    //             {

    //                 $data[] = $row;

    //             }
    //             $res_final = json_encode($data);         
    //             echo $res_final;
    //         } 
    //         else
    //         {
    //             echo"0 results";

    //         }   
    //         $conn->close();
    //     }

    // }
?>

<div>
    <form enctype="multipart/form-data" method="post" action="fileprocessing.php">
        <input type="file" name="fileToUpload" /><br />
        <input type="submit" value="Upload File" />
    </form>
</div>