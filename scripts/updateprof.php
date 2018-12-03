<?php
session_start();
include 'DbConnect.php';


if(isset($_POST['savebtn']))
{
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $info = $_POST['info'];
    $image = $_FILES['image']['name'];
    $target ="../images/prof/";
    $target = $target .basename ($image);
    move_uploaded_file($_FILES['image']['tmp_name'],$target);

    $query1 = "UPDATE users SET fname='$fname' , lname='$lname' , email='$email' , dob='$dob' , gender='$gender' , city='$city' , country='$country' , info='$info' , image='$image' WHERE id = '$id'";

    //$query = "INSERT INTO students (image) VALUES ('$image')";

    if($con->query($query1))
    {

        header("Location: ../edit-profile-basic.php?id=".$id);
    }
    else
    {
        echo 'updation failed';
    }

}
?>