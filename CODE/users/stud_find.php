<?php
session_start();
include '../dbcon.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="ISO-8859-1">
        <title>Co-ordinator | Eligible Student's</title>
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
        <form method="post" action="stud_find.php?cid=<?php echo $_GET['id']?>">
            <center>
                <table class="table table-bordered table-striped table-dark" style="width: 90%;text-align: center ;"
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
                            <th data-field="stud">Select<br>Student</th>
                            <th data-field="id">Sr. No</th>
                            <th data-field="fnm" data-filter-control="input">Full Name</th>
                            <th data-field="eml" >Email Address</th>
                            <th data-field="mob" >Mobile No.</th>
                            <th data-field="link" >LinkedIn ID</th>
                            <th data-field="pout">Passout Year</th>
                            <th data-field="agg">Aggregate<br>Marks</th>
                            <th data-field="Resum">Download<br>Resume</th>
				  <th data-field="ut">Download<br>Undertaking Form</th>
                        </tr>
                    </thead>
                    <tbody class="thead-dark">
                        <?php
                        $tbl=$hodlst="";
                        $br = $_SESSION['dept'];
                        if(isset($_GET['id']))
                        {
                        $id=$_GET['id'];
                        $dpt=$_SESSION['dept'];
                        $sql = "SELECT * FROM req where id=$id";
                        $result = $db->query($sql);
                        $row = $result->fetch_assoc();
                        $tbl=$row['stud_id_list'];
                        $hodlst=$row['hod_list'];
                        $sql= "SELECT * from stud_info where aggr".$row['cond']." AND passout=".$row['pout']." AND branch = '$br';";
                        $cnt=0;
                        $result = $db->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $cnt++;
                            ?>
                            <tr>
                                <td scope="col">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="<?php echo $row['id'] ?>" name="stud_list[]" value="<?php echo $row['id'] ?>" class="custom-control-input">
                                        <label class="custom-control-label" for="<?php echo $row['id'] ?>"></label>
                                    </div>
                                </td>
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
                        }
                        ?>
                    </tbody>
                </table></center><br><br>
            <input type="submit" class="btn btn-outline-warning" style="width: 50%;margin-left: 25%" name="sub">
        </form>

        <script>
            $(function () {
                $('#table').bootstrapTable()
            })
        </script>
    </body>
</html>
<?php
if(isset($_POST['sub']))
{
    $id=$_GET['cid'];
    $sql = "SELECT * FROM req where id=$id";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $tbl=$row['stud_id_list'];
    $hodlst=$row['hod_list'];
    
    if($hodlst=="")
    {
       $sql = "update req set fullfill=1 where id=$id";
       $result = $db->query($sql);
    }
                        
    $dpt=$_SESSION['dept'];
    $str=str_replace("'$dpt',","",$hodlst);
    $c= explode(',', $hodlst);
    $cntt=count($c)-1;
    //echo $cntt;
    if($cntt==1)
        $str= "";
    $stud_list=$_POST['stud_list'];
    $lst="";
    $cnt=0;
    $len=0;
    foreach($_POST['stud_list'] as $selected){
        $len++;
    }
    foreach($_POST['stud_list'] as $selected){
        $cnt++;
        $lst=$lst.$selected;
        if($cnt==0 || $cnt==$len)
            continue;
        $lst=$lst.",";
    }
    
       $id=$_GET['cid'];
       $sql = "update req set stud_id_list=concat(stud_id_list, ',$lst'),hodsts=(hodsts+1),hod_list=".'"'.$str.'"'." where id=$id";
       $result = $db->query($sql);
       
       if($result)
       {
           $sql = "select stud_id_list,cnm from req where id=$id";
           $result = $db->query($sql);
           $row= mysqli_fetch_assoc($result);
           $cnm=$row['cnm'];
           $arr= explode(',', $row['stud_id_list']);
           $mob="";
           $eml="";
           for($i=1;$i<count($arr);$i++)
           {
               $sql="select mob from stud_info where id=".$arr[$i];
               //echo $sql;
               $result = $db->query($sql);
               $row= mysqli_fetch_assoc($result);
               
               $mob=$mob.$row['mob'];
               if($i==count($arr)-1)
                   continue;
               else 
                   $mob=$mob.",";
           }
           echo $mob;
           $numbers=urlencode($mob);
           //echo $numbers;
           $msg="Congratulations...!\nYou are selected for Placement in ".$cnm." Company.\nBest Regards,\nSanjivani Group of Institute";
          // echo $msg;
           if($cntt==1)
           {
           include 'sendsms.php';
           $sql = "update req set fullfill=1 where id=$id";
           $result = $db->query($sql);
           }
           echo "<script>window.close()</script>";
       }else{ echo "<script>alert('ERROR')</script>";}
   
}/*
 $ar= explode(',', $row['hod_list']);
                    $hcnt=$row['hodsts'];
                    $tcnt= count($hcnt);
                    if($tcnt==$hcnt)
                        continue;*/
?>