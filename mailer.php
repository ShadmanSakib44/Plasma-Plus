<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

if(isset($_POST['SendMail']))
{

require 'vendor/autoload.php'; 
    
  $message= $_POST['message'];
  $from= $_POST['from'];

$mail = new PHPMailer(true); 

try { 
	
	$phpmailer->isSMTP();
	$phpmailer->Host = 'smtp.mailtrap.io';
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port = 2525;
	$phpmailer->Username = '993550a3c402ad';
	$phpmailer->Password = '4be53b4d3b6812';
	
	$mail->setFrom('from@gmail.com', $from);		 
	$mail->addAddress('yyyyyy@gmail.com'); 
	$mail->addAddress('yyyyyy@gmail.com', 'Admin');         // receipient mail address

	
	$mail->isHTML(true);								 
	$mail->Subject = 'Complaint From User On Webchat'; 
	$mail->Body = $message; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 
}


?> 
