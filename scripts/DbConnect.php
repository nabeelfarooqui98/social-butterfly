<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "social";
$con = mysqli_connect($host,$user,$pass,$dbName);
if(mysqli_connect_error($con))
{
    echo "Connection Failed";
}

?>