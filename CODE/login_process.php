<?php
include 'dbcon.php';
if(isset($_POST['login']))
{
    $usr=$_POST['usr'];
    $pass=$_POST['pass'];
    $sts=$_POST['sts'];
   
    $sql = "SELECT * FROM login_info WHERE username='$usr' AND password='$pass' AND status='$sts' LIMIT 1";
   // echo $sql;
            //echo $sql;
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    if($row["username"]==$usr && $row["password"]==$pass)
    {
        session_start();
        $_SESSION['user_nm']=$usr;
        if($row['status']==2)
        {
            $_SESSION['cnm']=$row["full_name"]; 
        }
        $_SESSION['status']=$row["status"];
        $_SESSION['user_id']=$row["id"];
        $_SESSION['dept']=$row["dept"];
        if($row['status']==1)
        {
           echo " <script>window.location.assign('users/tpohome.php');</script>";
        }
        else if($row['status']==2)
        {
           echo " <script>window.location.assign('users/cmphome.php');</script>";
        }
        else if($row['status']==3)
        {
           echo " <script>window.location.assign('users/co-home.php');</script>";
        }
        else if($row['status']==4)
        {
           echo " <script>window.location.assign('users/hodhome.php');</script>";
        }
    }
    else 
    {
        ?>
        <script>
		 window.location.assign("index.php");
            alert('Invalid Credentials');
           
        </script>
        <?php
    }
}
