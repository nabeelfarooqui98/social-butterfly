<?php
session_start();
include 'header.php';
include 'scripts/DbConnect.php';

    if(!isset($_SESSION['kuchBhi']))
    {
        echo "<script>alert('Login Required !');location.href = 'index-register.php'</script>";
    }
    else{
$email = $_SESSION['kuchBhi'];
//echo "$email is Logged In<br>";
$sel = "SELECT * FROM users WHERE email = '$email'";
$ex_sel = $con->query($sel);
$data = mysqli_fetch_array($ex_sel);
$userid = $data['id'];

$gett = "SELECT * FROM users WHERE id!='$userid' ";
$query = mysqli_query($con, $gett) or die('error');


while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
$Recname = $row['fname'] . " " . $row['lname'];
$receiverId = $row['id'];


?>
<div class="container">

    <!-- Timeline
    ================================================= -->
    <div class="timeline">
        <div id="page-contents">
            <div class="row">
<!--                 <div class="col-md-3">
                    <div class="col-md-7">
 -->
                        <div class="follow-user">
                            <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left"/>
                            <div>
                                <h3>
                                    <a href="FriendTL.php?uid=<?php echo $receiverId; ?>"><?php echo "$Recname"; ?>
                                </a>
                                </h3>
<!--                             </div>
                        </div>
 -->                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    }
    }
?>
</div>
<?php
include 'footer.php';
?>
