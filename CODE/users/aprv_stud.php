<?php
// Make sure an ID was passed
if(isset($_GET['id'])) {
// Get the ID
    $id = intval($_GET['id']);
    include '../dbcon.php';
    // Make sure the ID is in fact a valid ID
    if($id <= 0) {
        die('The ID is invalid!');
    }
    else {
        $sql="update stud_info set sts=1 where id=$id";
        $run= mysqli_query($db, $sql);
        if($run)
        {
            echo "<script>window.close();</script>";
        }
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>