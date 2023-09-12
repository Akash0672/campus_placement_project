<?php
session_start();
include '../dbcon.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>HOD | Registered Student's</title>
        <link rel='stylesheet' href="css/form.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/png" href="../img/favicon.ico"/>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css" rel="stylesheet">
        <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
        <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF/jspdf.min.js"></script>
        <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/extensions/export/bootstrap-table-export.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/extensions/print/bootstrap-table-print.min.js"></script>

    </head>
    <body style="height: 100vh">
        
        <!-----------------------------Horizonal navbar start--------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo_1.png" height="50px" width="55px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="hodhome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addco.php">Add Departmental Co-Ordinator</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="regstud.php">View Registered Student's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deptreq.php">Requirements</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <!input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button onclick="window.open('logout.php', '_SELF')" title="Click to Logout"  class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-sign-out-alt link"></i> Logout</button>
                </div>
            </div>
        </nav>
        <!------------------------------------------Horizonalt Navbar End------------------------------------>
        <hr style="border: 1px solid red;">

                <table class="table table-bordered table-striped table-dark" style="width: 90%;margin-left: 5%;text-align: center "
                       id="table"
                       data-show-print="true" 
                       data-filter-control="true"
                       data-show-search-clear-button="true" 
                       data-show-columns="true" 
                       data-show-export="true"
                       data-show-footer="true"
                       data-buttons="btn btn-sm"
                       data-minimum-count-columns="3">

                    <thead class="">
                        <tr>
                            <th data-field="id">Sr. No</th>
                            <th data-field="fnm" data-filter-control="input">Full Name</th>
                            <th data-field="eml" >Email Address</th>
                            <th data-field="mob" >Mobile No.</th>
                            <th data-field="link" >LinkedIn ID</th>
                            <th data-field="pout" data-filter-control="select">Passout Year</th>
                            <th data-field="agg" data-filter-control="input">Aggregate Marks</th>
                            <th data-field="Resum">Download Undertaking form</th>
				
                            <th data-field="ut">Download Resume</th>
                        </tr>
                    </thead>
                    <tbody class="thead-dark">

                        <?php
                        $br = $_SESSION['dept'];

                        $sql = "SELECT * from stud_info where branch='$br' and sts=1 ORDER BY passout DESC,fnm ASC";
                        $cnt=0;
                        $result = $db->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $cnt++;
                            ?>
                            <tr>
                                <td scope="col"><?php echo $cnt ?></td>
                                <td scope="col"><?php echo $row['fnm'] . " " . $row['lnm'] ?></td>
                                <td scope="col"><?php echo $row['email'] ?></td>
                                <td scope="col"><?php echo $row['mob'] ?></td>
                                <td scope="col"><?php echo $row['LinkedIn_ID'] ?></td>
                                <td scope="col"><?php echo $row['passout'] ?></td>
                                <td scope="col"><?php echo $row['aggr'] ?></td>
                                <td scope="col"><a href="get_file.php?id=<?php echo $row['id'] ?>">Download</a></td>
				  <td scope="col"><a href="get_file1.php?id=<?php echo $row['id'] ?>">Download</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

        <script>
            $(function () {
                $('#table').bootstrapTable()
            })
        </script>
    </body>
</html>