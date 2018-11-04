<?php


if(isset($_POST['user_email']))
{
  $con=mysqli_connect("localhost","root","","social");

  if (mysqli_connect_errno())
  {
    echo "Failed to connect: " . mysqli_connect_errno();
  }
  
  $emailId=$_POST['user_email'];
  $checkdata=" SELECT * FROM users WHERE email='$emailId' ";
  $query=mysqli_query($con,$checkdata);
  

  if(($query==true) && mysqli_num_rows($query)==0)
  {
    echo "YES";
  }
  else
  {
    echo "NO";
  }
  exit();
}
?>

  
