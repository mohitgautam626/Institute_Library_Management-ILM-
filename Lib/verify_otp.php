<?php
      error_reporting(0);
      session_start();
      include('1.php');
      $email=$_SESSION['email'];
      $a=$_POST['a1'];
      $b=$_POST['a2'];
      $c=$_POST['a3'];
      $d=$_POST['a4'];
      $otp=($a*1000)+($b*100)+($c*10)+$d;
      if($otp==$_SESSION['otp'])
      {
          header('location:success_payment.php');
      }
      else
      {
         header('location:otp.php');
      }
?>