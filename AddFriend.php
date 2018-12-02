<?php
include '../header.php';
include 'DbConnect.php';
session_start();

if(!isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('Login Required !');location.href = 'index-register.php'</script>";
}
else{
    $email = $_SESSION['kuchBhi'];
    //echo "$email is Logged In<br>";
    $sel = "SELECT * FROM users WHERE email = '$email'";
    $ex_sel = $con->query($sel);
    $data = mysqli_fetch_array($ex_sel);
    $userid=$data['id'];

    $gett="SELECT * FROM users WHERE id!='$userid' ";
    $query=mysqli_query($con,$gett) or die('error');
    while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $Recname = $row['fname']. " " . $row['lname'];
        $receiverId=$row['id'];
    }


    if(isset($_POST['addbtn']))
    {
        $query= "INSERT INTO friendrequest(sender_id,receiver_id) VALUES ('$userid','$receiver_id')";
        $obj=new User($con,$id);


        if ($con->query($query)) {
            echo "<script>alert('Following/Added to friends');location.href = 'newsfeed.php'</script>";
        }
        else{
            echo "ni chla";
        }

    }



}


?>