<?php
 include '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Record</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<style>
			.table-bordered{
				margin-top: 20px;
			}
		</style>
</head>
<body style="background-color:rgba(0,0,20,0.4);">
  <div class="container">
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Username</th>
      <th scope="col">College Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Semester</th>
      <th scope="col">Gender</th>
      <th scope="col">RollNo</th>
    </tr>
  </thead>

  <form class="form-inline" action="" method="POST">
    <div class="form-group">
     <input style="font-size: 20px; margin-top: 40px;" type="text" name="roll" placeholder="Registration_No" class="col-lg-4">
     <input style="margin-top: 40px; margin-left: 10px;" type="submit" name="submit" value="Search Student" class="btn btn-success">
    </div>
  </form>

  <?php
  if(isset($_POST["submit"]))
  {
     $res=mysqli_query($link,"select * from student_registration where rtion like('$_POST[roll]')");
   while($row=mysqli_fetch_array($res))
   {
     echo "<tr>";
      echo "<td>";echo $row["id"];echo "</td>";
      echo "<td>";echo $row["fname"];echo "</td>";
      echo "<td>";echo $row["lname"];echo "</td>";
      echo "<td>";echo $row["uname"];echo "</td>";
      echo "<td>";echo $row["email"];echo "</td>";
      echo "<td>";echo $row["cno"];echo "</td>";
      echo "<td>";echo $row["sem"];echo "</td>";
      echo "<td>";echo $row["gender"];echo "</td>";
      echo "<td>";echo $row["rtion"];echo "</td>";
    echo "</tr>";
   }
  }
  else{
  $res=mysqli_query($link,"select * from student_registration");
   while($row=mysqli_fetch_array($res))
   {
   	 echo "<tr>";
   	  echo "<td>";echo $row["id"];echo "</td>";
      echo "<td>";echo $row["fname"];echo "</td>";
      echo "<td>";echo $row["lname"];echo "</td>";
      echo "<td>";echo $row["uname"];echo "</td>";
      echo "<td>";echo $row["email"];echo "</td>";
      echo "<td>";echo $row["cno"];echo "</td>";
      echo "<td>";echo $row["sem"];echo "</td>";
      echo "<td>";echo $row["gender"];echo "</td>";
      echo "<td>";echo $row["rtion"];echo "</td>";
    echo "</tr>";
   }
  }
  ?>
</table>
</div>
</body>
</html>