<?php
require_once('PHPMailer-master/src/phpmailer.php');
require_once('PHPMailer-master/src/smtp.php');
require_once('PHPMailer-master/src/pop3.php');
require_once('PHPMailer-master/src/Exception.php');
require_once('PHPMailer-master/src/OAuth.php');
	$mail=new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth=true;
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->SMTPSecure='ssl';
	$mail->Username='long4581994@gmail.com';
	$mail->Password='khoa1234';
	$mail->CharSet='utf-8';
	$mail->setFrom($mailnhan,'Bakery PASTRY SHOP');
	$mail->Subject='Đặt hàng thành công';
	$mail->msgHTML($noidungmail);
	$mail->addAddress($mailnhan);
	$mail->send();

?>