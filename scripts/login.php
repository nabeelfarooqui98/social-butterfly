<?php
include 'DbConnect.php';
if(isset($_POST['loginbtn']))
{
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sel = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
    $ex_sel = $con->query($sel);
    $count = $ex_sel->num_rows;
        if($count==0)
        {
            echo "<script>alert('login failed!');location.href = '../index-register.php'</script>";
        }
        else
        {
            echo "<script>alert('Login successful !');location.href = '../newsfeed.php'</script>";

        }

}
?>