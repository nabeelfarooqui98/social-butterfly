<?php


if(isset($_POST['user_email']))
{
  $con=mysqli_connect("localhost","root","","social");

  if (mysqli_connect_errno())
  {
    //echo "Failed to connect: " . mysqli_connect_errno();
  }
  

  $emailId=$_POST['user_email'];
  $sel = "SELECT * FROM users WHERE email = '$emailId'";
    $ex_sel = $con->query($sel);
    $count = $ex_sel->num_rows;
    if($count==0)
    {
      echo "NO";

        /*$ins = "INSERT INTO users (fname,lname,email,pass,dob,city,country,gender) VALUES ('$fname', '$lname' , '$email', '$pass' , '$dob' ,'$city' , '$country' , '$gender')";
                
        if($con->query($ins))
        {
                    }*/
    }
    else
    {
        echo "YES";
    }


/*
  $checkdata=" SELECT * FROM users WHERE email='$emailId' ";

  $query=mysqli_query($con,$checkdata);
  echo "<script type='text/javascript'>alert('djasdhasdj');</script>";

  if(($query==true) && mysqli_num_rows($query)>0)
  {
    echo "NO";
  }
  else
  {
    echo "YES";
  }
  exit();
}*/
}
?>

  
