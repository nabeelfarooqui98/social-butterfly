<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="images/prof/<?php echo $userse['image'];?>" alt="user" class="profile-photo" />
            	<h5><a href="timeline.php" class="text-white"><?php echo $name;?></a> </h5>
            	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.php">My Newsfeed</a></div></li>
              
              <li><i class="icon ion-ios-people-outline"></i><div><a href="newsfeed-friends.php">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="newsfeed-messages.php">Messages</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="newsfeed-images.php">Images</a></div></li>
              <li><i class="icon ion-ios-close"></i><div><a href="../social-butterfly/scripts/logout.php">Log Out</a></div></li>
            </ul><!--news-feed links ends-->
          </div>