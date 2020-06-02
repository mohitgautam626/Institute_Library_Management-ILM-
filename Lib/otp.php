<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>OTP</title>
      <style>
      input {
        margin: 0 5px;
        text-align: center;
        line-height: 80px;
        font-size: 50px;
        border: solid 1px #ccc;
        box-shadow: 0 0 5px #ccc inset;
        outline: none;
        width: 20%;
        transition: all .2s ease-in-out;
        border-radius: 3px;
        
        &:focus {
          border-color: purple;
          box-shadow: 0 0 5px purple inset;
        }
        
        &::selection {
          background: transparent;
        }
      }
          body
          {
              margin:0px;
              padding:0px;
              background-color: lightgray;
          }
          button {
        margin:  30px 0 40px;
        width: 93%;
        padding: 6px;
        background-color: #B85FC6;
        border: none;
        text-transform: uppercase;
      }
      </style>
  </head>
  <body>
      <br><br><br>
      <div class="container" style="margin-left:440px;margin-top:30px">
          <div class="row">
              <div class="col-md-5" style="background-color:white;border-radius:10px;border-color:grey">
                  <br>
                  <h3 align="center" style="font-family:sans serif">Please enter the 4-digit verification code we sent via SMS:</h3>
                  <p>(we want to make sure it's you before we contact our movers)</p>
                  <div class="container">
                      <form id="otp" method="post" action="verify_otp.php">
                      <input type="text" min="0" max="9" maxlength="1" pattern="[0-9]{1}" size="1" name="a1">
                      <input type="text" min="0" max="9" maxlength="1" pattern="[0-9]{1}" size="1" name="a2">
                      <input type="text" min="0" max="9" maxlength="1" pattern="[0-9]{1}" size="1" name="a3">
                      <input type="text" min="0" max="9" maxlength="1" pattern="[0-9]{1}" size="1" name="a4">
                          <span style="color:red;margin-left:115px" id="warning"><b></b></span><br>
                          <input type="submit" value="Verify" class="btn btn-success form-control">
                      </form>
                      <h6 align="center" face="sans serif">Didn't receive the code?<br><a href="verification_mail.php">Send code again</a></h6><br>
                  </div>
              </div>
          </div>
      </div>
      <script> 
          function myfun()
          {
              var a=document.getElementById('a1').value;
              var b=document.getElementById('a2').value;
              var c=document.getElementById('a3').value;
              var d=document.getElementById('a4').value;
              var otp=(a*1000)+(b*100)+(c*10)+d;
              $.ajax({
                  url:'verify_otp.php',
                  type:'post',
                  data:{otp:otp},
                  success:function(result){
                      $('#warning').html(result);
                  }
              });
          }
      </script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>