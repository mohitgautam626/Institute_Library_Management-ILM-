<?php
session_start();
include('1.php');
$bid=$_POST['datapost'];
$email=$_SESSION['email'];
$query="UPDATE student_account SET B".$bid."=0,R".$bid."=NOW() WHERE Email='$email'";
$data=mysqli_query($conn,$query);
$query4="SELECT * FROM student_account WHERE Email='$email'";
$data4=mysqli_query($conn,$query4);
$result=mysqli_fetch_assoc($data4);
if($data){
    $query2="SELECT * FROM student_fine WHERE Email='$email'";
    $data2=mysqli_query($conn,$query2);
    $a=$result['T'.$bid];
    $b=$result['R'.$bid];
    $start=date_create($a);
    $end=date_create($b);
    $interval=date_diff($start,$end);
    $xx=$interval->format('%R%a');
    if($xx>2){
        $query3="UPDATE student_fine SET B".$bid."=1 WHERE Email='$email'";
        $data3=mysqli_query($conn,$query3);
    }
    echo "Successfully Returned";
}
else
    echo "You are requested to Check Connection again";
echo "<br> Please wait while Loading....";
?>