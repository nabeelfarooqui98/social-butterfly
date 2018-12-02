<?php
include 'DbConnect.php';
include 'header.php';
session_start();

if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email']) && $_POST['email'] != '')) {
    $Name = $_POST['name'];
    $EmailId = $_POST['email'];
    $PhoneNo = $_POST['phone'];
    $Message = $_POST['message'];


    if (true) {

        $ins = "INSERT INTO contact (Name,EmailId,PhoneNo,Message) VALUES ('$Name', '$EmailId' , '$PhoneNo', '$Message')";
        /*echo "iam here";*/
        if ($con->query($ins)) {
            /*require_once("sendMail.php");*/
            echo "<script>alert('Thank you we will contact you soon !!');location.href = 'ContactAdmin.php'</script>";
        }
    } else {
        echo "<script>alert('Please fill  name and email !');location.href = 'ContactAdmin.php'</script>";
    }

}
?>