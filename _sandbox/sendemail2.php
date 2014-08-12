<?php 

	require_once("../photo_gallery/includes/PHPMailer/PHPMailerAutoload.php");
	
	$to_name = "Junk Mail";
	$to = "xjustinpagex@gmail.com";
	$subject = "Mail Test at " . strftime('%T', time());
	$message = "Whatup my Nigga! It works!";
	$message = wordwrap($message,70);
	
	$from_mame = "Justin Page";
	$from = "xjustinpagex@gmail.com";

	// PHP mail version (default)
	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->Port = "465";
	$mail->SMTPAuth = true;
	$mail->Username = 'xjustinpagex@gmail.com';                           
	$mail->Password = 'Battosai@101';                          
	$mail->SMTPSecure = 'ssl';


	$mail->FromName = $from_mame;
	$mail->From = $from;
	$mail->addAddress($to, $to_name);
	$mail->Subject = $subject;
	$mail->Body = $message;

	

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';



 ?>

