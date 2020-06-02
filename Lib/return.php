<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>        
<link href="https://fonts.googleapis.com/css?family=Oswald|Simonetta|Yeon+Sung&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
     <div style="text-align:center;margin-left:20px;">
            <h1 style="font-family:'Oswald'">Return Books</h1>
            <hr style="border-width:5px;border-color:deepskyblue;border-radius:50px;width:540px">
         <div style="margin-top:30px" id="tableid">
                <table class="table table-striped table-hover" style="text-align:center">
                <thead>
                    <tr style="font-family:'Simonetta';">
                        <th>Book ID</th>
                        <th>Issue Date</th>
                        <th>Book Description</th>
                        <th><font style="color:red">Red Alert</font></th>
                    </tr>
                </thead>
                    <tbody style="font-family:Yeon Sung">
                    <?php
                        session_start();
                        include('1.php');
                        $email=$_SESSION['email'];
                        $query="SELECT * FROM student_account WHERE Email='$email'";
                        $data=mysqli_query($conn,$query);
                        $result=mysqli_fetch_assoc($data);
                        for($x=1;$x<=24;$x++)
                        {
                            if($result['B'.$x]==1){
                    ?>
                    <tr>
                        <td><?php echo $x ?></td>
                        <td><?php echo $result['T'.$x] ?></td>
                        <td>
                            <div class="row">
                        <div class="col-sm-6">
                        <?php
                           $query2="SELECT * FROM stock_books WHERE BID='$x'";
                           $data2=mysqli_query($conn,$query2);
                           $result2=mysqli_fetch_assoc($data2);
                        ?>
                    <img src="<?php echo $result2['pic'] ?>" style="margin-right:0px;float:right" height="100" width="100">
                        </div>
                        <div class="col-sm-6" id="bookd">
                            <b style="margin-left:0px;float:left"><h4><?php echo $result2['Book_Name'] ?></h4>
                                <?php echo $result2['Author'] ?><br>
                            <button class="btn btn-success" id="<?php echo $x ?>" onclick="myfun(this.id)">Return</button></b>
                        </div>
                            </div>
                        </td>
                        <td>
                            <?php
                            $query3="SELECT * FROM student_fine WHERE Email='$email'";
                                $data3=mysqli_query($conn,$query3);
                                $a=$result['T'.$x];
                                $b=$result['R'.$x];
                                $start=date_create($a);
                                $end=date_create($b);
                                $interval=date_diff($start,$end);
                                $xx=$interval->format('%R%a');
                                if($xx>2){
                            ?>
                            <font style="color:red">Fine Accompalished</font>
                            <?php }
                            else{ ?>
                            <font style="color:red">You have <?php $y=2-$xx; echo $y; ?> days left</font>
                        </td>
                    </tr>
                        <?php }}} ?>
                    </tbody>
                </table>
         </div>
    </div>
    </div>
    <script>
        function myfun(dataid)
        {
            var a=confirm("Do u wanna return it?");
            if(a){
                var p=alert("Are you sure to return BookID:"+dataid);
            $.ajax({
                url:'return_book.php',
                type:'post',
                data:{datapost:dataid},
                success:function(result){
                   $('#tableid').html(result);
                }
            });
                setTimeout(wait,3000);
                    function wait(){
                        location.reload();
                    }
            }
        }
    </script>
</body>
</html>