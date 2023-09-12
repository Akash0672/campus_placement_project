<html>
    <head>
        <title>Sanjivani Campus Recruitment</title>    <!--Title-->
        <link rel = "icon" type = "image/png" href = "./img/sanjivani_group_logo_white_bg.png">
        <meta charset="utf-8">     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   <!-- ICON -->
        <link rel="stylesheet" type="text/css" href="css/stylehomepage.css">
        <script src="js/script.js"></script>




        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="./homepage/bootstrap.min.css">
        <link rel="stylesheet" href="./homepage/font-awesome.min.css">
    </head>
    <body id="page-top">
        <header>                     <!--Navigation Bar-->

            <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="">
                        <img src="img/sanjivani_group_logo_white_bg.png" style="height:70px; width:100px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link" href="./student/">Student</a></li>
                            <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#cmpModal" href="">Company login</a></li>
                            <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#clgModal" href="">College login</a></li>

                            <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sanjivanikbp.org.in/">About college </a></li>
                            <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link  js-scroll-trigger" href="http://sanjivanikbp.org.in/our-recruiters/">Partners</a></li>
                            <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link  js-scroll-trigger" href="" data-toggle = "modal" data-target = "#New" >Contact us </a></li>
                        </ul>
                    </div>
                </div>
            </nav><!--navbar sticky black color files-->
            <script src="./homepage/jquery-3.3.1.min.js.download"></script>
            <script src="./homepage/bootstrap.min.js.download"></script>
            <script src="./homepage/jquery.easing.min.js.download"></script>
            <script src="./homepage/grayscale.js.download"></script>
            <script id="bs-live-reload" data-sseport="" data-lastchange="" src="./homepage/livereload.js.download"></script>
        </header>

        <div class="mar">                               <!-- Notice Marquee-->    
            <marquee onmouseover=this.stop() onmouseleave=this.start()><b>
                    Notice:  Recruitment Portal has been started from 01-08-2023 to 31-03-2024 .Click here to download Undertaking Form <a href="UDERTAKING FORM.pdf" download style="color:white">Click Here</a>
                </b></marquee>
        </div>

        <!--slideShow-->
        <main>

            <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">

                    <div class="carousel-item active" >
                        <img src="img/22.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="img/33.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="img/44.jpg"  width="500" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="img/55.png"  width="500" height="500">
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

        <!--CONTACT US-->


