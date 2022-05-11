<?php
include "connect.php";
$sql = "SELECT * FROM room_information ri,payment pm WHERE ri.room_num=pm.room_num";
$query1 = mysqli_query($con, $sql);
$rs = mysqli_fetch_array($query1);
?>
    <?php

    session_start();
    include "connect.php";

    $room_num =  $_POST['room_num'];
    $unit_water = $_POST['unit_water'];
    $unit_elec = $_POST['unit_elec'];
    $water_price = $_POST['water_price'];
    $elec_price = $_POST['elec_price'];
    $date = $_POST['date'];
    $sum = $_POST['sum'];

    $sql = "INSERT INTO payment(room_num,unit_water,unit_elec,water_price,elec_price,date,sum)
                        VALUE('$room_num','$unit_water','$unit_elec','$water_price','$elec_price','$date','$sum')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);

    if ($query) {
        echo "<script type='text/javascript'>";
        echo "alert('ชำระเงินสำเร็จ');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('ชำระเงินล้มเหลว');";
        echo "window.location = 'frmbill.php'; ";
        echo "</script>";
    }
    ?>
</body>

</html>