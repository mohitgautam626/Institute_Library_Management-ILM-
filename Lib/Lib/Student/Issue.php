<!DOCTYPE html>
<html>
<head>
	<title>Book Issue</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Akronim|Bangers|Merienda&display=swap" rel="stylesheet">
<style>
 #abc{
	margin-left:500px;
	margin-top: 35px;
	border-radius: 30px;
	opacity:0.7;
   background-color:rgba(35,35,43,0.75);
}
</style>
</head>
<body style="background-image: url('2.jpg');background-size: cover;">
<div class="navbar navbar-inverse">
   <form class="form-inline" action="" method="POST" style="margin-left:350px; margin-top:5px;">
            <select class="form-control" name="ration" style="color: gray;">
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
       <?php
       if(isset($_POST['submit']))
       {
         $var=$_POST['ration'];
         $_SESSION['rollno']=$var;
      
        $res3=mysqli_query($link,"select * from student_registration where rtion='$var'");
        while($row3=mysqli_fetch_array($res3)){
         $fname=$row3['fname'];
         $lname=$row3['lname'];
         $_SESSION['fullname']=$fname . ' ' . $lname;
         $rtion=$row3['rtion'];
        }

       }        
        ?>  
        <div class="container col-lg-4" id="abc">
         <h1 style="text-align: center; color:pink; font-family: 'Akronim'"><b>Issue Book</b></h1><hr>
      <form action="" method="POST">
        <div class="form-group">
             <input type="text" class="form-control" name="finame" placeholder="Full Name" value="<?php 
             if(isset($fname))
             echo $fname." ".$lname;
             else echo "";?>" disabled="">

  	</div>
  	<div class="form-group">
        <select class="form-control" name="bname" style="color: gray">
        	<option>Book</option>
        	<?php
        	 $res1=mysqli_query($link,"select bname from books_info");
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
        	 $res2=mysqli_query($link,"select aname from books_info");
        	 while($row2=mysqli_fetch_array($res2))
        	 {
               echo "<option>";
               	echo $row2["aname"];
               echo "</option>";
        	 }
        	?>
        </select>
  	</div>
    <div class="form-group">
            <input type="text" class="form-control" name="tion" placeholder="Registration No" value="<?php
            if(isset($rtion))
             echo $rtion;
            else echo""; ?>" disabled="">
  	</div>
  	  	<div class="form-group">
  		 <input type="date" class="form-control" name="date" placeholder="Issue-Date" required="">
  	</div>
       <button class="btn btn-primary btn-lg form-control" name='submit1' style="padding-bottom:30px">Issue</button><br><br>
    </div>
     </form>
    
     <?php
      if(isset($_POST['submit1']))
      {
         $finame=$_SESSION['fullname'];
         $bname=$_POST['bname'];
         $aname=$_POST['aname'];
         $rname=$_SESSION['rollno'];
         $date=$_POST['date'];
         if(!mysqli_query($link,"insert into issue_books(fname,bname,aname,rtion,date) values('$finame','$bname','$aname','$rname','$date')"))
         {
            echo mysqli_error($link);
         }
      }
     ?>      
</div>
</body>
</html>