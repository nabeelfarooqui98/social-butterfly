<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>News Feed | Check what your friends are doing</title>

    <!-- Stylesheets
    ================================================= -->

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    function showResult(str) {
    if (str.length==0) { 
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("livesearch").innerHTML=this.responseText;
        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
    }
    </script>
        
</head>
<body>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search country..." />
        <div class="result"></div>
    </div>

<!--Header
=================================================-->
<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="newsfeed.php"><img src="images/logo.png" alt="logo" /></a>
                
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li class="dropdown"><a href="Search.php" class="button">Browse Users</a></li>
                    <li class="dropdown"><a href="newsfeed.php" class="button">Newsfeed</a></li>
                    <li class="dropdown"><a href="timeline.php" class="button">My Timeline</a></li>
                    <li class="dropdown"><a href="contact.php">Contact</a></li>

                    

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu page-list">
                            <li><a href="./edit-profile-basic.php">Edit Profile</a></li>
                            <li><a href="./scripts/logout.php">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <form class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <i class="icon ion-android-search"></i>
                        <input type="text" name="livesearch" id="livesearch" class="form-control" placeholder="Search friends, photos, videos" onkeyup="showResult(this.value)"/>
                    </div>
                </form>

<!--            <form class="navbar-form navbar-right hidden-sm">-->
<!--                <div class="form-group">-->
<!--                        <a href="Search.php" class="button">Search User</a>-->
<!--                </div>-->
<!--            </form>-->
                
            </div>
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->
</body>
</html>