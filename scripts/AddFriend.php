<?php
//include '../header.php';
include 'DbConnect.php';
session_start();

if(!isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('Login Required !');location.href = '../index-register.php'</script>";
}
else{

    $email = $_SESSION['kuchBhi'];
    $sel = "SELECT * FROM users WHERE email = '$email'";
    $ex_sel = $con->query($sel);
    $data = mysqli_fetch_array($ex_sel);
    $userid=$data['id'];
    echo " mmy id :$userid";
    $recId=$_GET['Recid'];
    echo "recId: $recId";

    if(isset($_POST['addbtn']))
    {
        echo "ma agyi";
        $query= "INSERT INTO friendrequest(sender_id,receiver_id) VALUES ('$userid','$recId')";
//        $obj=new User($con,$id);


        if ($con->query($query)) {
            echo "<script>alert('Following/Added to friends');location.href = '../newsfeed.php'</script>";
        }
        else{
            echo "ni chla";
        }

    }
}



?>
