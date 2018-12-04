<?php
session_start();
include 'scripts/DbConnect.php';
include 'header.php';


//echo "abc";

if(isset($_POST['sendmsgg'])) {
    $userfrom=$_GET['uid'];
    $myid=$_GET['myid'];
    $msg=$_POST['msg'];
//    echo "$msg";
//    echo "my id : $myid";
//
//    echo "user id: $userfrom";

    date_default_timezone_set("Asia/Karachi");
    $date = date("y-m-d H:i:s");


    if (true) {

        $ins = "INSERT INTO messages VALUES ('','$userfrom', '$myid' , '$msg', '$date')";
        /*echo "iam here";*/
        if ($con->query($ins)) {
            echo "<script>alert('msg sent!');location.href = 'newsfeed-messages.php '</script>";

//            echo "msg sent";
        }
    } else {
        echo "<script>alert('msg not sent!');location.href = 'newsfeed-messages.php '</script>";
    }

}
?>