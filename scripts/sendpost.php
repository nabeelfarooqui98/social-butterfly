<?php
include 'DbConnect.php';
if(isset($_POST['pubbtn']))
{
    

    $postcontent = $_POST['postcontent'];
    
    $ins = "INSERT INTO POSTS VALUES('',2,'$postcontent')";

    if($con->query($ins))
        {
            echo "<script>alert('query success')</script>";
        }
        else
        {
            echo "<script>alert('fail')</script>";
        }
}