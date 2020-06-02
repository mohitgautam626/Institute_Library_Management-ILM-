<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>        
<link href="https://fonts.googleapis.com/css?family=Oswald|Simonetta|Yeon+Sung&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&display=swap" rel="stylesheet">
</head>
<body>
    <br><br>
    <div class="container">
        <div style="text-align:center;margin-left:20px;">
        <div class="row">
            <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" onclick="myprint()" style="margin-left:100px;font-family:'Simonette';font-size:20px">Print <i class="fa fa-print" style="margin-left:5px;font-size:20px"></i></button>
                    <script>
                        function myprint()
                        {
                            window.print();
                        }
                    </script>
                </div>
            </div>
            <h1 style="font-family:'Oswald'">Transaction Details</h1>
            <hr style="border-width:5px;border-color:deepskyblue;border-radius:50px;width:540px">
            <div class="row" style="margin-top:30px">
                <div class="col-sm-6">
                    <h5 style="font-family:'Simonetta'"><b>Total Fine Paid:</b>₹<?php 
                        session_start();
                        include('1.php');
                        error_reporting(0);
                        $email=$_SESSION['email'];
                        $query3="SELECT * FROM student_fine WHERE Email='$email'";
                        $data3=mysqli_query($conn,$query3);
                        $result3=mysqli_fetch_assoc($data3);
                        echo $result3['Total_Fine'];
                        ?></h5>
                </div>
                <div class="col-sm-6">
                    <h5 style="font-family:'Simonetta'"><b>Total Dues: </b>₹<?php echo $result3['Dues'] ?></h5>
                </div>
            </div>
            <div style="margin-top:30px">
                <table class="table table-striped table-hover">
                <thead>
                    <tr style="font-family:'Simonetta'">
                        <th>Book ID</th>
                        <th>Book Name</th>
                        <th>Author Name</th>
                        <th>Issued Date</th>
                        <th>Returned Date</th>
                        <th>Late Fine</th>
                    </tr>
                </thead>
                    <tbody style="font-family:Yeon Sung">
                    <?php
                        $query="SELECT * FROM student_account WHERE Email='$email'";
                        $data=mysqli_query($conn,$query);
                        $result=mysqli_fetch_assoc($data);
                        $total=0;
                        for($x=1;$x<=24;$x++)
                        {
                            if($result3['B'.$x]==1)
                            {
                                $query2="SELECT * FROM stock_books WHERE BID='$x'";
                                $data2=mysqli_query($conn,$query2);
                                $result2=mysqli_fetch_assoc($data2);
                    ?>
                    <tr>
                        <td><?php echo $x ?></td>
                        <td><?php echo $result2['Book_Name'] ?></td>
                        <td><?php echo $result2['Author'] ?></td>
                        <td><?php echo $result['T'.$x] ?></td>
                        <td><?php echo $result['R'.$x] ?></td>
                        <td><?php
                            $a=$result['T'.$x];
                            $b=$result['R'.$x];
                            $start=date_create($a);
                            $end=date_create($b);
                            $days=date_diff($start,$end);
                                $xx=($days->format('%R%a')-2)*$result2['Fine/Day'];
                                $total+=$xx;
                                echo $xx;
                            ?></td>
                    </tr>
                        <?php }} ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><h5><b>Overall Fine</b></h5></td>
                            <td><h5><b>₹<?php
                                $query4="UPDATE student_fine SET Dues='$total' WHERE Email='$email'";
                                $data4=mysqli_query($conn,$query4);
                                echo $total ?></b></h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top:30px">
            <div class="col-md-6">
                <h3 style="font-family:'Simonette'"><b>Payment Status:</b>
                    <?php if($result3['Dues']!=0){ ?>
                    <i class="fa fa-close" style="font-size:35px;color:red;margin-left:5px"></i>
                    <?php }
                    else{ ?>
                    <i class="fa fa-check" style="font-size:35px;color:green;margin-left:5px"></i>
                    <?php } ?>
                </h3>
            </div>
                <div class="col-md-6">
                    <button class="btn btn-success" style="font-family:'Simonette';font-size:20px;margin-left:30px;"><a href="debit.php" style="text-decoration:none;color:white">Clear Fine</a><i class="fa fa-credit-card" style="font-size:20px;margin-left:10px"></i></button>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>