<footer id="footerr">
            <div id="sessionpanel"></div>
			<nav class="w3-button w3-bar w3-grey w3-round">
			    <ul class="w3-row">
			        <li class="w3-bar-item w3-col s4 m4 l4 w3-center">
			        	<ul style="list-style-type: none">
			        	    <li><a onclick="document.getElementById('w3-modal-sitemap').style.display='block'" href="#">
			        		SiteMap
			        		</a></li>
			        	    <li><a  href="loggedin.php">
			        		Already Logged In
			        		</a></li>
			        	    <li><a href="admin.php">
			        		Admin page
			        		</a></li>
			        	</ul>
			        </li><!--
			     --><li class="w3-bar-item w3-col s4 m4 l4 w3-center">			     		
			     		<ul style="list-style-type: none">
			        	    <li><a onclick="document.getElementById('w3-modal-contact').style.display='block'" href="#">
			     			Contacts
			     			</a></li>
			        	    <li><a  href="logon.php">
			        		Silverstoners log In
			        		</a></li>
			        	    <li><a onclick="document.getElementById('w3-modal-terms').style.display='block'" href="#">
			        		Terms and Privacy
			        		</a></li>
			        	</ul>
			     	</li>
			     <li class="w3-bar-item w3-col s4 m4 l4 w3-center">
			     		<ul style="list-style-type: none">
			        	    <li><a onclick="document.getElementById('w3-modal-feedback').style.display='block'" href="#">
			     			Feedback
			     			</a></li>
			        	    <li><a onclick="document.getElementById('w3-modal-message').style.display='block'" href="#">
			        		Message
			        		</a></li>
			        	    <li><p>@2017 KomeMichael</p>
			        		</a></li>
			        	</ul>
			     	</li>
			    </ul>
			</nav>

			<div class="w3-modal" id="w3-modal-sitemap">
        		<div class="w3-modal-content w3-sand w3-round">
        			<div class="w3-grey w3-display-container w3-padding">
        				<span class="w3-button w3-red w3-display-topright" 
        					onclick="document.getElementById('w3-modal-sitemap').style.display='none'">
        					&times;</span>
        				<span><h4><strong>Sitemap</strong></h4></span>
        			</div>
        			<div class="w3-containter">
        				<ul>
        				    <li><a href="index.php"> Home </a></li>
		        			<li><a href="about.php"> About Silverstone </a></li>
		        			<li><a href="logged in"> Account for silverstoners</a></li>
		        			<li><a href="bookings.php">Book our house for your event</a></li>
		        			<li><a href="ivcf.php">Information and contact for IVCF</a></li>
		        			<li><a href="ivcf.php">Need Prayer</a></li>
		        			<li><a href="gallery.php">Pictures of stuff going on in the house</a></li>
		        			<li><a href="kome.html"> Link to Stuff about kome</a></li>
		        			<li><a href="hans.html"> Link to Stuff about Hans</a></li>
		        			<li><a href="alex.html"> Link to Stuff about Alex</a></li>
		        			<li><a href="Jeremyd.html"> Link to Stuff about Jeremy Dyck</a></li>
		        			<li><a href="mark.html"> Link to Stuff about Mark</a></li>
		        			<li><a href="jeremys.html">Link to Stuff about Jeremy Smith</a></li>
        				</ul>
        			</div>			        			
        		</div>
        	</div>

        	<div class="w3-modal" id="w3-modal-contact">
        		<div class="w3-modal-content w3-sand w3-round">
        			<div class="w3-grey w3-display-container w3-padding">
        				<span class="w3-button w3-red w3-display-topright" 
        					onclick="document.getElementById('w3-modal-contact').style.display='none'">
        					&times;</span>
        				<span><h4><strong>Contact</strong></h4></span>
        			</div>
        			<div class="w3-containter">
        				<ul>
        				    <li><a href="https://www.facebook.com/kome.michael?ref=bookmarks"> Kome Facebook </a></li>
		        			<li><a href="komemichael@gmail.com"> Email Kome</a></li>
		        			<li><a href="komemichael@gmail.com"> Kome Ingragram(Insta)</a></li>
        				</ul>
        			</div>			        			
        		</div>
        	</div>
        	<div class="w3-modal" id="w3-modal-terms">
        		<div class="w3-modal-content w3-sand w3-round">
        			<div class="w3-grey w3-display-container w3-padding">
        				<span class="w3-button w3-red w3-display-topright" 
        					onclick="document.getElementById('w3-modal-terms').style.display='none'">
        					&times;</span>
        				<span><h4><strong>Terms and Conditions</strong></h4></span>
        			</div>
        			<div class="w3-containter w3-padding">
        				<P>Terms and Conditions for stuffs like site-use and disclaimers for coupons will be available a time passes by so keep yourself updated or I'll do it for you.</P>
        			</div>			        			
        		</div>
        	</div>
        	<div class="w3-modal" id="w3-modal-feedback">
        		<div class="w3-modal-content w3-sand w3-round">
        			<div class="w3-grey w3-display-container w3-padding">
        				<span class="w3-button w3-red w3-display-topright" 
        					onclick="document.getElementById('w3-modal-feedback').style.display='none'">
        					&times;</span>
        				<span><h4><strong>Feed Back about the website</strong></h4></span>
        			</div>
        			<div class="w3-containter w3-padding">
        				<P>WE appreciate any feedback on what you want Kome to add to the website . Please fill out the form below indicaing our name and what you want to see in the website and Kome will gt back to you ASAP about how long it will take and if it is feasible in the nearest future.</P>
        				<br>
        				<form action="footer.php" method="post">
        					<input type="text" name="feedback" class="w3-input">
                            <input class="w3-button w3-bar w3-round w3-grey" type="submit" value="Submit Feedback" name="submitfeedback">
        				</form>
        			</div>			        			
        		</div>
        	</div>
        	<div class="w3-modal" id="w3-modal-message">
        		<div class="w3-modal-content w3-sand w3-round">
        			<div class="w3-grey w3-display-container w3-padding">
        				<span class="w3-button w3-red w3-display-topright" 
        					onclick="document.getElementById('w3-modal-message').style.display='none'">
        					&times;</span>
        				<span><h4><strong>Message to one of the guys</strong></h4></span>
        			</div>
        			<div class="w3-containter w3-padding">
        				<P>Drop a message to any onf the guys, they will read your message when they come online. The guys rock</P>
        				<br>
        				<form action="footer.php" method="post">
        					<select class="w3-select" name="option">
								<option value="" disabled selected>Message To</option>
								<option value="Kome">Kome the Awesome</option>
								<option value="Jeremys">Jeremy the smart</option>
								<option value="Jeremyd">Jeremy the wise</option>
								<option value="Alex">Alex the good friend</option>
								<option value="Hans">Hans the great</option>
								<option value="Mark">Mark the genius</option>
							</select>
							<hr> 
        					<input type="text" name="message" placeholder="message" class="w3-input">
        					<br>
                            <input class="w3-button w3-bar w3-round w3-grey" type="submit" value="
                            Send Message" name="submitmessage">
        				</form>
        			</div>			        			
        		</div>
        	</div>
		</footer>

