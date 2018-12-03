<?php
include 'DbConnect.php';

if(isset($_POST['btn_work']))
{
    $company = $_POST['company'];
    $pos = $_POST['position'];
    $city = $_POST['city'];
    $descr= $_POST['descr'];
    $UId = $_POST['UId'];
    $sel = "SELECT * FROM work WHERE UId = '$UId'";
    $ex_sel = $con->query($sel);
    $count = $ex_sel->num_rows;
    if($count==0)
    {
        //echo 'i am in count condition';
        echo $ins = "INSERT INTO work (company,pos,city,descr,UId) VALUES ('$company','$pos','$city','$descr','$UId')";
        //echo 'xyz';
        if ($con->query($ins))
        {
            header("Location: ../edit-profile-work-edu.php?id=".$UserId);
        }
    }
    elseif ($count==1)
    {

        $ins1 = "UPDATE work SET company='$company' , pos='$pos' , city='$city' , descr='$descr' WHERE UId = '$UId'";
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