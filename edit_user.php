<?php
session_start();
include "connect.php";


if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $room_num = $_POST['room_num'];
    $userlevel = $_POST['userlevel'];
    $date_birth = $_POST['date_birth'];
    
    $sql1 = "UPDATE user SET firstname='$firstname',password='$password',
    lastname='$lastname',address='$address',email='$email',tel='$tel',
    date_birth='$date_birth',userlevel='$userlevel',room_num='$room_num' WHERE username = '$username'";
    $query1 = mysqli_query($con, $sql1);
    if ($query1) {
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลสำเร็จ');";
        echo "window.location = 'frmcontact.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลล้มเหลว');";
        echo "window.location = 'frmcontact.php'; ";
        echo "</script>";
    }
}

mysqli_close($con);
