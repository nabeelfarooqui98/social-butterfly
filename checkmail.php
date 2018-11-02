<?php
$con=mysqli_connect("localhost","root","","social");

if (mysqli_connect_errno())
{
  // echo "Failed to connect: " . mysqli_connect_errno();
}

if(isset($_POST['user_email']))
{
  
  $emailId=$_POST['user_email'];
  $checkdata=" SELECT * FROM users WHERE email='$emailId' ";
  $query=mysqli_query($con,$checkdata);

  if(mysqli_num_rows($query)>0)
  {
    echo "NO";
  }
  else
  {
    echo "YES";
  }
  
}
?>
  
