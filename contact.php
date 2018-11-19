<?php
include './scripts/DbConnect.php';
include 'header.php';


if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email']) && $_POST['email'] != '')) {
    $Name = $_POST['name'];
    $EmailId = $_POST['email'];
    $PhoneNo = $_POST['phone'];
    $Message = $_POST['message'];


    if (true) {

        $ins = "INSERT INTO contact (Name,EmailId,PhoneNo,Message) VALUES ('$Name', '$EmailId' , '$PhoneNo', '$Message')";
        /*echo "iam here";*/
        if ($con->query($ins)) {
            /*require_once("sendMail.php");*/
            echo "<script>alert('Thank you we will contact you soon !!');location.href = 'contact.php'</script>";
        }
    } else {
        echo "<script>alert('Please fill  name and email !');location.href = 'contact.php'</script>";
    }

}
?>

<div class="google-maps">
      <div id="map" class="map contact-map"></div>
    </div>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
            <div class="contact-us">
            	<div class="row">
            		<div class="col-md-8 col-sm-7">
                  <h4 class="grey">Leave a Message</h4>
                  <form class="contact-form" method="post">
                    <div class="form-group">
                      <i class="icon ion-person"></i>
                      <input id="contact-name" type="text" name="name" class="form-control" placeholder="Enter your name *" required="required" data-error="Name is required.">
                    </div>
                    <div class="form-group">
                      <i class="icon ion-email"></i>
                      <input id="contact-email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Email is required.">
                    </div>
                    <div class="form-group">
                      <i class="icon ion-android-call"></i>
                      <input id="contact-phone" type="text" name="phone" class="form-control" placeholder="Enter your phone *">
                    </div>
                    <div class="form-group">
                      <textarea id="form-message" name="message" class="form-control" placeholder="Leave a message for us *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    </div>
                      <button type="send" name="msgbtn" class="btn-primary" value="insert">Send a Message</button>
                    </div>
                  </form>


            		<div class="col-md-4 col-sm-5">
                  <h4 class="grey">Reach Us</h4>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-android-call"></i></span><p>+1 (234) 222 0754</p></div>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-email"></i></span><p>info@thunder-team.com</p></div>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-ios-location"></i></span><p>228 Park Ave S NY, USA</p></div>
                  <ul class="list-inline social-icons">
                    <li><a href="http://www.facebook.com"><i class="icon ion-social-facebook"></i></a></li>
                    <li><a href="https://www.twitter.com"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/discover"><i class="icon ion-social-googleplus"></i></a></li>
                    <li><a href="https://www.pinterest.com"><i class="icon ion-social-pinterest"></i></a></li>
                    <li><a href="https://pk.linkedin.com"><i class="icon ion-social-linkedin"></i></a></li>
                  </ul>
                </div>
            	</div>
            </div>
          </div>
    		</div>
    	</div>
    </div>
<?php
include 'footer.php';
?>
