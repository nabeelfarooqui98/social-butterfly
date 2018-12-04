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
$sel = "SELECT * FROM admin WHERE email = '$email'";
$ex_sel = $con->query($sel);
$data = mysqli_fetch_array($ex_sel);
$adminid = $data['id'];

$gett = "SELECT * FROM users";
$query = mysqli_query($con, $gett) or die('error');


while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
$username = $row['fname'] . " " . $row['lname'];
$userId = $row['id'];


?>
<div class="container">

    <!-- Timeline
    ================================================= -->
    <div class="timeline">
        <div id="page-contents">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-7">

                        <div class="follow-user">
                            <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left"/>
                            <div>
                                <h3><?php echo "$username"; ?>
                                </h3>
                                <form class="delete" action="DeleteUser.php?uid=<?php echo $userId; ?>" method="post">
                                    <input <button type="submit" name="deletebtn" class="btn btn-primary" value="Delete User"></button>
                                </form>
                            </div>
                        </div>
                    </div>
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
