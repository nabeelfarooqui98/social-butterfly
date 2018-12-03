<?php
session_start();
include 'DbConnect.php';

if(isset($_POST['btn_edu']))
{
    $email= $_SESSION['kuchBhi'];
    $school = $_POST['school'];
    $syear = $_POST['syear'];
    $college = $_POST['college'];
    $cyear = $_POST['cyear'];
    $university = $_POST['university'];
    $uyear = $_POST['uyear'];
    $description= $_POST['description'];
    $UserId = $_POST['UserId'];
    $sel = "SELECT * FROM education WHERE UserId = '$UserId'";
    $ex_sel = $con->query($sel);
    $count = $ex_sel->num_rows;
    if($count==0)
    {
        //echo 'i am in count condition';
        echo $ins = "INSERT INTO education (school,syear,college,cyear,university,uyear,description,UserId) VALUES ('$school','$syear','$college','$cyear','$university','$uyear','$description','$UserId')";
        //echo 'xyz';
        if ($con->query($ins))
        {
            header("Location: ../edit-profile-work-edu.php?id=".$UserId);
        }
    }
    elseif ($count==1)
    {

        $ins1 = "UPDATE education SET school='$school' , syear='$syear' , college='$college' , cyear='$cyear' , university='$university' , uyear='$uyear' , description='$description' WHERE UserId = '$UserId'";
        if ($con->query($ins1))
        {
            header("Location: ../edit-profile-work-edu.php?id=".$UserId);
        }
    }
    else
    {
        echo ' ghlt hai yr ';
    }
}

?>