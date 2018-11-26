<?php
include 'DbConnect.php';
if(isset($_POST['pubbtn']))
{
   

    $postcontent = $_POST['postcontent'];
    echo "<script>alert($postcontent)</script>";
    $ins = "INSERT INTO POSTS VALUES (21921,112,'$postcontent')";
    $ex_ins = $con->query($ins);
}
?>