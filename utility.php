<?php
    $conn = mysqli_connect("localhost","root","",'bills');
    utility($conn);

    if (isset($_POST['submitconfirmpaid'])) {
        $date = $_POST['datepaid'];
        echo $date;
        $amount = $_POST['howmuchpaid'];
        $paidby = $_POST['whopaid'];
        delete($conn, $date, $amount, $paidby);
    }

    

    function delete($conn,$valuedate, $valueamount, $paidby)
    {
        if (!$conn)
        { die("Connection failed: " . mysqli_connect_error()); }
        else
        {     
            $sqls = "select * from utility where date='".$valuedate."'";//" && amount='".$valueamount."'";
            $result = $conn->query($sqls);
            if($result->num_rows > 0)
            {
                $row = $result->fetch_array();
                $id = $row["id"];
                $payto = $row["payto"];

                $initialamount = $row["totalamount"];
                $initialamountbysix = $initialamount / 6;
                $amounttoupdateto = $initialamountbysix - $valueamount;

                echo $paidby." ";
                echo $amounttoupdateto;

                $sql = "UPDATE utility SET ".$paidby." = ".$amounttoupdateto." WHERE id = $id";
                if (!$res = $conn->query($sql)) {
                   $_SESSION['alertify'] = 'alertify.error("' . $link->error . '")';
                } else {
                   $_SESSION['alertify'] = 'alertify.success("Success")';
                }
            }
            else
            {
                echo"0 results";
            } 
            $conn->close();
        }
        echo ("<div id='sessionpanel' class='w3-panel w3-green w3-round'>
            <h3>Success </h3></div>");
        sleep(2);
        header("location: loggedin.php");
    }

    function utility($conn)
    {
        $data = array();
        // Check connection
        if (!$conn)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        else
        {      
            $sql = "select * from utility";
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