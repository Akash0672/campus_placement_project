<?php
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0 ) {
        // Connect to the database
        $dbLink = new mysqli('localhost', 'root', '', 'campus_placement');
        //$dbLink = new mysqli('127.0.0.1', 'user', 'pwd', 'myTable');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
	$name1 = $dbLink->real_escape_string($_FILES['uploaded_file1']['name']);
$name2 = $dbLink->real_escape_string($_FILES['uploaded_file2']['name']);        
$name3 = $dbLink->real_escape_string($_FILES['uploaded_file3']['name']);

$mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
  	        
$data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
	 $mime1 = $dbLink->real_escape_string($_FILES['uploaded_file1']['type']);
        $data1 = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file1']['tmp_name']));
        $size1 = intval($_FILES['uploaded_file1']['size']);
	 	 
 	
  	$mime2 = $dbLink->real_escape_string($_FILES['uploaded_file2']['type']);
        $data2 = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file2']['tmp_name']));
        $size2 = intval($_FILES['uploaded_file2']['size']);
	
	$mime3 = $dbLink->real_escape_string($_FILES['uploaded_file3']['type']);
        $data3 = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file3']['tmp_name']));
        $size3 = intval($_FILES['uploaded_file3']['size']);
	
        //$uname=$_POST['uname'];
        //$pasw=$_POST['pasw'];
 
        // Create the SQL query
        $query = "
            INSERT INTO `file` (
                `name`,`name1`,`name2`,`name3`,`mime`,`mime1`,`mime2`,`mime3`,`size`,`size1`,`size2`,`size3`,`data`,`data1`,`data2`,`data3`,`created`,`id`
            )
            VALUES (
                '{$name}','{$name1}','{$name2}','{$name3}','{$mime}','{$mime1}','{$mime2}','{$mime3}',{$size},{$size1},{$size2},{$size3},'{$data}','{$data1}','{$data2}','{$data3}', NOW(),'{$sid}'
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
	
           // echo "File Uploaded...!";
?> <script>
               window.location.assign('../index.php');

		   
 </script>
 <?php
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo "ERROR to upload file...:(";
    }
 
    // Close the mysql connection
    //$dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
 
// Echo a link back to the main page
//echo '<p>Click <a href="index.html">here</a> to go back</p>';
?>

  