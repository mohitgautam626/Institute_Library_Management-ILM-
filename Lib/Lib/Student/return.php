<?php
include '../includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Return Book</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Akronim|Bangers|Merienda&display=swap" rel="stylesheet">
<style>
  #abc{
      margin-left:500px;
      opacity:0.8;
	  margin-top:120px;
	  background-color:rgba(75,75,75,0.75);
	  border-radius:20px;
  }
</style>
</head>
<body style="background-image: url('2.jpg');background-size: cover;">
<div class="navbar navbar-inverse">
   <form class="form-inline" action="" method="POST" style="margin-left:300px; padding-top:5px;">
            <select class="form-control" name="rtion">
            	<option>Registration_No</option>
        	
        	<?php
        	    $res=mysqli_query($link,"select rtion from student_registration");
        	 	while($row=mysqli_fetch_array($res))
        	 	{
        	 	  echo "<option>";
        	 	   echo $row["rtion"];	
        	 	  echo "</option>";
        	 	}
        	 ?>
            </select>
         <div  class="form-group">
	 	  <input type="submit" name="submit" class="btn btn-default">
	 	 </div>
          </form>
           </div>
		 
		  <div class="container col-lg-4" id="abc">
          <h1 style="text-align: center;font-family: 'Akronim'"><b>Return Book</b></h1><hr>
          <form action="" method="POST"> 
          <div class="form-group">
        <select class="form-control" name="bname" style="color: gray">
        	<option>Book</option>
        	<?php
			if(isset($_POST['submit']))
			{
			 $var=$_POST['rtion'];
			}
        	 $res1=mysqli_query($link,"select bname from issue_books where rtion=$var");
        	 while($row1=mysqli_fetch_array($res1))
        	 {
               echo "<option>";
               	echo $row1['bname'];
               echo "</option>";
        	 }
        	?>
        </select>
  	</div>
      <div class="form-group">
        <select class="form-control" name="aname" style="color: gray">
        	<option>AuthorName</option>
        	<?php
        	 $res2=mysqli_query($link,"select aname from issue_books where rtion=$var");
        	 while($row2=mysqli_fetch_array($res2))
        	 {
               echo "<option>";
               	echo $row2["aname"];
               echo "</option>";
        	 }
        	?>
        </select>
  	</div>
      <button class="btn btn-primary btn-lg form-control" name='submit' style="padding-bottom:30px">Return</button><br><br>
    </form>
    </div>
    
</body>
</html>