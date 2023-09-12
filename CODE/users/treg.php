
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>Officer | Register</title>
        <link rel='stylesheet' href="css/form.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/png" href="../img/favicon.ico"/>


    </head>
<script>
function validateForm() {
  var a = document.forms["myForm"]["unm"].value;
 var b= document.forms["myForm"]["fnm"].value;
 var c = document.forms["myForm"]["pass"].value;
 var d = document.forms["myForm"]["mob"].value;
 var e = document.forms["myForm"]["eml"].value;
 
 
  if (a == "" ||b == ""||c == "" ||d == ""||e == "") {
    alert("All fields must be filled out");
	
    return false;
  }
}
</script>

    <body>
        <div class="header">
            <h3 style="text-align:center; padding: 20px;color:white">Registration</h3>
        </div>
        <div class="modal-body">
            <br>
            <form method="post" action="treg.php" id="myForm" class="was-validated" onsubmit="return validateForm()" id='frm1' novalidate>
                <!--label for="personaldetails" style="color: #667eea;font-size:16pt;">Personal Details</label-->
                <div class="form-row" id="personaldetails">
                    <div class="col">
                        <input style="color:white" type="text" class="form-control bg-dark" placeholder="User Name" required="" name="unm">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input style="color:white" type="text" class="form-control bg-dark" placeholder="Full name" required="" name="fnm">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input style="color:white" type="password" class="form-control bg-dark" placeholder="Password" required="" name="pass">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input style="color:white" type="text" class="form-control bg-dark" placeholder="Mobile Number" required="" pattern="[0-9]{10}" name="mob">
                    </div>
                    <div class="form-group col-md-6">
                        <input style="color:white" type="email" class="form-control bg-dark" placeholder="Email Address" required="" name="eml">
                    </div>
                </div>
                                <br>
                <div style="align:center">
                    <button type="submit" style="max-width: 50%;margin-left: 25%" name="Register" class="btn btn-outline-primary btn-lg btn-block">Register</button>
                </div>
                <br>
            </form>
            <script src="js/validate.js"></script>
        </div>
    </body>
</html>
<?php

if(isset($_POST['Register']))
{
    include '../dbcon.php';
    
    $unm=$_POST['unm'];
    $pass=$_POST['pass'];
    $mob=$_POST['mob'];
    $eml=$_POST['eml'];
    $fnm=$_POST['fnm'];
    
    $sql="INSERT INTO login_info VALUES ('','$unm','$pass','$fnm','$eml','$mob','1','')";
    if($run= mysqli_query($db, $sql)){
        echo "<script>alert('New TPO Registered Successfully'); window.location.assign('../index.php')</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
    
    if($run==True)
    {
        ?>
            <script>
                window.location.assign('../index.php');
            </script>
        <?php
    }
    
}

?>