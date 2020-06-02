<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>        
<link href="https://fonts.googleapis.com/css?family=Oswald|Simonetta|Yeon+Sung&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&display=swap" rel="stylesheet">
    <style>
        #block{
            padding:10px;
        }
        #bookd{
            margin-left:0px;
            font-family:'Simonetta';
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="text-align:center;margin-left:20px;">
            <h1 style="font-family:'Oswald'">Available Books</h1>
            <hr style="border-width:5px;border-color:deepskyblue;border-radius:50px;width:540px">
            <div class="row">
                <div class="col-md-1">
                 </div>
                <div class="col-md-3">
                    <select class="form form-control" onchange="myfun(this.value)">
                        <option>Category</option>
                        <option>Computer Science</option>
                        <option>Electronics & Electrical</option>
                        <option>Mechanical</option>
                        <option>Metallurgical</option>
                     </select>
                 </div>
                 <div class="col-md-1">
                 </div>
                 <div class="col-md-6">
                    <input type="text" class="form form-control" placeholder="Search Books">
                 </div>
                 <div>
                     <button class="btn btn-success form form-control">Go</button>
                 </div>
            </div>
            <br><br>
            <!----------------->
            <div class="container" id="put_here">
            <?php 
            for($x=1;$x<=24;$x=$x+3){
            ?>
            <div class="row">
                <?php
                include('1.php');
                $query_1="SELECT * FROM stock_books WHERE BID='$x'";
                $data_1=mysqli_query($conn,$query_1);
                $q1=mysqli_fetch_assoc($data_1);
                if($q1['Quantity']!=0){
                ?>
                <div class="col-md-4" id="block">
                    <div class="row">
                        <div class="col-md-6">
                    <img src="<?php echo $q1['pic']?>" height="170" width="170">
                        </div>
                        <div class="col-md-6" id="bookd">
                            <b><h4><?php echo $q1['Book_Name']?><br></h4>
                                <?php echo $q1['Author']?></b>
                            <button class="form form-control" id="<?php echo $q1['BID'] ?>" onclick="myfun2(this.id)">Select</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php 
                $y=$x+1;
                $query_1="SELECT * FROM stock_books WHERE BID='$y'";
                $data_1=mysqli_query($conn,$query_1);
                $q1=mysqli_fetch_assoc($data_1);
                if($q1['Quantity']!=0){
                ?>
                <div class="col-md-4" id="block">
                    <div class="row">
                        <div class="col-md-6">
                    <img src="<?php echo $q1['pic']?>" height="170" width="170">
                        </div>
                        <div class="col-md-6" id="bookd">
                            <b><h4><?php echo $q1['Book_Name']?><br></h4>
                                <?php echo $q1['Author']?></b>
                            <button class="form form-control" id="<?php echo $q1['BID']?>" onclick="myfun2(this.id)">Select</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php 
                $z=$x+2;
                $query_1="SELECT * FROM stock_books WHERE BID='$z'";
                $data_1=mysqli_query($conn,$query_1);
                $q1=mysqli_fetch_assoc($data_1);
                if($q1['Quantity']!=0){
                ?>
                <div class="col-md-4" id="block">
                    <div class="row">
                        <div class="col-md-6">
                    <img src="<?php echo $q1['pic']?>" height="170" width="170">
                        </div>
                        <div class="col-md-6" id="bookd">
                            <b><h4><?php echo $q1['Book_Name']?><br></h4>
                                <?php echo $q1['Author']?></b>
                            <button class="form form-control" id="<?php echo $q1['BID']?>" onclick="myfun2(this.id)">Select</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
            </div>
            <!---------------->
            <br><br>
        </div>
    </div>
              <!-------->
                
                <script>
                    function myfun(datavalue)
                    {
                        $.ajax({
                            url:'category_books.php',
                            type:'POST',
                            data: {datapost:datavalue},
                        
                            success:function(result){
                                $('#put_here').html(result);
                            }
                        });
                    }
                    function myfun2(bookid)
                    {
                        var ok=confirm("Do u really wanna select?");
                        if(ok)
                        {
                            var x="Bookid:"+bookid;
                            alert("You have selected "+x);
                            $.ajax({
                                url:'select_book.php',
                                type:'post',
                                data:{bookID:bookid},
                                success:function(result){
                                    $('#put_here').html(result);
                                }
                            });
                            setTimeout(xyz,6000);
                            function xyz(){
                                location.reload();
                            }
                        }
                    }
                </script>
                <!-------->
</body>
</html>