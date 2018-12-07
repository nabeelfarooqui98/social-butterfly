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

$gett = "SELECT * FROM users WHERE id!='$userid' ";
$query = mysqli_query($con, $gett) or die('error');

?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Users</th>
      <!-- <th scope="col">Image</th>
      <th scope="col">Name</th> -->
    </tr>
  </thead>
  <tbody>

<?php


while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
$Recname = $row['fname'] . " " . $row['lname'];
$receiverId = $row['id'];


?>
    <!-- Timeline
    ================================================= -->

<?php
    echo '<tr>';
    echo '<th scope="row"></th>';
      
    echo '<img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left"/>';
    //echo '<div>';
    echo '<h3><a href="FriendTL.php?uid='. $receiverId . '">'; 
    echo "$Recname</a>";
    echo '</h3>';                               
    //echo ' </div>';            

      // echo '<td>Mark</td>';
      // echo '<td>Otto</td>';
    echo '</tr>';
    
?>
  </tbody>
</table>    
                            
                        

    <?php

    }
    }
?>


<?php
include 'footer.php';
?>
