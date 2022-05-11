<?php

session_start();
include('connect.php');

if (isset($_POST['username'])) {


    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    $query = mysqli_query($con, $sql);


    if (mysqli_num_rows($query) == 1) {

        $row = mysqli_fetch_array($query);

        $_SESSION['userid'] = $row['id'];
        $_SESSION['usn'] = $row['username'];
        $_SESSION['pwd'] = $row['password'];
        $_SESSION['user'] = $row['firstname'];
        $_SESSION['userlevel'] = $row['userlevel'];

        if ($_SESSION['userlevel'] == 'a') {
            header("Location: index.php");
        }

        if ($_SESSION['userlevel'] == 'm') {
            header("Location: home.php");
        }
    } else {
            echo"<script> alert('Username หรือ Password ไม่ถูกต้อง');window.history.go(-1);</script>";
    }
} else {
    header("Location: index.php");
}
?>


  