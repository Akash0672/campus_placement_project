<?php
include '../dbcon.php';
if (isset($_POST['reqid'])) {
    $id = $_POST['reqid'];
    $br = "";
    $cnt = 0;
    $len = 0;
    foreach ($_POST['hod'] as $selected) {
        $len++;
    }
    foreach ($_POST['hod'] as $selected) {
        $cnt++;
        $br = $br . "'" . $selected . "'";
        if ($cnt == 0)
            continue;
        $br = $br . ",";
    }
    $sql = "update req set hod_list=".'"'.$br.'"'.",costs=1 where id=$id";
    //echo $sql;
    $run = mysqli_query($db, $sql);
    
    if($run)
    {
        echo "<script>window.close()</script>";
    }
    else
        echo "<script>alert('ERROR')</script>";
}

