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

<div id="sticky-sidebar">
    <h4 class="grey"><?php echo $data['fname'] . "'s" ?> activity</h4>
    <div class="feed-item">
        <div class="live-activity">
            <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
            <p class="text-muted">5 mins ago</p>
        </div>
    </div>
    <div class="feed-item">
        <div class="live-activity">
            <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
            <p class="text-muted">an hour ago</p>
        </div>
    </div>
    <div class="feed-item">
        <div class="live-activity">
            <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
            <p class="text-muted">4 hours ago</p>
        </div>
    </div>
    <div class="feed-item">
        <div class="live-activity">
            <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
            <p class="text-muted">a day ago</p>
        </div>
    </div>
</div>
