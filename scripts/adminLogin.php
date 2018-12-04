<?php
include 'DbConnect.php';
session_start();
if(isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('Admin Already Logged In !');location.href = 'AdminSearch.php'</script>";
}
else
{
    if(isset($_POST['logbtn']))
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sel = "SELECT * FROM admin WHERE email = '$email'";
        $ex_sel = $con->query($sel);
        $count = $ex_sel->num_rows;
        if ($con->query($sel)) {
            $data = mysqli_fetch_array($ex_sel);
            if($password == $data['password'])
            {
                $_SESSION['kuchBhi'] = $email;
                $_SESSION['user_id'] = $data['id'];
                echo "<script>alert('Admin Successfully Logged In !');location.href = 'AdminSearch.php'</script>";
            }
            else
            {
                echo "<script>alert('Invalid Password !');location.href = '../adminIndexReg.php'</script>";
            }
        }
        else
        {
            echo "<script>alert('Invalid Email !');location.href = '../adminIndexReg.php'</script>";
        }
    }
}
?>