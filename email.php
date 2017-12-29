<?php
require("PHPMailerAutoload.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "tusharsadana@gmail.com";  // SMTP username
$mail->Password = "TS!@#HILLS"; // SMTP password
$mail->Port= "587";

$mail->From = "tusharsadana@gmail.com";
$mail->FromName = "Mailer";
$mail->AddAddress("tusharsadana@gmail.com", "EAI SOCIETY");



$mail->WordWrap = 50;                                 // set word wrap to 50 characters
    // optional name
$mail->IsHTML(true);                                  // set email format to HTML
$name=$_POST['name'];

$email=$_POST['email'];
$message=$_POST['msg'];
$mail->Subject = "New Enquiry";
$mail->Body    = "name: $name<br> email:$email  <br> message: $message";


if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent. Redirecting...";


?>
<meta http-equiv="refresh" content="1.5; url=index.php" />