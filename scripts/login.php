<?php
include 'DbConnect.php';
session_start();
if(isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('User Already Logged In !');location.href = '../newsfeed.php'</script>";
}
else
{
if(isset($_POST['loginbtn']))
{

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sel = "SELECT * FROM users WHERE email = '$email'";
    $ex_sel = $con->query($sel);
    $count = $ex_sel->num_rows;
    if ($count == 1) {
        $data = mysqli_fetch_array($ex_sel);
        if($pass == $data['pass'])
        {
            $_SESSION['kuchBhi'] = $email;
            $_SESSION['user_id'] = $data['id'];
            echo "<script>alert('User Successfully Logged In !');location.href = '../newsfeed.php'</script>";
        }
        else
        {
            echo "<script>alert('Invalid Password !');location.href = '../index-register.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Invalid Email !');location.href = '../index-register.php'</script>";
    }
}
}
?>
