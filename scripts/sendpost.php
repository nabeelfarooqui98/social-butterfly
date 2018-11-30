<?php
session_start();
include 'DbConnect.php';
if(isset($_POST['pubbtn']))
{
    if (isset($_SESSION['user_id']))
    {
        $id=$_SESSION['user_id'];
        $postcontent = $_POST['postcontent'];
        $ins = "INSERT INTO POSTS(user_id,content) VALUES('$id','$postcontent')";

    if($con->query($ins))
        {
            echo "<script>alert('query success')</script>";
            echo "<script>location.href = '../newsfeed.php'</script>";
        }
        else
        {
            echo "<script>alert('fail')</script>";
            echo "<script>location.href = '../newsfeed.php'</script>";
        }

    }
    else
    {
        echo "<script>alert('login required')</script>";
        echo "<script>location.href = '../index-register.php'</script>";
    }
    
    
}