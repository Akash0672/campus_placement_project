<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../dbcon.php';
$fnm=$_POST['fnm'];
$lnm=$_POST['lnm'];
$eml=$_POST['eml'];
$mob=$_POST['mob'];
$lprof=$_POST['lprof'];
$addr=$_POST['addr'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$branch=$_POST['branch'];
$passout=$_POST['passout'];
$I=$_POST['I'];
$II=$_POST['II'];
$III=$_POST['III'];
$IV=$_POST['IV'];
$V=$_POST['V'];
$VI=$_POST['VI'];
$tenth=$_POST['ssc'];
$twelth=$_POST['hsc'];
$ug=$_POST['ug'];

$dt= date('Y-m-d');

$aggr=(float)(($V+$VI)/2);

$address=$addr." City : ".$city." State : ".$state." - ".$pin;

$run=false;

$sql="INSERT INTO stud_info VALUES ('','$fnm','$lnm','$eml','$mob','$address','$lprof','$branch','$passout','$I','$II','$III','$IV','$V','$VI','$aggr','$dt','0')";
if($run= mysqli_query($db, $sql)){
  echo "<script>alert('New Student Registered Successfully'); window.location.assign('../index.php')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 
$sql = "SELECT id FROM stud_info WHERE fnm='$fnm' AND mob='$mob' AND branch='$branch' LIMIT 1";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$sid=$row['id'];
if($run==false)
{
    echo("ERROR");
}
else
{
    include 'add_file.php';
  ?>  
    <script>
	
        window.close();
 window.location.assign('../index.php');
    </script>
       <?php
}
?>