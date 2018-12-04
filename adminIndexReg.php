<?php
session_start();
include 'scripts/DbConnect.php';
if(isset($_SESSION['kuchBhi']))
{
    echo "<script>alert('Admin Already Logged In !');location.href = 'AdminSearch.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <script> type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"</script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
</head>
<body>

<script type="text/javascript">
    function check() {

        var err=0;
        var alpha = /^[a-zA-Z\s-, ]+$/;
        var chmail = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        var fname=$("#firstname").val();
        var email = $("#email").val();
        var pass = $("#password").val();
        var country=$("#country").val();
        var lname=$("#lastname").val();
        var dob=$("#date").val();
        var gender=$('input[name=gender]:checked').val();
        var city=$("#city").val();

        if( fname == "" || !fname.match(alpha))
        {
            $("#errfn").html("Please Provide Valid First Name!");
            err=1;
        }
        else
        {
            $("#errfn").html("");
        }

        if( pass == "")
        {
            $("#errpass").html("Please Provide Valid Password!");
            err=1;
        }
        else
        {
            $("#errpass").html("");
        }

        if( country == null)
        {
            $("#errcon").html("Please Select Country!");
            err=1;
        }
        else
        {
            $("#errcon").html("");
        }
        if( email == "" || (chmail.test(email)==false))
        {
            err=err + "Please Provide Valid Email!\n" ;
            if (err!="")
            {
                err=1;
                $("#errem").html("Please Provide Valid Email!");

            }

        }
        else
        {

            $.post("checkmail.php",
                {
                    user_email : email
                },
                function(response,status)
                {
                    var e=response.trim();

                    if(e=="NO")
                    {

                        $("#errem").html("Email is already Taken!");
                        err=1;
                    }
                    else
                    {
                        $("#errem").html("");
                        if (err==1)
                        {


                        }
                        else
                        {
                            $.post("../social-butterfly/scripts/register.php",
                                {

                                    l_name : lname,
                                    f_name : fname,
                                    e_mail : email,
                                    d_ob : dob,
                                    c_ity : city,
                                    c_ountry : country,
                                    genderr : gender,
                                    p_ass : pass

                                },
                                function(response,status)
                                {
                                    alert(response);
                                    location.href = '../social-butterfly/newsfeed.php';
                                }
                            );

                        }
                    }
                });
            // $("#regform")[0].reset();
        }
    }
</script>
<!-- Header
================================================= -->
<header id="header-inverse">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <spanr class="icon-bar"></spanr>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-register.php"><img src="images/logo.png" alt="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu newsfeed-home">
                            <li><a href="index.php">Landing Page 1</a></li>
                            <li><a href="index-register.php">Landing Page 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu newsfeed-home">
                            <li><a href="newsfeed.php">Newsfeed</a></li>
                            <li><a href="newsfeed-people-nearby.php">Poeple Nearly</a></li>
                            <li><a href="newsfeed-friends.php">My friends</a></li>
                            <li><a href="newsfeed-messages.php">Chatroom</a></li>
                            <li><a href="newsfeed-images.php">Images</a></li>
                            <li><a href="newsfeed-videos.php">Videos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu login">
                            <li><a href="timeline.php">Timeline</a></li>
                            <li><a href="timeline-about.php">Timeline About</a></li>
                            <li><a href="timeline-album.php">Timeline Album</a></li>
                            <li><a href="timeline-friends.php">Timeline Friends</a></li>
                            <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                            <li><a href="edit-profile-work-edu.php">Edit: Work</a></li>
                            <li><a href="edit-profile-interests.php">Edit: Interests</a></li>
                            <li><a href="edit-profile-settings.php">Account Settings</a></li>
                            <li><a href="edit-profile-password.php">Change Password</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu page-list">
                            <li><a href="index.php">Landing Page 1</a></li>
                            <li><a href="index-register.php">Landing Page 2</a></li>
                            <li><a href="newsfeed.php">Newsfeed</a></li>
                            <li><a href="newsfeed-people-nearby.php">Poeple Nearly</a></li>
                            <li><a href="newsfeed-friends.php">My friends</a></li>
                            <li><a href="newsfeed-messages.php">Chatroom</a></li>
                            <li><a href="newsfeed-images.php">Images</a></li>
                            <li><a href="newsfeed-videos.php">Videos</a></li>
                            <li><a href="timeline.php">Timeline</a></li>
                            <li><a href="timeline-about.php">Timeline About</a></li>
                            <li><a href="timeline-album.php">Timeline Album</a></li>
                            <li><a href="timeline-friends.php">Timeline Friends</a></li>
                            <li><a href="edit-profile-basic.php">Edit Profile</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="contact.php">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->

<!-- Landing Page Contents
================================================= -->
<div id="lp-register">
    <div class="container wrapper">
        <div class="row">
            <div class="col-sm-5">
                <div class="intro-texts">
                    <h1 class="text-white">Make Cool Friends !!!</h1>
                    <p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <div class="reg-form-container">

                    <!-- Register/Login Tabs-->
                    <div class="reg-options">
                        <ul class="nav nav-tabs">
                            <li><a href="#login" data-toggle="tab">Login</a></li>
                        </ul><!--Tabs End-->
                    </div>
                        <!--Login-->
                        <div class="tab-pane" id="login">
                            <h3>Admin Login</h3>
                            <p class="text-muted">Log into your account</p>

                            <!--Login Form-->
                            <form name="Login_form" action="scripts/adminLogin.php" id='Login_form' method="POST" class="form-inline">
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="my-email" class="sr-only">Email</label>
                                        <input id="my-email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="Your Email"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="my-password" class="sr-only">Password</label>
                                        <input id="my-password" class="form-control input-group-lg" type="password" name="pass" title="Enter password" placeholder="Password"/>
                                    </div>
                                    <button type="submit" name="logbtn" class="btn btn-primary" value="login">Login Now</button>
                                </div>
                            </form><!--Login Form Ends-->
                            <p><a href="#">Forgot Password?</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6">

        <--Social Icons-->
                            <ul class="list-inline social-icons">
                                <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--preloader-->
            <div id="spinner-wrapper">
                <div class="spinner"></div>
            </div>

            <!-- Scripts
            ================================================= -->
            <script src="js/jquery-3.1.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.appear.min.js"></script>
            <script src="js/jquery.incremental-counter.js"></script>
            <script src="js/script.js"></script>

</body>
</html>
