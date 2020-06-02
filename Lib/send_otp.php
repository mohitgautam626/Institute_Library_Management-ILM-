<?php
session_start();
require('textlocal.class.php');
require('credential_sms.php');
include('1.php');
$email=$_SESSION['email'];
$otp=$_SESSION['otp'];
$query="SELECT * FROM student_login WHERE Email='$email'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
$textlocal = new Textlocal(false,false,API_KEY);
$numbers = array('91'.$result['Contact']);
$sender = 'TXTLCL';
$message = 'Hii, Mohit Gautam here from Institute Management System Your OTP:'.$otp;
try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    header('location:otp.php');
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>