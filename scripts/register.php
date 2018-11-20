<?php
include 'DbConnect.php';
if(isset($_POST['regbtn']))
{
    $err=0;
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    /*
    $sel = "SELECT * FROM users WHERE email = '$email'";
    $ex_sel = $con->query($sel);
    $count = $ex_sel->num_rows;
    if($count==0)
    {
        $ins = "INSERT INTO users (fname,lname,email,pass,dob,city,country,gender) VALUES ('$fname', '$lname' , '$email', '$pass' , '$dob' ,'$city' , '$country' , '$gender')";
        //echo "xyz";
        if($con->query($ins))
        {
            echo "<script>alert('User Successfully Registered !');location.href = '../newsfeed.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('User already Exists !');location.href = '../newsfeed.php'</script>";
    }*/
    
}
?>