<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   //$ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   //$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      $message = "<div id='sessionpanel' class='w3-modal w3-round'><div class='w3-modal-content w3-animate-zoom w3-card-4 w3-round'><div id='sessionpanelmessage' class='w3-text-white w3-padding w3-round w3-red'><h3 class='w3-center'>Invalid Log In</h3></div></div></div>";
      echo ("<script type='text/javascript'>
               document.write(\"".$message. "\");
            </script>");
      sleep(2);
      header("location:logon.php");
   }
   else{
      $message = "<div id='sessionpanel' class='w3-modal w3-round'><div class='w3-modal-content w3-animate-zoom w3-card-4 w3-round'><div id='sessionpanelmessage' class='w3-text-white w3-padding w3-round w3-green'><h3 class='w3-center'>Welcome back " . $user_check . " </h3></div></div></div>"; 
   	echo ("<script type='text/javascript'>
               document.write(\"".$message. "\");
            </script>");
   }
?>