<?php
$servername="localhost";
$username="root";
$password="";
$db="campus_placement";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];

    // Sanitize and validate the inputs here

    $sql = "INSERT INTO contact(name, email, subject, message) VALUES('$Name', '$email', '$sub', '$msg')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.assign('../index.php')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


        <div class="modal fade" id = "new" role = "dialog" style="color: black;">
            <div class = "modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <form id="contact_form" method="POST" action="">
                            <div class="md-form mb-5">
                                <input type="text" id="form34" class="form-control validate" placeholder="Enter Your Name" name="name" required="required" style="border-color:#80ffdf; ">
                                <label data-error="wrong" data-success="right" for="form34"><b>Your name</b></label>
                            </div>

                            <div class="md-form mb-5">

                                <input type="email" id="form29" class="form-control validate" placeholder="Enter Your Email Address" required="required" name="email" style="border-color:#80ffdf; ">
                                <label data-error="wrong" data-success="right" for="form29"><b>Your Email</b></label>
                            </div>

                            <div class="md-form mb-5">

                                <input type="text" id="form32" class="form-control validate" placeholder="Enter Subject" required="required" name="sub" style="border-color:#80ffdf; ">
                                <label data-error="wrong" data-success="right" for="form32"><b>Subject</b></label>
                            </div>

                            <div class="md-form">

                                <textarea type="text" id="form8" class="md-textarea form-control" rows="4" style="border-color:#80ffdf; "required="required" placeholder="Enter Your Query....." name="msg"></textarea>
                                <label data-error="wrong" data-success="right" for="form8"><b>Your message</b></label>
                            </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="Submit" class="btn btn-primary" name="save" value="Submit">

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">                       <!--LOGIN FORM MODAL-->

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">

                        <p>
                        <h2 style="color: black;"><i><b><center>LOGIN</center></b></i></h2>
                        <form action="data.php" method="POST">
                            <div class="form-group">
                                <div class="form-group"><input type="text" style="border-color:#80ffdf; " class="form-control" name="username" id="uname" placeholder="Enter Username" required="required"s></div></br>
                                <div class="form-group"><input type="password" style="border-color: #80ffdf; " class="form-control" name="password" id="pass" placeholder="Enter Password" required="required" ></div>         
                            </div>
                            </br>
                            </br>
                            <input type="button" class="btn btn-success" name="Submit" value="Submit" /></br>
                            </br>
                            <a href="demolog.php" style="color: blue;"><i>CREATE A NEW ACCOUNT</i></a>
                        </form>
                        </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>





        <!----------------------------- COMPANY login MODAL----------------------->
        <div class="modal fade" id="cmpModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form action="login_process.php" method="POST">
                            <p>
                            <h3 style="color: black;"><i><b><center>Company Login</center></b></i></h3>
                            <div class="form-group">
                                <div class="form-group"><input type="text" style="border-color:#80ffdf; " class="form-control" name="usr" id="uname" placeholder="Enter Username" required="required"></div><br>
                                <div class="form-group"><input type="password" style="border-color: #80ffdf; " class="form-control" name="pass" id="pass" placeholder="Enter Password" required="required" ></div>         
                                <input type="hidden" name="sts" value="2">
                            </div>
                            <!--a href="demolog.php" style="color: blue;"><i>CREATE A NEW ACCOUNT</i></a-->
                            </p>
                            <center>
                                <input type="submit" class="btn btn-lg btn-outline-success btn-sm" name="login" style="width: 40%" value="Login" >
                                <!--button class="btn btn-lg btn-outline-danger btn-sm" style="width: 40%">Register Here</button>-->
                            </center>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-lg btn-outline-danger btn-sm" style="width: 40%;margin-right: 29%" onclick="window.location.assign('users/creg.php');">Register Here</button>
                        <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
                    </div>
                </div>
            </div>
        </div>




        <!----------------------------- College Login MODAL----------------------->
        <div class="modal fade" id="clgModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form action="login_process.php" method="POST">
                            <p>
                            <h3 style="color: black;"><i><b><center>College Login</center></b></i></h3>
                            <div class="form-group">
                                <div class="form-group"><input type="text" style="border-color:#80ffdf; " class="form-control" name="usr" id="uname" placeholder="Enter Username" required="required"s></div><br>
                                <div class="form-group"><input type="password" style="border-color: #80ffdf; " class="form-control" name="pass" id="pass" placeholder="Enter Password" required="required" ></div>         
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="sts" id="inlineRadio1" required="required" value="1"><a style="color:black"> TPO</a>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="sts" id="inlineRadio2" required="required" value="4"><a style="color:black"> HOD</a>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="sts" id="inlineRadio3" required="required" value="3" ><a style="color:black"> Departmental co-ordinator</a>
                                    </label>
                                </div>
                            </div>
                            <!--a href="demolog.php" style="color: blue;"><i>CREATE A NEW ACCOUNT</i></a-->
                            </p>
                            <center>
                                <input type="submit" class="btn btn-lg btn-outline-success btn-sm" name="login" style="width: 40%" value="Login" >
                                <!--button class="btn btn-lg btn-outline-danger btn-sm" style="width: 40%">Register Here</button>-->
                            </center>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-lg btn-outline-danger btn-sm" style="width: 40%;margin-right: 29% " onclick="window.location.assign('users/treg.php');">Register Here</button>
                        <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--TEXT LABLE1-->
    <div class="lable1">
        Welcome to Sanjivani placement drive
    </div>
    <div class="icondown">
        <a href="#down" class="fa fa-angle-down" style="color: white"></a></div>
