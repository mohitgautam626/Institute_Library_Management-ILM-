<?php
session_start();
include('1.php');
$email=$_SESSION['email'];
$bid=$_POST['bookID'];
$query1="SELECT * FROM student_account WHERE Email='$email'";
$data1=mysqli_query($conn,$query1);
$result1=mysqli_fetch_assoc($data1);
if($result1['B'.$bid]!=1){
$query2="UPDATE student_account SET B".$bid."=1,T".$bid."=NOW() WHERE Email='$email'";
$data2=mysqli_query($conn,$query2);
if($data2)
    echo "Successfully Issued";
}
else
{
    echo "You have Already Selected this Book";
}
echo "<br>This result will be for 5 seconds please Hold..."
?>