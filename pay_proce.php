<?php
include "connect.php";
$sql = "SELECT * FROM user WHERE id";
$query1 = mysqli_query($con, $sql);
$rs = mysqli_fetch_array($query1);

?>

    <?php

    session_start();
    include "connect.php";

    $bank =  $_POST['bank'];
    $bank_number = $_POST['bank_number'];
    $sum = $_POST['sum'];
    $id = $_POST['id'];
    $room_num = $_POST['room_num'];

    $name_file = $_FILES['slip']['name'];
    $tmp_name = $_FILES['slip']['tmp_name'];
    $locate_img = "images/Slip/";
    move_uploaded_file($tmp_name, $locate_img . $name_file);

    $sql = "INSERT INTO pay(bank,bank_number,price,slip,date_pay,id,room_num,status)
                        VALUE('$bank','$bank_number','$sum','$name_file','$date','$id','$room_num','ชำระเงินแล้ว')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);

    if ($query) {
        echo "<script type='text/javascript'>";
        echo "alert('ชำระเงินสำเร็จ');";
        // echo "window.location = 'home.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('ชำระเงินล้มเหลว');";
        // echo "window.location = 'pay_home.php'; ";
        echo "</script>";
    }
    ?>
</body>

</html>