<?php
 include '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Issued Books</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<style>
			.table-bordered{
				margin-top: 40px;
			}
		</style>
</head>
<body style="background-color:rgb(0,0,40,0.4);">
  <div class="container">
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Book_Name</th>
      <th scope="col">Author_Name</th>
      <th scope="col">RollNo</th>
      <th scope="col">Librarian</th>
    </tr>
  </thead>
  <?php
  $res=mysqli_query($link,"select * from issue_books");
   while($row=mysqli_fetch_array($res))
   {
   	 echo "<tr>";
   	  echo "<td>";echo $row["id"];echo "</td>";
      echo "<td>";echo $row["fname"];echo "</td>";
      echo "<td>";echo $row["bname"];echo "</td>";
      echo "<td>";echo $row["aname"];echo "</td>";
      echo "<td>";echo $row["rtion"];echo "</td>";
      echo "<td>";echo $row["librarian"];echo "</td>";
    echo "</tr>";
   }
  ?>
</table>
</div>
</body>
</html>