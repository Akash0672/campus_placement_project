<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>TPO | Add HOD</title>
        <link rel='stylesheet' href="css/form.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/png" href="../img/favicon.ico"/>


    </head>
<script>
function validateForm() {
  var a = document.forms["myForm"]["fnm"].value;
 var b= document.forms["myForm"]["unm"].value;
 var c = document.forms["myForm"]["pass"].value;
 var d = document.forms["myForm"]["branch"].value;
 var e = document.forms["myForm"]["mob"].value;
 var f = document.forms["myForm"]["eml"].value;
 
 
  if (a == "" ||b == ""||c == "" ||d == ""||e == "" ||f == "") {
    alert("All fields must be filled out");
	
    return false;
  }
}
</script>
    <body>
        <!-----------------------------Horizonal navbar start--------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo_1.png" height="50px" width="55px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tpohome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="addhod.php">Add HOD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tpovuereq.php">View Requirements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tpoOreq.php">Old Requirements</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <!input class="form-control bg-dark mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button onclick="window.open('logout.php', '_SELF')" title="Click to Logout"  class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-sign-out-alt link"></i> Logout</button>
                </div>
            </div>
        </nav>
        <hr style="border: 1px solid red;">
        <!------------------------------------------Horizonalt Navbar End------------------------------------>
        <div class="header" style="margin-top: 10px;">
            <h3 style="text-align:center; padding: 20px;color:white">Add HOD</h3>
        </div>
        <div class="modal-body">
            <br>
            <form method="post" action="addhod.php" id="myForm" onsubmit="return validateForm()" class="was-validated" id='frm1' novalidate>
                <!--label for="personaldetails" style="color: #667eea;font-size:16pt;">Personal Details</label-->
                <div class="form-row">
                    <div class="col">
                        <input style="color:white" type="text" class="form-control bg-dark" placeholder="Name" required="" name="fnm">
                    </div>
                </div>
                <br>
                <div class="form-row" id="personaldetails">
                    <div class="col">
                        <input style="color:white" type="text" class="form-control bg-dark" placeholder="User Name" required="" name="unm">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input style="color:white" type="password" class="form-control bg-dark" placeholder="Password" required="" name="pass">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <select style="color:white;" class="form-control bg-dark" required="" name="branch">
                            <option hidden="" value="">Select Department</option>
                            <option value="Computer Technology">Computer Technology</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Civil">Civil</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Electrical">Electrical</option>
                            <option value="EnTC">Electronic and Tel. Comm.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <input style="color:white" type="text" class="form-control bg-dark" placeholder="Mobile Number" pattern="[0-9]{10}" required="" name="mob">
                    </div>
                    <div class="form-group col-md-4">
                        <input style="color:white" type="email" class="form-control bg-dark" placeholder="Email Address" required="" name="eml">
                    </div>
                </div>
                <br>
                <div style="align:center">
                    <button type="submit" style="max-width: 50%;margin-left: 25%" name="Register" class="btn btn-outline-primary btn-lg btn-block">Add</button>
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
    $br=$_POST['branch'];
    
    $sql="INSERT INTO login_info VALUES ('','$unm','$pass','$fnm','$eml','$mob','4','$br')";
    $run= mysqli_query($db, $sql);
    
    if($run==true)
    {
        ?>
            <script>
                
                alert("HOD Added Successfully..!")
            </script>
        <?php
    }
    
}

?>