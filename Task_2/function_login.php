<?php

function insert()
{
    include "DBconnection.php";
    global $connection;

    if (isset($_POST["signup"])) {
        $username = $_POST['username'];
        $city = $_POST['city'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
        $query0 = "SELECT * FROM `Task_2` WHERE `username` = '$username' and `password` = '$password'";
        $result = mysqli_query($connection, $query0);
        if (mysqli_num_rows($result) > 0) {

            echo 'Try to use Different Data.';
        } else {

            $query = "INSERT INTO `Task_2`(`username`, `city`, `contact_no`, `email`, `password`) values ('$username','$city','$contact_no','$email','$password')";
            $result5 = mysqli_query($connection, $query);

            $query1 = "SELECT id FROM `Task_2` WHERE `username` = '$username' and `password` = '$password'";
            $result1 = mysqli_query($connection, $query1);
            $row = mysqli_fetch_array($result1);

            $user_id = $row['id'];

            $query20 = "INSERT INTO `usertype`(`user_id`, `access_type`) VALUES ('$user_id','$user_type')";
            $result20 = mysqli_query($connection, $query20);


            echo "<script>window.location.href='login_form.php';</script>";
            exit;
        }
    }
}

function logincheck()
{
    include "DBconnection.php";
    global $connection;

    if (isset($_POST["login"])) {
        session_start();

        $un = $_POST['username'];
        $pw = $_POST['password'];

        $query = "SELECT `username`,`password` FROM `Task_2` WHERE `username`='$un' AND `password`='$pw'";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {

            $check_username = $row['username'];
            $check_password = $row['password'];
        }
        if ($un == $check_username && $pw == $check_password) {

            $query11 = "SELECT id, username FROM `Task_2` WHERE `username`='$un' AND `password`='$pw'";
            $result11 = mysqli_query($connection, $query11);
            $row = mysqli_fetch_array($result11);
            $id = $row['id'];
            $name = $row['username'];
            $query12 = "SELECT `access_type` FROM `usertype` WHERE user_id = $id";
            $result12 = mysqli_query($connection, $query12);
            $row1 = mysqli_fetch_array($result12);
            $type = $row1['access_type'];
            $_SESSION['loggedin'] = true;
            $_SESSION['u_type'] = $type;
            $_SESSION['u_name'] = $name;

            echo "<script>window.location.href='info_form.php';</script>";
            exit;
        } else {
            $message = "Incorrect Password or Username";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}

function viewdata()
{
    if (isset($_POST['view'])) {
        include "DBconnection.php";
        global $connection;

        $query = "SELECT * FROM `Task_2`";
        $result = mysqli_query($connection, $query);
        include "view_table.php";
    }
}

function adduser()
{
    include "DBconnection.php";
    global $connection;

    if (isset($_POST["adduser"])) {

        $username = $_POST['username'];
        $city = $_POST['city'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];

        $query = "INSERT INTO `Task_2`(`username`, `city`, `contact_no`, `email`, `password`) VALUES ('$username','$city','$contact_no','$email','$password')";
        $result = mysqli_query($connection, $query);

        $query1 = "SELECT id FROM `Task_2` WHERE `username` = '$username' and `password` = '$password'";
        $result1 = mysqli_query($connection, $query1);
        $row = mysqli_fetch_array($result1);
        $user_id = $row['id'];
        $query20 = "INSERT INTO `usertype`(`user_id`, `access_type`) VALUES ('$user_id','$user_type')";
        // echo $query20;
        // die;
        $result20 = mysqli_query($connection, $query20);

        echo "<script>window.location.href='info_form.php';</script>";
        exit;
    }
}

function subjectview()
{
    if (isset($_POST['subject'])) {
        include "DBconnection.php";
        global $connection;

        $query = "SELECT * FROM `Subject`";
        // echo "done"; die;
        $result = mysqli_query($connection, $query);
        include "view_subject.php";
    }
}

function chapterview()
{
    if (isset($_POST['chapter'])) {
        include "DBconnection.php";
        global $connection;

        $query = "SELECT * FROM `Chapter`";
        $result = mysqli_query($connection, $query);
        include "view_chapter.php";
    }
}

function standardview()
{
    if (isset($_POST['standard'])) {
        include "DBconnection.php";
        global $connection;

        $query = "SELECT * FROM `Standard`";
        $result = mysqli_query($connection, $query);
        include "view_standard.php";
    }
}

function addsubject()
{
    include "DBconnection.php";
    global $connection;

    if (isset($_POST["addsubject"])) {

        $id = $_POST['id'];
        $sbj_name = $_POST['sbj_name'];
        $std_name = $_POST['std_name'];

        $query1 = "SELECT `id` FROM `Standard` where `std_name` = '$std_name' ";
        
        $result1 = mysqli_query($connection, $query1);
        $row = mysqli_fetch_array($result1);
        $std_id = $row['id'];

        $query0 = "SELECT * FROM `Subject` WHERE `sbj_name` = '$sbj_name' && `std_id` = '$std_id'";
        $result = mysqli_query($connection, $query0);
        if (mysqli_num_rows($result) > 0) {

            echo 'Try to use Different Data.';
        
        } else {
        
        $query2 = "INSERT INTO `Subject` (`std_id`,`sbj_name`) VALUES ('$std_id','$sbj_name')";
        
        $result2 = mysqli_query($connection, $query2);

        echo "<script>window.location.href='school.php';</script>";
        exit; 
        }
    }
}

function addchapter()
{
    include "DBconnection.php";
    global $connection;

    if (isset($_POST["addchapter"])) {
        
        $sbj_id = $_POST['sbj_id'];
        $sbj_name = $_POST['sbj_name'];
        $chp_name = $_POST['chp_name'];

        $query1 = "SELECT `id` FROM `Subject` where `sbj_name` = '$sbj_name' ";
        
        $result1 = mysqli_query($connection, $query1);
        $row = mysqli_fetch_array($result1);
        $sbj_id = $row['id'];

        $query0 = "SELECT * FROM `Chapter` WHERE `chp_name` = '$chp_name' && `sbj_id` = '$sbj_id'";
        $result = mysqli_query($connection, $query0);
        if (mysqli_num_rows($result) > 0) {

            echo 'Try to use Different Data.';
        
        } else {
        
        $query20 = "INSERT INTO `Chapter` (`sbj_id`,`chp_name`) VALUES ('$sbj_id','$chp_name')";
        $result20 = mysqli_query($connection, $query20);


        echo "<script>window.location.href='school.php';</script>";
        exit; 
        }
    }
}

function addstandard()
{
    include "DBconnection.php";
    global $connection;

    if (isset($_POST["addstandard"])) {

        $id = $_POST['id'];
        $std_name = $_POST['std_name'];
        $std_id = $_POST['std_id'];

        $query0 = "SELECT * FROM `Standard` WHERE `std_name` = '$std_name' ";
        $result = mysqli_query($connection, $query0);
        if (mysqli_num_rows($result) > 0) {

            echo 'Try to use Different Data.';
        
        } else {

        $query = "INSERT INTO `Standard`(`std_name`) VALUES ('$std_name')";
        $result = mysqli_query($connection, $query);

        echo "<script>window.location.href='school.php';</script>";
        exit; 
        }
    }
}