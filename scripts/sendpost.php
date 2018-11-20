<?php
include 'DbConnect.php';
if(isset($_POST['pubbtn']))
{
    echo "<script>alert('sagasjcasgb')</script>";

    $postcontent = $_POST['postcontent'];
    $ins = "INSERT INTO users(fname) VALUES('ASD')";
    
    //$ins = "SELECT * FROM posts";
//    $ex_ins = $con->query($ins);

    if($con->query($ins))
        {
            echo "<script>alert('query success')</script>";
        }
        else
        {
            echo "<script>alert('fail')</script>";
        }
}