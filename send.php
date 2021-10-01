<?php
date_default_timezone_set('America/Sao_Paulo');
 
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
// i am using trim to avoid empty message
if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['message']) && !empty(trim($_POST['message'])))) {
 
	$name = !empty($_POST['name']) ? $_POST['name'] : 'Missing'; // ? is true and : false
	$email = $_POST['email'];
	$subject = !empty($_POST['subject']) ? utf8_decode($_POST['subject']) : 'Missing';
	$message = $_POST['message'];
	$data = date('d/m/Y H:i:s');
 
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'derekprates37@gmail.com';
	$mail->Password = '19331422';
	$mail->Port = 587;
 
	$mail->setFrom('derekprates37@gmail.com');
	$mail->addAddress('derekprates37@gmail.com');
 
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = "Name: {$name}<br>
				   Email: {$email}<br>
				   Message: {$message}<br>
				   Data/hora: {$data}";
 
	if($mail->send()) {
		echo 'Email sent.';
	} else {
		echo 'Error Email.';
	}
} else {
	echo 'Dont sent: input the email and message.';
}
