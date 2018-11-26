<?php


if(isset($_POST['user_email']))
{

  $con=mysqli_connect("localhost","root","","social");

  if (mysqli_connect_errno())
  {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

    $emailId=$_POST['user_email'];
    $sel = "SELECT email FROM users WHERE email = '$emailId'";
    $ex_sel = $con->query($sel);
    $count = $ex_sel->num_rows;
    if($count == 0 )
    {
      echo "YES";
    }
    else
    {
        echo "NO";
    }
}
?>

  
