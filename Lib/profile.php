<?php
session_start();
include('1.php');
error_reporting(0);
$usr=$_SESSION['email'];
$query="SELECT * FROM student_login WHERE Email='$usr'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<link href="https://fonts.googleapis.com/css?family=Oswald|Simonetta|Yeon+Sung&display=swap" rel="stylesheet">
<style>
        #profile_pic{
            float:right;
            border-radius: 200px;
            border-style:dashed;
            border-width: 20px;
        }
        #contain{
            margin-top: 0px;
        }
        #pro:hover #profile_pic  
        {
            opacity: 0.3;
        }
    #ppd{
        opacity:0;
    }
        #pro:hover #ppd{
            opacity:1;         
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <div class="row" id="contain">
            <div class="col-md-4" style="margin-top:20px;position:relative" id="pro">
                <?php
                if($result['DP_source'] && $result['DP_source']!="DP/")
                {
                ?>
                <img src="<?php echo $result['DP_source'] ?>" height="250" width="250" id="profile_pic">
                <?php
                }
                else{
                ?>
                <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:200px" id="profile_pic"></i>
                <?php } ?>
                <div id="ppd">
                    <form action="profile_pic.php" method="post" enctype="multipart/form-data">
                        <input type="file" style="font-size:10px;margin-left:70px" name="upload">
                        <input type="submit" style="font-size:10px;margin-left:0px" value="Change" name="submit">
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <form >
                <b>
                    <hr style="border-color:deepskyblue;border-width:10px;border-radius:50px;width:100px;margin-left:0px">
                    <h1 style="font-family: 'Oswald'">Personal Information</h1>
                    <br>
                    <div style="font-family: 'Simonetta';font-size:20px">
                        Name: <font style="font-family:'Yeon Sung'"><?php echo "".$result['Name']?></font><br>
                        Registeration No: <font style="font-family:'Yeon Sung'"><?php echo "".$result['ID']?></font><br>
                        Email Id: <font style="font-family:'Yeon Sung'"><?php echo "".$result['Email']?></font><br>
                        Contact No: <font style="font-family:'Yeon Sung'">+91-<?php echo "".$result['Contact']?></font><br>
                        DOB: <font style="font-family:'Yeon Sung'"><?php echo "".$result['DOB']?></font><br>
                    </div>
                </b>
                </form>
            </div>
        </div><br>
        <div class="row">
        <div class="col-md-10" style="margin-left:100px">
            <hr style="border-color:deepskyblue;border-width:10px;border-radius:50px;width:130px;margin-left:0px">
            <b><h1 style="font-family: 'Oswald'">Additional Information <a href="#" data-target="#changebio" data-toggle="modal"><i class="fa fa-edit" style="font-size:50px"></i></a></h1>
            <!---Change Description--->
            <div class="modal fade" id="changebio">
                <div class="modal-dialog modal-md">
                <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
            <h2 class="modal-title" style="font-family:'Simonetta'"><b>Additional Changes</b></h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="changebio.php" method="post">
                <textarea rows="3" cols="50" placeholder="Temporary Address" class="form-control" name="tadd"></textarea><br>
                <textarea rows="3" cols="50" placeholder="Permenant Address" class="form-control" name="padd"></textarea><br>
                <input type="text" class="form-control" placeholder="Interested In(Author Name)" name="ii"><br>
                <input type="text" class="form-control" placeholder="Blood Group" name="bg"><br>
                <input type="text" class="form-control" placeholder="Special Mark" name="sm"><br>
                <input type="submit" value="Submit" class="form-control">
            </form>
        </div>
        
        </div>
    </div>
                </div>
            <!--end of addition change-->
            <br>
            <div style="font-family: 'Simonetta';font-size:20px">
                        Temporary Address: <br><font style="font-family:'Yeon Sung'"><?php echo "".$result['TAdd']?></font><br><br>
                        Permenant Address:<br> <font style="font-family:'Yeon Sung'"><?php echo "".$result['PAdd']?></font><br><br>
                        Interested In(Author Name): <br><font style="font-family:'Yeon Sung'"><?php echo "".$result['Interested']?></font><br><br>
                        Blood Group: <br><font style="font-family:'Yeon Sung'"><?php echo "".$result['Bgrp']?></font><br><br>
                        Special Mark: <br><font style="font-family:'Yeon Sung'"><?php echo "".$result['Special_mark']?></font><br><br>
            </div>          
            </b>
        </div>
        </div>
    </div>
</body>
</html>