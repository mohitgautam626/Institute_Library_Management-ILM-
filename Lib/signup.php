<?php
include("1.php");
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pwd'];
$contact=$_POST['cno'];
$date=$_POST['dob'];
$query="INSERT INTO student_login (Name,Email,Pass,Contact,DOB) VALUES ('$name','$email','$pass','$contact','$date')";
$data=mysqli_query($conn,$query);
$query2="INSERT INTO student_Account(Email) VALUES ('$email')";
$data2=mysqli_query($conn,$query2);
$query3="INSERT INTO student_Fine(Email) VALUES ('$email')";
$data3=mysqli_query($conn,$query3);
if($data)
{
    header('location:index.html');
}
else
{
    die("Connection Failed:".mysqli_error($conn));
}
?>