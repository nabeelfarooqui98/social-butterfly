<?php
session_start();
    unset($_SESSION['kuchBhi']);
    session_destroy();
    header("location: ../index-register.php");
//setcookie("kuchBhi","",time()-60,"/","",0);
?>