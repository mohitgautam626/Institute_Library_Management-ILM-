<?php
include '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Issue</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Akronim|Bangers|Merienda&display=swap" rel="stylesheet">
<style>
  .link {
  background-color: #333;
  padding: 20px;
  font-family: 'Raleway', sans-serif;
  font-size 12pt;
  color: #F5F5F5;
  border-bottom: 1px solid #F5F5F5;
}

.link:hover {
  background-color: #424242;
}
.menu {
  position: absolute;
  height:100%;
  width:300px;
  background-color: #424242;
}
.na{
    margin-top:40px;
}
.lin{
    color:white;
    margin-top:30px;
    margin-left:40px;
    font-size:20px; 
}
body{
    background-color:gray;
}
</style>
</head>

<div class="menu">
<p class="glyphicon glyphicon-user lin"><b style="margin-left:10px;">Username<b></p>
  <nav class="na">

    <a href="home.php">
      <div class="link">Home</div>
    </a>
    <a href="profile.php">
      <div class="link">Profile</div>
    </a>
    <a href="issued_books.php">
      <div class="link">Issued_Book</div>
    </a>
    <a href="display.php">
      <div class="link">Students Details</div>
    </a>
    <a href="addbooks.php">
      <div class="link">Add_Book</div>
    </a>
    <a href="../student/display_books.php">
      <div class="link">Show_Book</div>
    </a>
    <a href="help.php">
      <div class="link">Help</div>
    </a>
  </nav>
  <a href="logout.php">
      <div class="link">Logout</div>
    </a>
</div>
</body>
</html>