</main>
<div class="info" style="margin-left: 60px; line-height: 2; font-size:20px">
    <h3>Training and Placement Cell:</h3>
    <p>
        &emsp; &emsp;Training and placement Cell is established to enhance the employability skills and overall development of the students. T&P Cell aims providing maximum job opportunities to eligible and needy students. The Cell organizes pre-placement training programmes like practice aptitude test, Group Discussions, arranging Expert lectures on interview techniques and presentation skills, etc.</p>
    <p>
        We feel proud to say that our students have got dream job opportunities with dream salaries of Rs.9 lacs per annum.Our students have been placed in various reputed companies all over India.  We make students aware of job opportunities available even after they pass out from the institute. T&P cell is committed to provide Diploma Engineers as per the changing scenario of industrial context.

    </p>
</div>

<!--IMAGE MARQUEE BEFORE FOOTER-->

<marquee onmouseover=this.stop() onmouseleave=this.start() id="image">
    <img src="img/A.Jpg" width="600" height="500">
    <img src="img/B.Jpg" width="600" height="500">
    <img src="img/C.Jpg" width="600" height="500">
    <img src="img/D.Jpg" width="600" height="500">
    <img src="img/E.Jpg" width="600" height="500">
    <img src="img/F.Jpg" width="600" height="500">
    <img src="img/G.Jpg" width="600" height="500">
    <img src="img/F.Jpg" width="600" height="500">
    <img src="img/I.Jpg" width="600" height="500">
    <img src="img/J.Jpg" width="600" height="500">
    <img src="img/K.Jpg" width="600" height="500">
    <img src="img/L.Jpg" width="600" height="500">
    <img src="img/M.Jpg" width="600" height="500">
   </marquee>

<p>
</p>
<p>
</p>
<div class="features-boxed" id="image">         <!-- All Departments -->
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Our Departments </h2>
            <p class="text-center">All Departments of our college..</p>
        </div>
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item mt-4">
                <div class="box"><img src="./departments/cm.jpg" height="250" width="300">
                    <h3 class="name">Computer Technology </h3>
                    <p class="description"><b>Vision of Department:</b><br>
                        Vision of department of Computer Technology is to improve persistently its educational environment in order to develop state-of-art Computer Technologists those will contribute toever-changing field of Computer Technology.</p>  </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item mt-4">
                <div class="box"><img src="./departments/if.jpg" height="250" width="300">
                    <h3 class="name">Information Technology</h3>
                    <p class="description"><b>Vision of the Department:</b><br>

                        To provide the sense of creativity, talent & knowledge to young students from rural area in the blooming garden of information technology, we are here to provide an environment of high academic ambience to mould young minds and make them capable of welcoming the future to become entrepreneur, to get employed or pursue higher studies.</p>  </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item mt-4">
                <div class="box"><img src="./departments/me.jpg" height="250" width="300">
                    <h3 class="name">Mechanical Engineering</h3>
                    <p class="description"><b>Vision of the Department:</b><br>

                        Our vision is to develop mechanical engineers for changing scenario of industrial context.</p>  </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item mt-4">
                <div class="box"><img src="./departments/ee.jpg" height="250" width="300">
                    <h3 class="name">Electrical Engineering</h3>
                    <p class="description"><b>Vision of the Department:</b><br>

                        Our vision is to develop Electrical Engineers for changing scenario of industrial context.</p></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item mt-4">
                <div class="box"><img src="./departments/etc.jpg" height="250" width="300">
                    <h3 class="name">Electronics & Telecommunication</h3>
                    <p class="description"><b>Vision of Department:</b><br>

                        To Create professionals& to provide developed and testing environment to meet ever changing and ever demanding needs of the Electronic Industry in particular, along with IT & other inter disciplinary fields in general so as to strengthen social economy.</p>  </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item mt-4">
                <div class="box"><img src="./departments/ce.jpg" height="250" width="300">
                    <h3 class="name">Civil  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engineering</h3>
                    <p class="description"><b>Vision of the Department:</b><br>

                        Developing state of art civil engineers for the upliftment of the rural society through advanced construction techniques.</p>  </div>
            </div>
        </div>
    </div>
