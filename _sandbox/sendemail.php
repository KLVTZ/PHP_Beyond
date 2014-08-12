<?php 
	
	$to = "Justin Page <xjustinpagex@gmail.com>";
	$subject = "Mail Test at " . strftime('%T', time());
	$message = "This is a test.";
	$message = wordwrap($message,70);
	$from = "Justin Page <xjustinpagex@gmail.com>";
	$headers = "From: {$from}\r\n";
	$headers .= "Reply-To: {$from}\r\n";
	// $headers .= "Cc: {$to}\r\n";
	// $headers .= "Bcc: {$to}\r\n";
	$headers .= "X-Mailer: PHP/" .phpversion() . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/plain; charset=iso-8859-1";

	$result = mail($to, $subject, $message, $headers);
	echo $result ? 'Sent' : 'Error';

	

 ?>

