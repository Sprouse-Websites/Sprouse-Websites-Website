<?php
$page_title = "Contact Us";
include 'includes/header.php';

?>
<!-- <h1>Are you a</h1>
<a href="service.php" class="w3-bar-item w3-button" style="font-size:16pt;">Exsisting Customer</a>
<vr style="font-size:18pt;"></vr>
<a href="buy.php" class="w3-bar-item w3-button" style="font-size:16pt;">New Customer</a> -->


<br>
<h3>Message Delivered</h3>
<br>

<?php
$_SESSION["fname"] = $_POST["fname"];
$_SESSION["lname"] = $_POST["lname"];
$_SESSION["comment"] = $_POST["comment"];
$_SESSION["phone"] = $_POST["phone"];
$_SESSION["email"] = $_POST["email"];


// Code from https://stackoverflow.com/questions/5335273/how-to-send-an-email-using-php

require 'PHPMailerAutoload.php';

use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.123-reg.co.uk';                   // Specify main SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'joel@sprousewebsites.co.uk';       // SMTP username
$mail->Password = '3Js&D@9Tr';                        // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'joel@sprousewebsites.co.uk';
$mail->FromName = 'Customer Service';

$mail->addAddress($_SESSION["email"], $_SESSION["fname"]." ".$_SESSION["lname"]);     // Add a recipient
// Above line can be duplicated to add more than one recipient

$mail->addReplyTo('joel@sprousewebsites.co.uk', 'Customer Service');
// $mail->addCC('cc@example.com');
$mail->addBCC('joel@sprousewebsites.co.uk');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Message to Sprouse Websites';
$mail->Body    = 'Thanks for your message. Just to recap, your message said: \n First Name: $_SESSION["fname"] \n $_SESSION["lname"]';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>

<?php include 'includes/footer.php'; ?>
