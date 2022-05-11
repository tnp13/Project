<?php
session_start();
include "connect.php";


if (isset($_POST['room_num'])) {

    $room_num = $_POST['room_num'];
    $floor_level = $_POST['floor_level'];
    $room_type = $_POST['room_type'];
    $room_note = $_POST['room_note'];
    $sql1 = "UPDATE user SET room_num='$room_num',floor_level='$floor_level',
    room_type='$room_type',room_note='$room_note' WHERE room_num = '$room_num'";
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
