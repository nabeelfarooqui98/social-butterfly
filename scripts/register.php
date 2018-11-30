<?php
session_start();
include 'DbConnect.php';



    
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['e_mail'];
    $pass = $_POST['p_ass'];
    $dob = $_POST['d_ob'];
    $city = $_POST['c_ity'];
    $country = $_POST['c_ountry'];
    $gender = $_POST['genderr'];

    $ins = "INSERT INTO users (fname,lname,email,pass,dob,city,country,gender) VALUES ('$fname', '$lname' , '$email', '$pass' , '$dob' ,'$city' , '$country' , '$gender')";
    if($con->query($ins))
    {
        $sel = "SELECT * FROM users WHERE email = '$email'";
        $ex_sel = $con->query($sel);
        $data = mysqli_fetch_array($ex_sel);
        $_SESSION['kuchBhi'] = $email;
        $_SESSION['user_id'] = $data['id'];
        $id=$_SESSION['user_id'];
        echo "<script>alert('User Registered Succcessfully !')</script>";
        echo "<script>alert($id)</script>";
    }

?>