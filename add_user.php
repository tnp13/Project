<?php

session_start();

include "connect.php";
$sql1 = "SELECT * FROM user";
$query1 = mysqli_query($con, $sql1);
$total = mysqli_fetch_array($query1);

$username =  $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$userlevel = $_POST['userlevel'];
$date_birth = $_POST['date_birth'];


$sql = "INSERT INTO user(username,password,firstname,lastname,address,email,tel,date_birth,userlevel)
                    VALUE('$username','$password','$firstname','$lastname','$address','$email','$tel','$date_birth','$userlevel')";
$query = mysqli_query($con, $sql);
mysqli_close($con);

if ($total) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มสมาชิกเรียบร้อย');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('เกิดข้อผิดพลาดในการเพิ่มสมาชิก');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
}

?>