<?php

    if (isset($_POST['submitmessage']))
    {message();}
    if (isset($_POST['submitfeedback']))
    {feedback();}

    function message()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $messageperson  = test_input($_POST["option"]);
            $message = test_input($_POST["message"]);

            $servername = "localhost";
            $users = "root";
            $passwrd = "";
            $dbname = "messages";
            
            $conn = mysqli_connect($servername, $users, $passwrd, $dbname);
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO footermessage (messageperson, message) VALUES('$messageperson', '$message')";

            if (!(mysqli_query($conn, $sql))) {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            else {

                mysqli_close($conn);
                sleep(2);
                $message = "<div id='sessionpanel' style='display:block' class='w3-modal w3-round'><div class='w3-modal-content w3-animate-zoom w3-card-4 w3-round'><div id='sessionpanelmessage' class='w3-text-white w3-padding w3-round w3-green'><h3 class='w3-center'>Thanks for sending your message</h3></div></div></div>";
                echo ("<script type='text/javascript'>
                       document.getElementById('footerr').innerHTML = \"".$message. "\";
                        setTimeout(goback, 2000);
                       function goback(){window.history.go(-1);}
                    </script>");
            }
            
        }
    }

    function feedback()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $feedback  = test_input($_POST["feedback"]);

            $servername = "localhost";
            $users = "root";
            $passwrd = "";
            $dbname = "messages";
            
            $conn = mysqli_connect($servername, $users, $passwrd, $dbname);
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO footerfeedback (feedback) VALUES('$feedback')";

            if (!(mysqli_query($conn, $sql))) {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            else {

                mysqli_close($conn);
                sleep(2);
                $message = "<div id='sessionpanel' style='display:block' class='w3-modal w3-round'><div class='w3-modal-content w3-animate-zoom w3-card-4 w3-round'><div id='sessionpanelmessage' class='w3-text-white w3-padding w3-round w3-green'><h3 class='w3-center'>Thanks for sending your message</h3></div></div></div>";
                echo ("<script type='text/javascript'>
                       document.getElementById('footerr').innerHTML = \"".$message. "\";
                       setTimeout(goback, 2000);
                       function goback(){window.history.go(-1);}
                    </script>");
            }
            
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>