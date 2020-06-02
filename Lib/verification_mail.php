<?php
session_start();
require 'PHPMailerAutoload.php';
require 'credential.php';
include '1.php';
$email=$_SESSION['email'];
$query="SELECT * FROM student_login WHERE Email='$email'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
$otp=rand(1111,9999);
$_SESSION['otp']=$otp;
$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP(); //specially for localhost purpose                                     // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                   
$mail->setFrom(EMAIL, 'Institute Library Managment Pvt Ltd.');
$mail->addAddress($_SESSION['email']);     
$mail->addReplyTo(EMAIL);
$mail->isHTML(true);                                  

$mail->Subject = 'OTP Verification';
$mail->Body    = 'Hello,'.$result['Name'].'<br>Here is your <b>OTP:'.$otp.'</b>';
$mail->AltBody = '<b>MGRanger Pvt Ltd.</b> to inform you related our mails';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location:send_otp.php');
}
?>