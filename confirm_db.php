<?php include("connect.php");

//สร้างตัวแปร
$pay_id = $_GET['pay_id'];

//แก้ไขข้อมูล
$sql = " UPDATE pay SET status='ยืนยันแล้ว' WHERE pay_id='$pay_id' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
//ปิดการเชื่อมต่อ database
mysqli_close($con);

//ถ้าสำเร็จให้ขึ้นอะไร
if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('ยืนยันสำเร็จ');";
    echo "window.location = 'frm_list.php'; ";
    echo "</script>";
} else {
    //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
    echo "<script type='text/javascript'>";
    echo "alert('error!');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
}
?>