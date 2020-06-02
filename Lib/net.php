<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>net banking</title>
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
                          <p align="center">Debit Card</p>
                  </div>
                  <div class="col-sm-3">
                      <a href="net.php"><img src="payment_option/net.png" height="100"></a>
                      <p align="center" style="color:blue">Net Banking</p>
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
                      <h4 align="center" style="color:cadetblue;margin-top:10px">Net Banking</h4><br>
                      <form style="margin-left:25px">
                          <b><font face="cursive" size=2>SELECT BANK</font></b><br>
                      <select style="margin-top:5px;padding:5px;border-radius:5px" width="100%">
                          <option></option>
                          <option>Allahabad Bank</option>
                          <option>Punjab National Bank</option>
                          <option>UCO Bank</option>
                          <option>Oriental Bank Of Commerce</option>
                          <option>Canara Bank</option>
                          <option>Punjab National Bank</option>
                          <option>Union Bank</option>
                          <option>Syndicate Bank</option>
                          <option>State Bank Of India</option>
                          <option>Andhra Bank</option>
                          <option>Corporate Bank</option>
                          </select>
                          <br><br>
                          <b><font face="cursive" size=2>TRANSACTION ID</font></b><br>
                      <input type="email" size=49 style="margin-top:5px;padding:5px;border-radius:5px" placeholder="abc@example.com">
                          <br><br>
                              <b><font face="cursive" size=2>TRANSACTION PASSWORD</font></b><br>
                      <input type="password" size=49 style="margin-top:5px;padding:5px;border-radius:5px" placeholder="xxxxxxxxxxxx">
                          <br><br>
                          <button class="btn btn-success" type="submit"><b><font face="sans-serif" style="margin-left:10px;margin-right:10px"><a href="verification_mail.php" style="color:white;text-decoration:none">SUBMIT</a></font></b></button>
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