</div>


<hr color="red">                 <!-- Red Horizontal Line-->

<div class="news" id="down">
    <div class="testimonials-clean"></div>
    <div style="text-align:center;">
        <h2 class="divider-style"><span>Latest News Related to placement</span></h2>
    </div>

    <ul style="list-style-type:square; margin-left: 60px; line-height: 2; font-size:20px" >
        <li>150+ companies visit Sanjivani college's placement drive every year.</li>
        <li>In 2019, 700+ students from Sanjivani college of engineering and MBA colleges in Kopargaon have been placed before appearing for final exams</li>
        <li>153 students from Sanjivani College Kopargaon campus were recruited by Dhoot Transmission, Aurangabad</li>
        <li>Sanjivani is collaborating with Bajaj Motors Haridwar, Uttarakhand as a placement partner for the University’s Sijoul campus</li>
    </ul>
</div>

<hr color="lime">


<div class="testimonials-clean" style="background-color: white; color:black">           <!-- Students Views about college -->


    <div class="container">
        <div class="intro">
            &nbsp;
            <h2 class="text-center">Testimonials </h2>
            <p class="text-center">Our students love us! Read what they have to say below...</p>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">“Sanjivani University proved to be a pool of opportunities for me. My sincere appreciation & gratitude to the Training & Placement Department and all staffs of Sanjivani Group of Institute for their efforts in imparting quality technical and aptitude training. I am very grateful to them for effectively and sincerely helping me to grab first ever opportunity that came into my life.”</p>
                </div>
                <div class="author"><img class="rounded-circle" src="./departments/admin.jpg" height="50" width="50">
                    <h5 class="name">Akash</h5>
                    <p class="title">CEO of Company Inc.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">“I am very glad to share a positive journey of Engineering at Sanjivani University. Here the atmosphere is full of motivation and innovation. All the faculties are enthusiastic and always ready to help. Because of blessings of parents and support of all staffs & Training and Placement Cell I got an opportunity to apply and got selected in TCS.”</p>
                </div>
                <div class="author"><img class="rounded-circle" src="./departments/admin.jpg" height="50" width="50">
                    <h5 class="name">Aniket</h5>
                    <p class="title">Founder of Style Co.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">“I got placed in Wipro it is because of the efforts put by our faculties and Training and Placement cell, which always make sure that students get placed in the best company in the market. Sanjivani University provides a great exposure to students by organizing different activities which are very much helpful for every student for deciding their future field.”</p>
                </div>
                <div class="author"><img class="rounded-circle" src="./departments/admin.jpg" height="50" width="50">
                    <h5 class="name">Shubham</h5>
                    <p class="title">Owner of Creative Ltd.</p>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Footer -->
<div class="footer-basic" id="footer">
    <footer>
        <div class="social">
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin-square"></a>
            <a href="#" class="fa fa-twitter-square"></a>
            <a href="#" class="fa fa-facebook-square"></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="">Home</a></li>
            <li class="list-inline-item"><a href="">Services</a></li>
            <li class="list-inline-item"><a href="">About</a></li>
            <li class="list-inline-item"><a href="">Terms</a></li>
            <li class="list-inline-item"><a href="">Privacy Policy</a></li>
        </ul><br>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="tel:xxxxxxxxxx"> Call Us</a></li>
            <li class="list-inline-item"><a href="mailto:a@gmail.com"> Email Us</a> </li></ul>
        <p class="copyright">Sanjivani K.B.P. Polytechnic © 2023</p>
    </footer>
</div>

</body>
</html>