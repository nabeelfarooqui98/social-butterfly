<?php

class User
{
    public $con;
    public $UserId;
    public $row;
    private $fname;
    private $lname;
    private $email;
    private $pass;
    private $dob;
    private $city;
    private $country;
    private $gender;


    public function __construct($con, $UserId,$fname,$lname,$email,$pass,$dob,$city,$country,$gender)
    {
        $this->con = $con;
        $this->UserId = $UserId;
        $this->fname=$fname;
        $this->lname=$lname;
        $this->email=$email;
        $this->pass=$pass;
        $this->dob=$dob;
        $this->city=$city;
        $this->country=$country;
        $this->gender=$gender;
        $query=mysqli_query($con,"SELECT * FROM users WHERE id='$UserId'");
        $this->row = $query->fetch_assoc();

    }
    public function returnRow()
    {
        return $this;
    }

//        $this->UserId = mysqli_fetch_array($user_query);
//    }
    public function login()
    {

    }

    public function getUser()
    {
        return $this->user;
    }

    public function insert($query) {
        $result = $this->con->query($query);

        return $result;
    }

    public function add_friend($user_id, $friend_id) {
        global $db;

        $table = 'friendrequest';

        $query = "INSERT INTO $table (sender_id,receiver_id) VALUES ('$user_id', '$friend_id')";

        return $db->insert($query);
    }
    public function get_friends($user_id) {
        global $db;

        $table = 'friendrequest';

        $query = "SELECT sender_id, receiver_id FROM $table WHERE sender_id = '$user_id'";

        $friends = $db->select($query);

        foreach ( $friends as $friend ) {
            $friend_ids[] = $friend->friend_id;
        }

        return $friend_ids;
    }

}

?>