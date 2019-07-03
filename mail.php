<?php 
    ini_set('SMTP','localhost');
	ini_set('smtp_port',25);
	$to = 'komemichael@gmail.com';
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers  .= "From: NO-REPLY<no-reply@mydomain.com>" . "\r\n";
	$subject = "Confirmation For Request";
	$message = '<html>
	                <body>
	                    <p>Hi .$firstname. .$lastname.</p>
	                    <p>
	                        We recieved below details from you. Please use given Request/Ticket ID for future follow up:
	                    </p>
	                    <p>
	                        Your Request/Ticket ID: <b>.$ticketID.</b>
	                    </p>
	                    <p>
	                    Thanks,<br>
	                    .$team. Team.
	                    </p>
	                </body>
	            </html>';
	mail( $to, $subject, $message, $headers );
?>