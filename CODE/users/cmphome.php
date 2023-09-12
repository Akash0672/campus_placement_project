<?php
session_start();
include '../dbcon.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>Company | Home</title>
        <link rel='stylesheet' href="css/form.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/png" href="../img/favicon.ico"/>
    </head>
    <body>
        <!-----------------------------Horizonal navbar start--------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo_1.png" height="50px" width="55px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="cmphome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="cmpmkreq.php">Make Requirement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cmpvuereq.php">Old Requirements</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <!input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button onclick="window.open('../logout.php', '_SELF')" title="Click to Logout"  class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-sign-out-alt link"></i> Logout</button>
                </div>
            </div>
        </nav>
        <!------------------------------------------Horizonalt Navbar End------------------------------------>
      <hr style="border: 1px solid red;">
        
        <!--slideShow-->
        <center>

            <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">

                    <div class="carousel-item active" >
                        <img src="../img/A.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/B.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/C.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/D.jpg"  width="500" height="500">
                    </div>
	 		<div class="carousel-item">
                        <img src="../img/E.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/F.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/G.jpg"  width="500" height="500">
                    </div>
	 		<div class="carousel-item">
                        <img src="../img/H.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/I.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/J.jpg"  width="500" height="500">
                    </div>
			 <div class="carousel-item">
                        <img src="../img/K.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/L.jpg"  width="500" height="500">
                    </div>
			 <div class="carousel-item">
                        <img src="../img/M.jpg"  width="500" height="500">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

        </div>
</center>

    </body>
</html>