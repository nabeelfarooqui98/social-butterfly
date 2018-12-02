<?php
include 'scripts/DbConnect.php';
if(!isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('Login Required !');location.href = 'index-register.php'</script>";
}
$email = $_SESSION['kuchBhi'];
//echo "$email is Logged In<br>";
$query = "SELECT * FROM users WHERE email = '$email '";
$ex_query=$con->query($query);
$row=mysqli_fetch_array($ex_query);
$userid=$row['id'];
//echo "userid : $userid";

$Recid = $_GET['uid'];



$sel = "SELECT * FROM users WHERE id = " . $Recid ;
$ex_sel = $con->query($sel);
$data = mysqli_fetch_array($ex_sel);
$Recname = $data['fname'] . " " . $data['lname'];
$Recimage= $data['image'];
//echo "hi";
//echo "\n myid: $userid";
//echo "\n receiver id: $Recid";
//echo "hiiii";
?>

<!--Timeline Menu for Large Screens-->
<div class="timeline-nav-bar hidden-sm hidden-xs">
    <div class="row">
        <div class="col-md-3">
            <div class="profile-info">
                <img src="images/prof/<?php echo $Recimage; ?>" alt="" class="img-responsive profile-photo">
                <h3><?php echo $Recname ?></h3>
                <p class="text-muted">Creative Diaaarector</p>
            </div>
        </div>
        <div class="col-md-9">
            <ul class="list-inline profile-menu">
                <li><a href="timeline.php" class="active">Timeline</a></li>
                <li><a href="timeline-about.php">About</a></li>
                <li><a href="timeline-album.php">Album</a></li>
                <li><a href="timeline-friends.php">Friends</a></li>
            </ul>
            <ul class="follow-me list-inline">
                <li>1,299 people following her</li>
                <?php
                $newQuery="SELECT * FROM `friendrequest` WHERE `sender_id` = $userid AND `receiver_id` = $Recid";
                $execute = $con->query($newQuery);
                $row1= mysqli_fetch_array($execute);
                if (!$row1){
                ?>
                <form class="addfriend" action="scripts/AddFriend.php?uid=<?php echo $userid; ?>&Recid=<?php echo $Recid; ?>" method="post">
                <input <button type="submit" name="addbtn" class="btn btn-primary" value="Add Friend"></button>
                </form>
                <?php
                }
                ?>
<!--                <li><a href="#">button</a></li>-->
            </ul>
<!--                <button type="button" name="addbtn" class="btn btn-primary" value="addfriend">Add Friend</button>-->
        </div>

    </div>
</div><!--Timeline Menu for Large Screens End-->

<!--Timeline Menu for Small Screens-->
<div class="navbar-mobile hidden-lg hidden-md">
    <div class="profile-info">
        <img src="images/prof/<?php echo $Recimage; ?>" alt="" class="img-responsive profile-photo" />
        <h4><?php echo $Recname ?></h4>
        <p class="text-muted">Creative Director</p>
    </div>
    <div class="mobile-menu">
        <ul class="list-inline">
            <li><a href="timline.html" class="active">Timeline</a></li>
            <li><a href="timeline-about.php">About</a></li>
            <li><a href="timeline-album.php">Album</a></li>
            <li><a href="timeline-friends.php">Friends</a></li>
        </ul>
        <?php
        $newQuery="SELECT * FROM `friendrequest` WHERE `sender_id` = $userid AND `receiver_id` = $Recid";
        $execute = $con->query($newQuery);
        $row1= mysqli_fetch_array($execute);
        if (!$row1){
            ?>
            <form class="addfriend" action="scripts/AddFriend.php?uid=<?php echo $userid; ?>&Recid=<?php echo $Recid; ?>" method="post">
                <input <button type="submit" name="addbtn" class="btn btn-primary" value="Add Friend" ></button>
            </form>
            <?php
        }
        ?>
    </div>
</div><!--Timeline Menu for Small Screens End-->
