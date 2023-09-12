<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
 $error_msg = "";
 $Is_Error_Flag = false;

 if(empty($_POST['txt_name']))
 {
 $error_msg .= "Name field cannot be empty.</br>";
 $Is_Error_Flag = true;
 }
 elseif(preg_match("/^([a-zA-Z' ]+)$/",$_POST['txt_name'])){
    echo 'Valid name given.';
}else{
    echo 'Invalid name given.';
    $Is_Error_Flag = true;
}
 if(empty($_POST['txt_address']))
 {
 $error_msg .= "Address field cannot be empty.</br>";
 $Is_Error_Flag = true;
 }
 $pattern = '/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/';
 if(!preg_match($pattern, $_POST['txt_email']))
 {
 $error_msg .= "Invalid Email ID.</br>";
 $Is_Error_Flag = true;
 }
 if(!is_numeric($_POST['txt_mobileno']))
 {
 $error_msg .= "Invalid Mobile Number.</br>";
 $Is_Error_Flag = true;
 }
 if($Is_Error_Flag == false && isset($_POST['btn_register']))
 {
 echo "Name: " . $_POST['txt_name'] . "</br>";
 echo "Address: " . $_POST['txt_address'] . "</br>";
 echo "Email: " . $_POST['txt_email'] . "</br>";
 echo "Mobile No: " . $_POST['txt_mobileno'] . "</br>";
 }
 else
 {
 echo $error_msg;
 }
}
?>