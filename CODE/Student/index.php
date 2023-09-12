<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>Student | Register</title>
        <link rel='stylesheet' href="css/form.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/png" href="../img/favicon.ico"/>

    </head>

    <body>
        <div class="header">
            <h3 style="text-align:center; padding: 20px;color:white">Registration</h3>
        </div>
        <div class="modal-body">
            <br>
            <form method="post" action="reg.php" id="myForm" class="was-validated" enctype="multipart/form-data">
                <!--label for="personaldetails" style="color: #667eea;font-size:16pt;">Personal Details</label-->
                <div class="form-row" id="personaldetails">
                    <div class="col">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="First name" required="required" name="fnm" pattern="[A-Za-z]+">
                    </div>
                    <div class="col">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="Last name" required="required" name="lnm"  pattern="[A-Za-z]+">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="Address" required="required" name="addr">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="City" required="required" name="city" pattern="[A-Za-z]+">
                    </div>
                    <div class="form-group col-md-4">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="State"required="required" name="state" pattern="[A-Za-z]+">
                    </div>
                    <div class="form-group col-md-2">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="Pin-Code" required="required" name="pin"  pattern="[0-9]{6}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="Mobile Number" required="required" name="mob" pattern="[0-9]{10}">
                    </div>
                    <div class="form-group col-md-6">
                        <input style="color:white;" type="email" class="form-control  bg-dark" placeholder="Email Address" required="required" name="eml">
                    </div>
                    <div class="form-group col-md-6">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="LinkedIn Profile(OPTIONAL)" name="lprof">
                    </div>
                    <div class="form-group col-md-6">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="SSC percentage" required="required" name="ssc">
                    </div>
                    <div class="form-group col-md-6">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="HSC percentage" required="required" name="hsc">
                    </div>
                    <div class="form-group col-md-6">
                        <input style="color:white;" type="text" class="form-control  bg-dark" placeholder="UG percentage" required="required" name="ug">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select class="form-control  bg-dark" required="required" name="branch"  style="color:white;">
                            <option hidden="" value="">Branch</option>
                            <option value="Computer Technology">Computer Technology</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Civil">Civil</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Electrical">Electrical</option>
                            <option value="EnTC">Electronic and Tel. Comm.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input style="color:white;" type="text" required="required" class="form-control  bg-dark" pattern="[2]{1}[0]{1}[0-9]{2}" placeholder="Passout Year" name="passout">
                    </div>
                </div>
                <div class="form-row">
                    <div class=" form-group col">
                        <input type="text" class="form-control  bg-dark" placeholder="Sem I (%)" required="required"  pattern="[0-9]{2,3}$" name="I" style="color:white;">
                    </div>
                    <div class=" form-group col">
                        <input type="text" class="form-control  bg-dark" placeholder="Sem II (%)" pattern="[0-9]{2,3}$" required="required" name="II" style="color:white;">
                    </div>
                </div>
                <div class="form-row">
                    <div class=" form-group col">
                        <input type="text" class="form-control  bg-dark" pattern="[0-9]{2,3}$" placeholder="Sem III (%)" required="required" name="III" style="color:white;">
                    </div>
                    <div class=" form-group col">
                        <input type="text" class="form-control  bg-dark" pattern="[0-9]{2,3}$" placeholder="Sem IV (%)" required="required" name="IV" style="color:white;">
                    </div>
                </div>
                <div class="form-row">
                    <div class=" form-group col">
                        <input type="text" class="form-control  bg-dark" pattern="[0-9]{2,3}$" placeholder="Sem V (%)" required="required" name="V" style="color:white;">
</div>
<div class=" form-group col"> <input type="file" class="form-control  bg-dark" placeholder="Upload 5th Sem result" accept="application/pdf" required="required" name="uploaded_file2"  style="color:white;" >
                   
                        <div class="invalid-feedback">
                           UPLOAD RESULT(5TH SEM)
                        </div>
                    </div>

                    <div class=" form-group col">
                        <input type="text" class="form-control bg-dark" pattern="[0-9]{2,3}$" placeholder="Sem VI (%)" required="required" name="VI"  style="color:white;" >
</div>
 <div class=" form-group col"> <input type="file" class="form-control  bg-dark" placeholder="Upload 6th Sem result" accept="application/pdf" required="required" name="uploaded_file3"  style="color:white;" >
                    <div class="invalid-feedback">
                            UPLOAD RESULT(6TH SEM)
                        </div>
                     
                    </div>
                </div>
                <div class=" form-group col">
		Upload Resume
                    <input type="file" class="form-control  bg-dark" placeholder="Upload Resume" accept="application/pdf" required="required" name="uploaded_file1"  style="color:white;" >
                        <div class="invalid-feedback">
                            Please Select PDF file.
                        </div>
                </div>
		<div class=" form-group col">
			Upload Undertaking form
                    <input type="file" class="form-control  bg-dark" placeholder="Upload Undertaking form" accept="application/pdf" required="required" name="uploaded_file"  style="color:white;" >
                        <div class="invalid-feedback">
                            Please Select PDF file.
                        </div>
                </div>
                <br>
                <div style="align:center">
                    <input type="submit" style="max-width: 50%;margin-left: 25%" name="Register" value="Register" class="btn btn-outline-primary btn-lg btn-block">
                </div>
            </form>
        </div>
    </body>
</html>
