<?php
session_start();
include('1.php');
error_reporting(0);
$usr=$_SESSION['email'];
$query="SELECT * FROM student_login WHERE Email='$usr'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Issue</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
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
    background-color:whitesmoke;
}
    #pic{
        border-radius: 40px;
    }
    #sol{
        height:150px;
        width:150px;
        background-color:green;
        margin-left:50px;
    }
    #sol4{
        height:150px;
        width:150px;
        background-color:green;
        margin-left:50px;
    }
    #sol7{
        height:150px;
        width:150px;
        background-color:green;
        margin-left:50px;
    }
</style>
</head>
<body onload="myrot()">
<div class="menu" style="position:fixed">
    <b>
        <div class="row" style="margin-top:20px;margin-bottom:0px;">
            <div class="col-sm-3">
                <?php 
                if($result['DP_source'] && $result['DP_source']!="DP/"){
                ?>
                <a href="$result['DP_source']"><img src="<?php echo $result['DP_source'] ?>" height="50" width="50" id="pic" style="margin-left:20px;"></a>
                <?php }
                else{ ?>
                <i class="fa fa-user-circle-o" aria-hidden="true" id="pic" style="font-size:40px;margin-left:20px;color:white"></i>
                <?php } ?>
            </div>
            <div class="col-sm-3">
    <section style="color:white;font-size:20px;"><?php echo "".$result['Email']?></section>
            </div>
        </div>
  <nav class="na">
    <a href="front_student.php" style="text-decoration:none">
      <div class="link active">Home</div>
    </a>
    <a href="#" style="text-decoration:none" onclick="myfun()">
      <div class="link">Profile</div>
    </a>
    <a style="text-decoration:none" href="#" onclick="myfun2()">
        <div class="link">Issue_Book</div>
      </a>
    <a href="#" style="text-decoration:none" onclick="returnbook()">
      <div class="link">Return_Book</div>
    </a>
    <a href="#" style="text-decoration:none" onclick="myfun3()">
      <div class="link">Transaction</div>
    </a>
      <a href="log_out.php" style="text-decoration:none">
      <div class="link"><i class="fa fa-log-out"></i>Log Out</div>
    </a>
  </nav>
    </b>
</div>
    <div class="container" style="margin-left:300px;width:1065px;background-color:whitesmoke" id="part">
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <div style="margin-left:150px;height:250px;width:250px;">
                    <h2 style="text-align:center">No. Of Books Available</h2><br>
                <div id="sol">
                    <div id="sol2" style="transform:rotate(30deg);background-color:white;height:100%;width:100%">
                        <div id="sol3" style="transform:rotate(30deg);background-color:orange;height:100%;width:100%;text-align:center;padding:10px"><h1 style="font-size:90px">10</h1>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <div class="col-md-6">
                <div style="margin-left:100px;height:250px;width:250px;">
                    <h2 style="text-align:center">No. Of Students Registered</h2><br>
                <div id="sol4">
                    <div id="sol5" style="transform:rotate(30deg);background-color:white;height:100%;width:100%">
                        <div id="sol6" style="transform:rotate(30deg);background-color:orange;height:100%;width:100%;padding:10px;text-align:center"><h1 style="font-size:90px">10</h1>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div><br><br><br>
        <div class="row">
            <div class="col-md-6">
                <div style="margin-left:400px;height:250px;width:250px;">
                    <h2 style="text-align:center">Visited Count</h2><br>
                <div id="sol7">
                    <div id="sol8" style="transform:rotate(30deg);background-color:white;height:100%;width:100%">
                        <div id="sol9" style="transform:rotate(30deg);background-color:orange;height:100%;width:100%;padding:10px;text-align:center"><h1 style="font-size:90px">10</h1>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div><br><br><br>
    </div>
    <!--Here js code for part division to be updated-->
    <script>
        function myfun()
        {
            $(document).ready(function(){
                $('#part').load('profile.php');
            });
        }
        function myfun2()
        {
            $(document).ready(function(){
                $('#part').load('issue.php');
            });
        }
        function myfun3()
        {
            $(document).ready(function(){
                $("#part").load("transaction.php");
            });
        }
        function returnbook()
        {
            $(document).ready(function(){
                $("#part").load("return.php");
            });
        }
        function myrot()
        {
            var x=document.getElementById("sol");
            var y=document.getElementById("sol4");
            var z=document.getElementById("sol7");
            var pos=0;
            var id=setInterval(frame,5);
            function frame()
            {
                pos+=1;
                x.style.transform="rotate("+pos+"deg)";
                y.style.transform="rotate("+pos+"deg)";
                z.style.transform="rotate("+pos+"deg)";
            }
        }
    </script>
    <!--closing it-->
    

</body>
</html>