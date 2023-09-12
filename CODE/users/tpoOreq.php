<?php
session_start();
include '../dbcon.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>TPO | Old Requirements</title>
        <!--link rel='stylesheet' href="css/form.css"-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/png" href="../img/favicon.ico"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/form.css">


        <link href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css" rel="stylesheet">
        <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
        <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF/jspdf.min.js"></script>
        <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/extensions/export/bootstrap-table-export.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/extensions/print/bootstrap-table-print.min.js"></script>

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
                    <li class="nav-item">
                        <a class="nav-link" href="tpohome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addhod.php">Add HOD</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="tpovuereq.php">View Requirements</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="tpoOreq.php">Old Requirements</a>
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
    <center>
        <table class="table table-bordered table-striped table-dark" style="width: 90%;text-align: center "
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
                    <th data-field="fnm">Company name</th>
                    <th data-field="eml" >Required Branch</th>
                    <th data-field="mob" >Passout Year</th>
                    <th data-field="link">&nbsp;&nbsp;&nbsp;&nbsp;Criteria&nbsp;&nbsp;&nbsp;&nbsp;     </th>
                    <th data-field="actn">Number of<br>Students Required</th>
                    <th data-field="Resum">Number of<br>Eligible Students</th>
                    <th data-field="asts">HOD<br>Approval Status</th>
                    
                </tr>
            </thead>
            <tbody class="thead-dark">

                <?php
                $br = $_SESSION['dept'];

                $sql = "SELECT * FROM req where costs=1";
                $cnt = 0;
                $result = $db->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $cnt++;
                    $id = $row['id'];
                    ?>
                    <tr>
                        <td scope="col"><?php echo $cnt ?></td>
                        <td scope="col"><?php echo $row['cnm'] ?></td>
                        <td scope="col"><?php $a = explode(',', $row['branch']);foreach ($a as $val) {echo $val . "<br>";}; ?></td>
                        <td scope="col"><?php echo $row['pout'] ?></td>
                        <td scope="col"><?php echo "Marks " . $row['cond'] ?></td>
                        <td scope="col"><?php echo $row['sno'] ?></td>
                        <td scope="col"><?php echo count(explode(',', $row['stud_id_list']))-1 ?></td>
                        <td scope="col"><?php if($row['fullfill']==0){echo "<a class='btn btn-danger btn-sm'>Pending</a>";}else {echo "<a class='btn btn-success btn-sm' href='vuestud.php?id=$id' title='Click to View Students list'>Approved</a>";}?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </center>
        <script>
            $(function () {
                $('#table').bootstrapTable()
            })
        </script>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Forward OF </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="tpofhod.php" target="_BLANK">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Requirment ID :</label>
                                <input type="text" class="form-control reqid" name="reqid" id="recipient-name" readonly="">
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ct" name="hod[]" value="Computer Technology">
                                        <label class="custom-control-label" for="ct" >Computer Technology</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="it" name="hod[]" value="Information Technology">
                                        <label class="custom-control-label" for="it" >Information Technology</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="mech" name="hod[]" value="Mechanical">
                                        <label class="custom-control-label" for="mech" >Mechanical</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ele" name="hod[]" value="Electrical">
                                        <label class="custom-control-label" for="ele" >Electrical</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="EnTC" name="hod[]" value="EnTC">
                                        <label class="custom-control-label" for="EnTC" >EnTC</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Civil" name="hod[]" value="Civil">
                                        <label class="custom-control-label" for="Civil" >Civil</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" onclick="$('#exampleModal').modal('hide')">Forward</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body .reqid').val(recipient)
            })
        </script>
    </body>
</html>