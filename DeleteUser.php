<?php
//include '../header.php';
include 'scripts/DbConnect.php';
session_start();

if(!isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('Login Required !');location.href = '../index-register.php'</script>";
}
else{

    $UserId=$_GET['uid'];
    echo "UserId: $UserId";

    if(isset($_POST['deletebtn']))
    {
        //echo "ma agyi";
        $query="DELETE FROM users WHERE id='$UserId'";

        if ($con->query($query)) {
            echo "<script>alert('User deleted');location.href = 'AdminSearch.php'</script>";
            $query1="DELETE FROM posts WHERE user_id='$UserId'";
            $execute=$con->query($query1);
            $query2="DELETE FROM friendrequest WHERE sender_id='$UserId'  OR receiver_id='$Userid'";
            $execute2=$con->query($query2);

        }
        else{
            echo "ni chla";
        }

    }
}