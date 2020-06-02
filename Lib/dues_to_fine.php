<?php
session_start();
include('1.php');
$email=$_SESSION['email'];
$query="SELECT * FROM student_fine WHERE Email='$email'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
$total=$result['Total_Fine']+$result['Dues'];
$query2="UPDATE student_fine SET Total_Fine='$total',Dues=0 WHERE Email='$email'";
$data2=mysqli_query($conn,$query2);
if($data2)
{
    for($x=1;$x<=24;$x++){
        $query3="UPDATE student_fine SET B".$x."=0 WHERE Email='$email'";
        $data3=mysqli_query($conn,$query3);
    }
    header('location:success_payment.php');
}
else
    echo "transaction Failed".mysqli_error($conn);
?>