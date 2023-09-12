 <?php
    $db = mysqli_connect('localhost', 'root', '', 'campus_placement');
            //mysqli_connect("localhost","my_user","my_password","my_db");
    $dbLink = new mysqli('localhost', 'root', '', 'campus_placement');
    
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    if ($dbLink->connect_error) {
        die("Connection failed: " . $dbLink->connect_error);
    }
    ?>