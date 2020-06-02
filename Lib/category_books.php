<?php
include('1.php');
$cat=$_POST['datapost'];
?>
<?php 
            for($x=1;$x<=24;$x=$x+3){
            ?>
            <div class="row">
                <?php
                include('1.php');
                $query_1="SELECT * FROM stock_books WHERE BID='$x'";
                $data_1=mysqli_query($conn,$query_1);
                $q1=mysqli_fetch_assoc($data_1);
                if($q1['Quantity']!=0 && ($q1['Category']==$cat)){
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
                $y=$x+1;
                $query_1="SELECT * FROM stock_books WHERE BID='$y'";
                $data_1=mysqli_query($conn,$query_1);
                $q1=mysqli_fetch_assoc($data_1);
                if($q1['Quantity']!=0 && $q1['Category']==$cat){
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
                if($q1['Quantity']!=0 && $q1['Category']==$cat){
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
<script>
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