<?php
include 'DbConnect.php';
if(isset($_POST['pubbtn']))
{
    echo "<script>alert('sagasjcasgb')</script>";

    $postcontent = $_POST['postcontent'];
    $ins = "INSERT INTO POSTS VALUES ('',112,sysdate,'$postcontent')";
    $ex_ins = $con->query($ins);
}
?>