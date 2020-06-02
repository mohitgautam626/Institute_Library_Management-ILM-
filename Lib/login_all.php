<?php
session_start();
include("1.php");
$email=$_POST['email_'];
$pass=$_POST['pwd_'];
$query="SELECT * FROM student_login WHERE Email='$email' && Pass='$pass'";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
if($table)
{
    $_SESSION['email']=$email;
    header('location:front_student.php');
}
else
    echo "checking failed";
?>