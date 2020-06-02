<?php
 include '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Record</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<style>
			.table-bordered{
				margin-top: 20px;
			}
		</style>
</head>
<body>
  <div class="container">
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">BookName</th>
      <th scope="col">AuthorName</th>
      <th scope="col">BookImage</th>
      <th scope="col">Quantity</th>   
    </tr>
  </thead>

  <form class="form-inline" action="" method="POST">
    <div class="navbar navbar nav">
     <input style="font-size: 20px; margin-top: 40px;" type="text" name="roll" placeholder="BookName" class="col-lg-4">
     <input style="margin-top: 40px; margin-left: 10px;" type="submit" name="submit" value="Search Book" class="btn btn-success">
    </div>

  <?php
   if(isset($_POST["submit"]))
   {
     $res=mysqli_query($link,"select * from books_info where bname like('$_POST[roll]')");
   while($row=mysqli_fetch_array($res))
   {
     echo "<tr>";
      echo "<td>";echo $row["id"];echo "</td>";
      echo "<td>";echo $row["bname"];echo "</td>";
      echo "<td>";echo $row["aname"];echo "</td>";
      echo "<td>"; ?> <img src="<?php echo $row["bimage"]; ?>" style="height:100px"> ;<?php echo "</td>";
      echo "<td>";echo $row["quantity"];echo "</td>";
    echo "</tr>";
   }
   }
  else{
  $res=mysqli_query($link,"select * from books_info");
   while($row=mysqli_fetch_array($res))
   {
   	 echo "<tr>";
   	  echo "<td>";echo $row["id"];echo "</td>";
      echo "<td>";echo $row["bname"];echo "</td>";
      echo "<td>";echo $row["aname"];echo "</td>";
      echo "<td>"; ?> <img src="<?php echo $row["bimage"]; ?>" style="height:100px"> ;<?php echo "</td>";
      echo "<td>";echo $row["quantity"];echo "</td>";
    echo "</tr>";
   }
 }
  ?>
</table>
</div>
</body>
</html>