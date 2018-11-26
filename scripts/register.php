<?php
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
        echo "<script>alert('User Registered Succcessfully !');location.href = '../newsfeed.php'</script>";
}

?>