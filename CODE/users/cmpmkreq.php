<?php
session_start();
include '../dbcon.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>Company | Make Requirement</title>
        <link rel='stylesheet' href="css/form.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/png" href="../img/favicon.ico"/>
    </head>
    <script>
function validateForm() {
  var a = document.forms["myForm"]["cnm"].value;
 var b= document.forms["myForm"]["cond"].value;
 var c = document.forms["myForm"]["passout"].value;
 var d = document.forms["myForm"]["perc"].value;
 var e = document.forms["myForm"]["no"].value;

  if (a == "" ||b == ""||c == "" ||d == ""||e == "" ) {
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
                        <a class="nav-link" href="cmphome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cmpmkreq.php">Make Requirement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cmpvuereq.php">Old Requirements</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <!input class="form-control bg-dark mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button onclick="window.open('../logout.php', '_SELF')" title="Click to Logout"  class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-sign-out-alt link"></i> Logout</button>
                </div>
            </div>
        </nav>
        <!------------------------------------------Horizonalt Navbar End------------------------------------>
        <hr style="border: 1px solid red;">

        <div class="header" style="margin-top:1px; ">
            <h3 style="text-align:center; padding: 20px;color:white">Requirement</h3>
        </div>
        <div class="modal-body">
            <br>
            <form method="post" action="make.php"  target="_BLANK" id="myForm" class="was-validated" id='frm1' enctype="multipart/form-data">
                <!--label for="personaldetails" style="color: #667eea;font-size:16pt;">Personal Details</label-->
                <div class="form-row" id="personaldetails">
                    <div class="col">
                        <input  style="color:white;" type="hidden" class="form-control bg-dark" placeholder="First name" required="" name="cnm" value="<?php echo $_SESSION['cnm'] ?>" >
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select style="color:white;" sty required="" name="cond" class="form-control bg-dark">
                            <option hidden value="">Select Condition</option>
                            <option value="==">Equal to</option>
                            <option value="<=">Less Than Equal to</option>
                            <option value=">=">Greater Than Equal to</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input  style="color:white;" type="text" class="form-control bg-dark" placeholder="Aggregate Percentage" required="" name="perc" pattern="[0-9]{2,3}$">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select style="color:white" required="" name="passout" class="form-control bg-dark">
                            <option hidden value="">Select Passout Year</option>
                            <option value="<?php echo date('Y') + 2; ?>"><?php echo date('Y') + 2; ?></option>
                            <option value="<?php echo date('Y') + 1; ?>"><?php echo date('Y') + 1; ?></option>
                            <option value="<?php echo date('Y'); ?>" style="color: red"><?php echo date('Y') . ' (Current)'; ?></option>
                            <option value="<?php echo date('Y') - 1; ?>"><?php echo date('Y') - 1; ?></option>
                            <option value="<?php echo date('Y') - 2; ?>"><?php echo date('Y') - 2; ?></option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input  style="color:white;" type="number" class="form-control  bg-dark" placeholder="Number of Required Student" required="" name="no">
                    </div>
                </div>
                <label for="tbl">Branch</label>
                <table id="tbl">
                    <tr class="form-row">
                        <td>       
                            <div class="form-check form-check-inline">
                                <input  style="color:white;" class="form-check-input" type="checkbox" name='br[]' id="inlineCheckbox1" value="Computer Technology">
                                <label class="form-check-label" for="inlineCheckbox1">Computer Technology</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input  style="color:white;" class="form-check-input" type="checkbox"  name='br[]' id="inlineCheckbox2" value="Information Technology">
                                <label class="form-check-label" for="inlineCheckbox2">Information Technology</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input  style="color:white;" class="form-check-input" type="checkbox"  name='br[]' id="inlineCheckbox3" value="Mechanical">
                                <label class="form-check-label" for="inlineCheckbox3">Mechanical</label>
                            </div>
                        </td>
                    </tr>
                    <tr class="form-row">
                        <td>
                            <div class="form-check form-check-inline">
                                <input  style="color:white;" class="form-check-input" type="checkbox"  name='br[]' id="inlineCheckbox4" value="Electrical">
                                <label class="form-check-label" for="inlineCheckbox4">Electrical</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input  style="color:white;" class="form-check-input" type="checkbox" name='br[]' id="inlineCheckbox5" value="EnTC">
                                <label class="form-check-label" for="inlineCheckbox5">Electronic and Tel. Comm.</label>
                            </div>
                        </td><td>
                            <div class="form-check form-check-inline">
                                <input  style="color:white;" class="form-check-input" type="checkbox"  name='br[]' id="inlineCheckbox6" value="Civil">
                                <label class="form-check-label" for="inlineCheckbox6">Civil</label>
                            </div>
                        </td>
                    </tr>
                </table>
                <br>

                <br>
                <div style="align:center">
                    <button type="submit" style="max-width: 50%;margin-left: 25%" name="Register" class="btn btn-outline-primary btn-lg btn-block">Make</button>
                </div>
            </form>
            <script src="js/validate.js"></script>
        </div>
    </body>
</html>