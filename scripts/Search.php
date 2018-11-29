<?php
include 'header.php';
include 'scripts/DbConnect.php';

    $gett="SELECT * FROM users";
    $query=mysqli_query($con,$gett) or die('error');
//    echo "<table>";
//    echo "<tr><th>Name</th></tr>";
    while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $fname=$row['fname'];
        $lname=$row['lname'];

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
            <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
            <div>
                <h3><a href="timeline.php?uid=<?php echo $row['id']; ?>"><?php echo "$fname". " $lname"; ?></a>
                </h3>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>

        <?php




//        echo "<tr><td>";
//        echo $row['fname'];
//
//        echo "<tr><td>";
//        echo $row['lname'];
//        echo "\n";
//        echo "</td></tr>";


    }

?>
<!--<div class="container">-->
<!---->
<!--    <!-- Timeline-->
<!--    ================================================= -->-->
<!--    <div class="timeline">-->
<!--        <div id="page-contents">-->
<!--            <div class="row">-->
<!--                <div class="col-md-3"></div>-->
<!--                <div class="col-md-7">-->



<!--                    <!-- Friend List-->
<!--                    ================================================= -->
<!--                    <div class="friend-list">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="#" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="timeline.php" class="profile-link">Sophia Lee</a></h5>-->
<!--                                            <p>Student at Harvard</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="#" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="timeline.php" class="profile-link">John Doe</a></h5>-->
<!--                                            <p>Traveler</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="timeline.php" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="#" class="profile-link">Julia Cox</a></h5>-->
<!--                                            <p>Art Designer</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="#" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="timelime.html" class="profile-link">Robert Cook</a></h5>-->
<!--                                            <p>Photographer at Photography</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="#" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="timeline.php" class="profile-link">Richard Bell</a></h5>-->
<!--                                            <p>Graphic Designer at Envato</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="#" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="timeline.php" class="profile-link">Linda Lohan</a></h5>-->
<!--                                            <p>Software Engineer</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="#" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="timeline.php" class="profile-link">Anna Young</a></h5>-->
<!--                                            <p>Musician</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="#" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="timeline.php" class="profile-link">James Carter</a></h5>-->
<!--                                            <p>CEO at IT Farm</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 col-sm-6">-->
<!--                                <div class="friend-card">-->
<!--                                    <img src="http://placehold.it/1030x360" alt="profile-cover" class="img-responsive cover" />-->
<!--                                    <div class="card-info">-->
<!--                                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />-->
<!--                                        <div class="friend-info">-->
<!--                                            <a href="#" class="pull-right text-green">My Friend</a>-->
<!--                                            <h5><a href="timeline.php" class="profile-link">Alexis Clark</a></h5>-->
<!--                                            <p>Traveler</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->


<?php
include 'footer.php';
?>
