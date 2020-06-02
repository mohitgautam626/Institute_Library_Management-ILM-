<?php
session_start();
include("1.php");
$usr=$_SESSION['email'];
$query="SELECT * FROM student_login WHERE Email='$usr'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
$filename=$_FILES["upload"]["name"];
$tempname=$_FILES["upload"]["tmp_name"];
$folder="DP/".$filename;
move_uploaded_file($tempname,$folder);
$query2="UPDATE student_login SET DP_source='$folder' WHERE Email='$usr'";
$data2=mysqli_query($conn,$query2);
header('location:front_student.php');
?>