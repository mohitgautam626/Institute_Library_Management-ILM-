<?php
session_start();
include('1.php');
$email=$_SESSION['email'];
$tadd=$_POST['tadd'];
$padd=$_POST['padd'];
$ii=$_POST['ii'];
$bg=$_POST['bg'];
$sm=$_POST['sm'];
$query="UPDATE student_login 
SET TAdd='$tadd',PAdd='$padd',Interested='$ii',Bgrp='$bg',Special_mark='$sm'
WHERE Email='$email'";
$data=mysqli_query($conn,$query);
if($data)
{
    header('location:front_student.php');
}
else
    echo "failed to proceed:".mysqli_error($conn);
?>