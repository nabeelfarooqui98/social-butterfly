<?php
session_start();
include 'header.php';
?>

<div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">
          <?php
          include 'tlmenu.php';
          ?>

          <?php
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
          $id = $data['id'];
          $image = $data['image'];
          $que = "SELECT * FROM education WHERE UserId = '$id'";
          $ex_que= $con->query($que);
          $edu = mysqli_fetch_array($ex_que);
          $que1 = "SELECT * FROM work WHERE UId = '$id'";
          $ex_que= $con->query($que1);
          $work = mysqli_fetch_array($ex_que);


          ?>

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li><i class="icon ion-ios-information-outline"></i><a href="edit-profile-basic.php">Basic Information</a></li>
              	<li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="edit-profile-work-edu.php">Education and Work</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="edit-profile-interests.php">My Interests</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.php">Account Settings</a></li>
              	<li><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.php">Change Password</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My education</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="education" id="education" class="form-inline" method="post" action="scripts/education.php">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">My School</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="school" title="Enter School"  placeholder="Enter School Name" value="<?php echo $edu['school']?>"/>
                      </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-6 col-xs-12">
                      <label for="year">School Passing Year </label>
                      <select class="form-control"name="syear" id="year">
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                      </select>
                    </div>
                      </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">My College</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="college" title="Enter School" placeholder="Enter College Name"  value="<?php echo $edu['college']?>"/>
                      </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-6 col-xs-12">
                      <label for="year">College Passing Year </label>
                      <select class="form-control" name="cyear" id="year">
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>

                      </select>
                    </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">My University</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="university" title="Enter University" placeholder="Enter University Name" value="<?php echo $edu['university']?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year">University Passing Year </label>
                        <select class="form-control" name="uyear" id="year">
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2003</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                          <option>2011</option>
                          <option>2012</option>
                          <option>2013</option>
                          <option>2014</option>
                          <option>2015</option>
                          <option>2016</option>
                          <option>2017</option>
                          <option>2018</option>
                          <option>Under Graduate</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="edu-description">Description</label>
                        <textarea id="edu-description" name="description" type="text" class="form-control" placeholder="Some texts about my education" rows="4" cols="400"></textarea>
                        <input type="hidden" class="form-control" name="UserId" value="<?php echo $id ?>" />
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btn_edu">Save Changes</button>
                  </form>
                </div>
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Work Experiences</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="work" id="work" class="form-inline" method="post" action="scripts/work.php">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Works At</label>
                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="Where do you work?" value="<?php echo $work['company']?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="designation">Designation</label>
                        <input id="designation" class="form-control input-group-lg" type="text" name="position" title="Enter designation" placeholder="Enter your position at work place" value="<?php echo $work['pos']?>" />
                      </div>
                    </div>
                    <?php
                    /*
                    ?>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="from-date">From</label>
                        <input id="from-date" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="from" value="2016" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="to-date" class="">To</label>
                        <input id="to-date" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="to" value="Present" />
                      </div>
                    </div>
                    */
                    ?>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-city">City/Town</label>
                        <input id="work-city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Where's your work place situated?" value="<?php echo $work['city']?>"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-description">Description</label>
                        <textarea id="work-description" name="descr"  class="form-control" placeholder="Some texts about my work" rows="4" cols="400" ></textarea>
                        <input type="hidden" class="form-control" name="UId" value="<?php echo $id ?>" />
                      </div>
                    </div>
                    <button class="btn btn-primary" name="btn_work">Save Changes</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              
              <!--Sticky Timeline Activity Sidebar-->
              <?php
              include 'sidebar.php';
              ?>
             </div>
          </div>
        </div>
      </div>
    </div>


<?php
include 'footer.php';
?>
