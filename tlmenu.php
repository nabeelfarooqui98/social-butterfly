<?php
include 'scripts/DbConnect.php';
if(!isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('Login Required !');location.href = 'index-register.php'</script>";
}
$email = $_SESSION['kuchBhi'];
//echo "$email is Logged In<br>";
$sel = "SELECT * FROM users WHERE email = '$email'";
$ex_sel = $con->query($sel);
$data = mysqli_fetch_array($ex_sel);
$name = $data['fname'] . " " . $data['lname'];
$image= $data['image'];
?>

<!--Timeline Menu for Large Screens-->
<div class="timeline-nav-bar hidden-sm hidden-xs">
    <div class="row">
        <div class="col-md-3">
            <div class="profile-info">
                <img src="images/prof/<?php echo $image; ?>" alt="" class="img-responsive profile-photo">
                <h3><?php echo $name ?></h3>
                <p class="text-muted">Creative Director</p>
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
            </ul>
        </div>
    </div>
</div><!--Timeline Menu for Large Screens End-->

<!--Timeline Menu for Small Screens-->
<div class="navbar-mobile hidden-lg hidden-md">
    <div class="profile-info">
        <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
        <h4>Sarah Cruiz</h4>
        <p class="text-muted">Creative Director</p>
    </div>
    <div class="mobile-menu">
        <ul class="list-inline">
            <li><a href="timline.html" class="active">Timeline</a></li>
            <li><a href="timeline-about.php">About</a></li>
            <li><a href="timeline-album.php">Album</a></li>
            <li><a href="timeline-friends.php">Friends</a></li>
        </ul>
    </div>
</div><!--Timeline Menu for Small Screens End-->

