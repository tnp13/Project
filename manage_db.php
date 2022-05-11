<?php
    
    session_start();
    include 'connect.php';

    $sql = "SELECT * FROM room_information WHERE room_num = '$room_num'";
    $query = mysqli_query($con,$sql);
    $rs = mysqli_fetch_array($query);

    $room_num = $_POST['room_num'];
    $floor_level = $_POST['floor_level'];
    $room_type = $_POST['room_type'];
    $room_status = $_POST['room_status'];
    $room_price = $_POST['room_price'];
    $room_note = $_POST['room_note'];


    $sql1 = "INSERT INTO room_information(room_num,floor_level,room_type,room_status,room_price,room_note
                VALUES('$room_num','$floor_level,'$room_type','$room_status','$room_price','$room_note')";
    $query1 = mysqli_query($con, $sql1);
    echo $sql1;
    mysqli_close($con);
    
    if ($rs) {
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มห้องพักเรียบร้อย');";
        // echo "window.location = 'index.php'; ";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('เกิดข้อผิดพลาดในการเพิ่มห้องพัก');";
        // echo "window.location = 'index.php'; ";
        echo "</script>";
    }
?>