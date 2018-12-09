<?php
session_start();
include 'header.php';
include 'scripts/DbConnect.php';
if(!isset($_SESSION['kuchBhi']))
{
  echo "<script>alert('Login Required !');location.href = 'index-register.php'</script>";
}
$email=$_SESSION['kuchBhi'];
$que1 = "SELECT * FROM users WHERE email='$email'";
$ex_que1 = $con->query($que1);
$userse = mysqli_fetch_array($ex_que1);
$id = $userse['id'];
$name = $userse['fname'] . " " . $userse['lname'];
?>

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <?php include 'newsfeed-sidebar.php'; ?>
          
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <form name="contentform" action = "scripts/sendpost.php" method="POST">
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="images/prof/<?php echo $userse['image'];?>" alt="" class="profile-photo-md" />
                    <textarea name="postcontent" id="postcontent" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="newsfeedimage.php" onclick><i class="ion-images"></i></a></li>
                    </ul>
                    <button type="submit" id="pubbtn" name="pubbtn" class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
            	</div>
            </div>
          </form>
                   
            <!-- Post Create Box End-->

            <!-- Post Content
            ================================================= -->

          <?php
//could have used join?
              $gett="SELECT * FROM posts ORDER BY timestamp DESC ";
              $query=mysqli_query($con,$gett) or die('error');
              while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                $userid=$row['user_id'];

                $que = "SELECT * FROM users WHERE id='$userid'";
                $ex_que = $con->query($que);
                $use = mysqli_fetch_array($ex_que);
                $name = $use['fname'] . " ". $use['lname'];
              ?>
              <div class="post-content">
                <?php
                if($row['image'] != null) {
                  ?>

                  <img src="images/post/<?php echo $row['image'];?>" alt="post-image" class="img-responsive post-image"/>
                  <div class="post-container">
                    <img src="images/prof/<?php echo $use['image']; ?>" alt="user" class="profile-photo-md pull-left"/>

                    <div class="post-detail">
                      <div class="user-info">
                        <h5><a href="friendtl.php?uid=<?php echo $userid; ?>" class="profile-link"> <?php echo $name; ?> </a> <span
                              class="following">following</span></h5>

                        <p class="text-muted">Published a photo</p>
                      </div>
                      <div class="reaction">
                        <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                      </div>
                      <div class="line-divider"></div>
                      <div class="post-text">
                        <?php echo("<p>" . $row['content'] . "</p>"); ?>
                      </div>

                      <div class="line-divider"></div>
                      <?php /*
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <img src="images/prof/<?php echo $image; ?>" alt="" class="profile-photo-sm">
                    <p><a href="timeline.php" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
                  </div>
 */
                      ?>
                    </div>

                  <?php
                }
                else
                {
                ?>

                <div class="post-container">
                  <img src="images/prof/<?php echo $use['image']; ?>" alt="user" class="profile-photo-md pull-left"/>

                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="friendtl.php?uid=<?php echo $userid; ?>" class="profile-link"> <?php echo $name; ?> </a> <span
                            class="following">following</span></h5>

                      <p class="text-muted">Published a post</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <?php echo("<p>" . $row['content'] . "</p>"); ?>
                    </div>

                    <div class="line-divider"></div>
                    <?php 
                    }
                  ?>
                    </div>
                </div>
        <?php 
          }
          ?>

    	</div>
              </div>
                </div>
              </div>
          </div>
      </div>

<?php
include 'footer.php';
?>
