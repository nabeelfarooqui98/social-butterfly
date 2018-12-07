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

    $gett = "SELECT * FROM friendrequest WHERE receiver_id='$userid'";
    $query = mysqli_query($con, $gett) or die('error');


    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $senderId = $row['sender_id'];
        $get1 = "SELECT * FROM users WHERE id='$senderId' ";
        $query2 = mysqli_query($con, $get1) or die('error');
        $row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);
        $senderIdd=$row2['id'];
        $sendernamee=$row2['fname'] . " " . $row2['lname'];
        //echo "$receiverId";


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
                                    <h3><a href="FriendTL.php?uid=<?php echo $senderIdd ; ?>"><?php echo "$sendernamee"; ?></a>
                                    </h3>
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