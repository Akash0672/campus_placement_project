
<?php
$servername="localhost";
$username="root";
$password="";
$db="campus_placement";
$Name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];
$conn = new mysqli($servername, $username, $password,$db);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
 
$sql="INSERT INTO contact(name,email,subject,message)VALUES('$Name','$email','$sub','$msg')";
if(isset($_POST['save']))
{
  if ($conn->query($sql) === True) {
      ?><script> window.location.assign('../index.php');
	      </script>";<?php
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
 ?>
