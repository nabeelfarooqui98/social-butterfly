<?php
session_start();
include 'header.php';
include 'scripts/DbConnect.php';

if(!isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('Login Required !');location.href = 'index-register.php'</script>";
}
else {
$email = $_SESSION['kuchBhi'];
$query = "SELECT * FROM users WHERE email = '$email'";
$execute = $con->query($query);
$row = mysqli_fetch_array($execute);
$userto = $row['id'];
$usertoimage=$row['image'];
$usertoname = $row['fname'] . " " . $row['lname'];


//    $others = "SELECT * FROM users WHERE id!='$userto' ";
//    $query1 = mysqli_query($con, $others) or die('error');
?>


<!--    while ($data = mysqli_fetch_array($query1, MYSQLI_ASSOC)) {-->
<!--        $Recname = $data['fname'] . " " . $data['lname'];-->
<!--        $receiverId = $data['id'];-->
<!---->
<!---->
<!--?>-->

<div id="page-contents">
    <div class="container">
        <div class="row">

            <?php include 'newsfeed-sidebar.php'; ?>
            
            <div class="col-md-7">

                <!-- Post Create Box
                ================================================= -->
                <div class="create-post">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <img src="http://placehold.it/300x300" alt="" class="profile-photo-md"/>
                                <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control"
                                          placeholder="Write what you wish"></textarea>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="tools">
                                <ul class="publishing-tools list-inline">
                                    <li><a href="#"><i class="ion-compose"></i></a></li>
                                    <li><a href="#"><i class="ion-images"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                                    <li><a href="#"><i class="ion-map"></i></a></li>
                                </ul>
                                <button class="btn btn-primary pull-right">Publish</button>
                            </div>
                        </div>
                    </div>
                </div><!-- Post Create Box End -->

                <!-- Chat Room
                ================================================= -->
                <div class="chat-room">
                    <div class="row">
                        <div class="col-md-5">

                            <!-- Contact List in Left-->
                            <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">

                                <?php
                                $others = "SELECT * FROM users WHERE id!='$userto' ";
                                $query1 = mysqli_query($con, $others) or die('error');
                                while ($data = mysqli_fetch_array($query1, MYSQLI_ASSOC)) {
                                    $userfrom = $data['id'];
                                    $Recname = $data['fname'] . " " . $data['lname'];
                                    $oneuser = "SELECT * FROM users WHERE id='$userfrom' ";
                                    $query3 = mysqli_query($con, $oneuser) or die('error');
                                    $data2 = mysqli_fetch_array($query3, MYSQLI_ASSOC);
                                    $imagee = $data2['image'];


                                    ?>
                                    <li class="active">
                                        <a href="#contact-<?php echo $userfrom; ?> " data-toggle="tab" >
                                            <div class="contact">
                                                <img src="images/prof/<?php echo $imagee; ?>" alt=""
                                                     class="profile-photo-sm pull-left"/>
                                                <div class="msg-preview">
                                                    <h6><?php echo $Recname ?></h6>
                                                    <p class="text-muted">Hi there, how are you</p>
                                                    <small class="text-muted">a min ago</small>
                                                    <div class="chat-alert">1</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }

                                ?>
                            </ul>

                        </div>
                        <!--Contact List in Left End-->
                        <div class="col-md-7">

                            <!--Chat Messages in Right-->
                            <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                                <?php
                                $otherss = "SELECT * FROM users WHERE id!='$userto' ";
                                $queryy = mysqli_query($con, $otherss) or die('error');
                                while ($data3 = mysqli_fetch_array($queryy, MYSQLI_ASSOC)) {
                                    $userfrom1 = $data3['id'];
                                    $userfromname = $data3['fname'] . " " . $data3['lname'];

                                    $query2 = "SELECT * FROM messages WHERE user_from='$userfrom1'";
                                    $execute1 = $con->query($query2);
                                    $row2 = mysqli_fetch_array($execute1);
                                    $selecteduser = "SELECT * FROM users WHERE id='$userfrom1' ";
                                    $query4 = mysqli_query($con, $selecteduser) or die('error');
                                    $data4 = mysqli_fetch_array($query4, MYSQLI_ASSOC);
                                    $image1 = $data4['image'];


                                    ?>
                                    <div class="tab-pane active" id="contact-<?php echo $userfrom1; ?> ">
                                        <div class="chat-body">
                                            <ul class="chat-message">
                                                <li class="left">
                                                    <img src="images/prof/<?php echo $image1; ?>" alt=""
                                                         class="profile-photo-sm pull-left"/>
                                                    <div class="chat-item">
                                                        <div class="chat-item-header">
                                                            <h5><?php echo $userfromname ?></h5>

                                                            <small class="text-muted"><?php echo $date=$_GET['date'] ; ?></small>
                                                        </div>
                                                        <p><?php echo $msg=$_GET['msg']; ?></p>
                                                    </div>
                                                </li>
                                                <li class="right">
                                                    <img src="images/prof/<?php echo $usertoimage;?>" alt=""
                                                         class="profile-photo-sm pull-right"/>
                                                    <div class="chat-item">
                                                        <div class="chat-item-header">
                                                            <h5><?php echo $usertoname ; ?></h5>
                                                            <small class="text-muted">3 days ago</small>
                                                        </div>
                                                        <p>I have been on vacation</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--                    <div class="tab-pane" id="contact-2">-->
                                    <!--                      <div class="chat-body">-->
                                    <!--                      	<ul class="chat-message">-->
                                    <!--                      		<li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Julia Cox</h5>-->
                                    <!--                              	<small class="text-muted">a day ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Hi</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="right">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-right" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Sarah Cruiz</h5>-->
                                    <!--                              	<small class="text-muted">a day ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>hellow</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Julia Cox</h5>-->
                                    <!--                              	<small class="text-muted">an hour ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>good</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="right">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-right" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Sarah Cruiz</h5>-->
                                    <!--                              	<small class="text-muted">an hour ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>see you soon</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                      	</ul>-->
                                    <!--                      </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="tab-pane" id="contact-3">-->
                                    <!--                      <div class="chat-body">-->
                                    <!--                      	<ul class="chat-message">-->
                                    <!--                      		<li class="right">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-right" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Sarah</h5>-->
                                    <!--                              	<small class="text-muted">2 days ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Sophia Lee</h5>-->
                                    <!--                              	<small class="text-muted">a day ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="right">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-right" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Sarah  Cruiz</h5>-->
                                    <!--                              	<small class="text-muted">13 hours ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Okay fine. thank you</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                      	</ul>-->
                                    <!--                      </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="tab-pane" id="contact-4">-->
                                    <!--                      <div class="chat-body">-->
                                    <!--                      	<ul class="chat-message">-->
                                    <!--                      		<li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>John Doe</h5>-->
                                    <!--                              	<small class="text-muted">a day ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>John Doe</h5>-->
                                    <!--                              	<small class="text-muted">a day ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>hey anybody there</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                      	</ul>-->
                                    <!--                      </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="tab-pane" id="contact-5">-->
                                    <!--                      <div class="chat-body">-->
                                    <!--                      	<ul class="chat-message">-->
                                    <!--                      		<li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Anna Young</h5>-->
                                    <!--                              	<small class="text-muted">2 days ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Anna Young</h5>-->
                                    <!--                              	<small class="text-muted">2 days ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="right">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-right" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Sarah Cruiz</h5>-->
                                    <!--                              	<small class="text-muted">2 days ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>I gotta go</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                      	</ul>-->
                                    <!--                      </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="tab-pane" id="contact-6">-->
                                    <!--                      <div class="chat-body">-->
                                    <!--                      	<ul class="chat-message">-->
                                    <!--                      		<li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Richard Bell</h5>-->
                                    <!--                              	<small class="text-muted">2 days ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Hello</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Richard Bell</h5>-->
                                    <!--                              	<small class="text-muted">2 days ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Hi</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Richard Bell</h5>-->
                                    <!--                              	<small class="text-muted">2 days ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Hey</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                          <li class="left">-->
                                    <!--                      			<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />-->
                                    <!--                      			<div class="chat-item">-->
                                    <!--                              <div class="chat-item-header">-->
                                    <!--                              	<h5>Richard Bell</h5>-->
                                    <!--                              	<small class="text-muted">2 days ago</small>-->
                                    <!--                              </div>-->
                                    <!--                              <p>Hey there</p>-->
                                    <!--                            </div>-->
                                    <!--                      		</li>-->
                                    <!--                      	</ul>-->
                                    <!--                      </div>-->
                                    <!--                    </div>-->
                                    <!--                  </div><!--Chat Messages in Right End-->-->

                                    <div class="send-message">
                                        <div class="input-group">
<!--                                            <input type="text" name="msg" class="form-control" placeholder="Type your message">-->
                                            <span class="input-group-btn">
                          <form class="send" action="sendmessage.php?uid=<?php echo $userfrom1; ?>&myid=<?php echo $userto; ?>" method="post">
                              <input type="text" name="msg" class="form-control" placeholder="Type your message">
                        <button type="submit" name="sendmsgg" class="btn btn-primary" value="sendmsgg">Send</button>
                          </form>
                      </span>
                                        </div>
                                    </div>
                                    <?php
                                }
                        }
                      ?>

                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </div>

<?php
include 'footer.php';
?>
