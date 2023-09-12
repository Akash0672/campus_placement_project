<?php
session_start();
include '../dbcon.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>Company | Eligible Student's</title>
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
        
        <br><br><br>
                <table class="table table-bordered table-striped table-dark table-sm" style="width: 90%;margin-left: 5%;text-align: center ;"
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
                            <th data-field="dept" data-filter-control="select">Department</th>
                            <th data-field="eml" >Email ID</th>
                            <th data-field="mob" >Mobile No.</th>
                            <th data-field="link" >LinkedIn ID</th>
                            <th data-field="pout">Passout<br>Year</th>
                            <th data-field="agg">Aggregate<br>Marks</th>
                            <th data-field="Resum">Resume</th>
                        </tr>
                    </thead>
                    <tbody class="thead-dark">
                        <?php
                        $cnm="";
                        if(isset($_GET['id']))
                        {
                        $id=$_GET['id'];
                        $cnt=0;
                        $sql = "SELECT stud_id_list,cnm FROM req where id=$id";
                        $result = $db->query($sql);
                        $row = $result->fetch_assoc();
                        $cnm=$row['cnm'];
                        $studno= explode(',',$row['stud_id_list']);
                        for($i=1;$i<count($studno);$i++) {
                            $cnt++;
                            $sql = "SELECT * FROM stud_info where id=$studno[$i]";
                            $result = $db->query($sql);
                            $row = $result->fetch_assoc();
                            ?>
                            <tr>
                                <td scope="col"><?php echo $cnt ?></td>
                                <td scope="col"><?php echo $row['fnm'] . " " . $row['lnm'] ?></td>
                                <td scope="col"><?php echo $row['branch'] ?></td>
                                <td scope="col"><?php echo $row['email'] ?></td>
                                <td scope="col"><?php echo $row['mob'] ?></td>
                                <td scope="col"><?php echo $row['LinkedIn_ID'] ?></td>
                                <td scope="col"><?php echo $row['passout'] ?></td>
                                <td scope="col"><?php echo $row['aggr'] ?></td>
                                <td scope="col"><a href="get_file.php?id=<?php echo $row['id'] ?>">Download</a></td>
                            </tr>
                            <?php
                          }
                        }
                        ?>
                    </tbody>
                    <caption style="color: yellow"><?php echo 'List of Eligible students For <b>'.$cnm."</b><br>Total Students - ".$cnt ?></caption>
                </table>
                <div>
                    <label for="table"></label>
                </div>
        
        <script>
            $(function () {
                $('#table').bootstrapTable()
            })
        </script>
    </body>
</html>