<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Debit Card</title>
      <style>
      body
          {
              background-color: lightgray;
          }
        </style>
  </head>
  <body>
      <div class="container" style="margin-left:430px">
          <br>
          <br>
          <br>
      <div class="row">
          <div class="col-md-5" style="background-color:white;border-radius:10px">
          <h4 align="center" style="color:cadetblue;margin-top:10px">Select Payment Method</h4><br>
              <div class="row">
                  <div class="col-sm-3">
                      <a href="debit.php"><img src="payment_option/debit.png" height="100"></a>
                          <p align="center" style="color:blue">Debit Card</p>
                  </div>
                  <div class="col-sm-3">
                      <a href="net.php"><img src="payment_option/net.png" height="100"></a>
                      <p align="center">Net Banking</p>
                  </div>
                  <div class="col-sm-3">
                      <a href="paytm.php"><img src="payment_option/paytm.png" height="100"></a>
                      <p align="center">Paytm</p>
                  </div>
                  <div class="col-sm-3">
                      <a href="gpay.php"><img src="payment_option/gpay.png" height="100"></a>
                      <p align="center">GPay</p>
                  </div>
              </div>
          </div>
          </div>
              <div class="row">
                  <div class="col-md-5" style="background-color:white;border-radius:10px;margin-top:10px">
                      <h4 align="center" style="color:cadetblue;margin-top:10px">Debit Card Info</h4><br>
                      <form style="margin-left:25px">
                          <b><font face="cursive" size=2>NAME ON CARD</font></b><br>
                      <input type="text" size=49 style="margin-top:5px;padding:5px;border-radius:5px"><br><br>
                          <b><font face="cursive" size=2>CARD NUMBER</font></b><br>
                      <input type="text" size=49 style="margin-top:5px;padding:5px;border-radius:5px" placeholder="XXXX-XXXX-XXXX-XXXX">
                          <br><br>
                          <div class="row">
                              <div class="col-sm-2">
                              <b><font face="cursive" size=2>EXPIRATION</font></b><br>
                              <input type="number" size=3 style="margin-top:5px;margin-right:300px;padding:5px;border-radius:5px" min="1" max="5">
                          </div>
                          <div class="col-sm-2">
                              <input type="number" size=3 style="margin-top:24px;margin-right:0px;padding:5px;border-radius:5px" min="1" max="5">
                          </div>
                              <div class="col-sm-2">
                              </div>
                              <div class="col-sm-4">
                              <b><font face="cursive" size=2>CVV NUMBER</font></b><br>  
                              <input type="text" size=17 placeholder="XXX" style="margin-top:5px;margin-right:0px;padding:5px;border-radius:5px">  
                              </div>
                          </div>
                          <br>
                          <button class="btn btn-success form-control" type="submit" id="mail" onclick="myfun()"><b><a href="verification_mail.php" style="text-decoration:none;color:white">SUBMIT</a></b></button>
                          <br><br>
                          <input type="checkbox"><font style="margin-left:5px">I agree to the Terms & Conditions & Privacy Policy.</font>
                      </form>
                  </div>
              </div>
      </div>
      <br><br><br><br>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>