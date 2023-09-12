<?php
session_start();
include '../dbcon.php';
$cnm=$_POST['cnm'];
$cond=$_POST['cond'];
$perc=$_POST['perc'];
$yer=$_POST['passout'];
$no=$_POST['no'];
$cid=$_SESSION['user_id'];
$br="";
$cnt=0;
$len=0;
foreach($_POST['br'] as $selected){
    $len++;
}
foreach($_POST['br'] as $selected){
    $cnt++;
    $br=$br."'".$selected."'";
    if($cnt==0 || $cnt==$len)
        continue;
    $br=$br.",";
}


$sql="INSERT INTO req VALUES ('','$cnm','$cid','$cond $perc',".' " '.$br.' " '.",'$no','$yer','0','0','0','','')";
echo $sql;
$run= mysqli_query($db, $sql);

if($run)
    echo '<script>
    alert("Requirment Done Successfully"); 
    window.close()
    window.location.assign("make.php");</script>';

else {
    echo "ERROR";
}
?>
