<?php
 include '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Books</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
		#mar{
			margin-left: 450px;
			margin-top: 100px;
			background-color: gray;
			opacity: 0.8;
      border-radius:20px;
		}
	</style>
</head>
<body style="background-image:url('2.jpg'); background-size:cover;">
  <div class="container col-lg-4" id="mar">
  	<h1 style="text-align: center"><b>Add_Books<b></h1>
   <form action="" method="POST">
  <div class="form-group">
    <input type="text" name="bname" class="form-control" placeholder="Book Name" required="">
  </div>
  <div class="form-group">
    <input type="text" name="aname" class="form-control" placeholder="Author Name" required=""> 
  </div>
  <div class="form-group">
  <input type="file" name="bimage" class="form-control" placeholder="File" required="">
  </div>
  <div class="form-group">
  <input type="text" name="quantity" class="form-control" placeholder="Quantity of this book" required="">
  </div>
  <button class="btn btn-success" name="insert">Insert</button><br><br>
   </form>
</div>
<?php
 if(isset($_POST['insert']))
 {
   $bname=$_POST['bname'];
   $aname=$_POST['aname'];
   $bimage=$_POST['bimage'];
   $quantity=$_POST['quantity'];
 	if(mysqli_query($link,"insert into books_info (bname,aname,bimage,quantity) values('$bname','$aname','$bimage',$quantity)"))
 	 echo "Successfully Added";
 	else
 	 echo "Error" . mysqli_error($link);
 }
?>
</body>
</html>