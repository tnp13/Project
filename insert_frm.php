<?php
include("connect.php");
$sql1 = "SELECT * FROM user u,room_information ri,payment p WHERE u.room_num=ri.room_num OR ri.room_num=p.room_num";
$query2 = mysqli_query($con, $sql1);
$rs = mysqli_fetch_array($query2);


if (isset($_POST['unit_id'])) {
    $sql = "INSERT INTO payment(unit_water,unit_elec,water_price,elec_price,total_water,total_elec,date,room_num,sum)
		VALUES('" . $_POST['unit_water'] . "', '" . $_POST['unit_elec'] . "', '" . $_POST['water_price'] . "', '" . $_POST['elec_price'] . "', '" . $_POST['total_water'] . "', '" . $_POST['date'] . "','" . $_POST['room_num'] . "','" . $_POST['sum'] . ")";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script type='text/javascript'>";
        echo "alert('แจ้งยอดชำระสำเร็จ');";
        echo "window.location = 'frmcontact.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('ลบข้อมูลสำเร็จ');";
        echo "window.location = 'frmcontact.php'; ";
        echo "</script>";
    }
}

mysqli_close($con);
?>
  <html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Midnight Apartment</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="insert_frm_db.php" method="post" name="form1" id="form1">

    <div class="container2">
        <h1>คำนวณค่าน้ำค่าไฟ</h1>
        <hr>
        <tr>
            <th>หมายเลขห้อง :</th>
            <td>
                <select class="form-control" readonly required="required" name="room_num" id="room_num">
                    <?php
                    include('connect.php');
                    $sql1 = "SELECT * FROM room_information ri,user u WHERE ri.room_num=u.room_num";
                    $query = mysqli_query($con, $sql1);
                    while ($rs1 = mysqli_fetch_array($query)) {
                        echo "<option value=$rs1[room_num]>$rs1[room_num]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <br><br>           
        <label for="unit_water"><b>ปริมาณการใช้น้ำ</b></label>
        <input type="number" placeholder="ปริมาณการใช้น้ำ" name="unit_water" id="unit_water" required>

        <label for="unit_elec"><b>ปริมาณการใช้ไฟฟ้า</b></label>
        <input type="number" placeholder="ปริมาณการใช้ไฟฟ้า" name="unit_elec" id="unit_elec" required>
        
        <label for="water_price"><b>ค่าน้ำ</b></label>
        <input type="number" placeholder="กรอกค่าน้ำ" name="water_price" id="water_price" required>

        <label for="elec_price"><b>ค่าไฟฟ้า</b></label>
        <input type="number" placeholder="กรอกค่าไฟ" name="elec_price" id="elec_price" required>
        <hr>

        <!-- <label for="total_water"><b>ค่าน้ำทั้งหมด</b></label>
        <input type="total_water" placeholder="กรอกค่าน้ำทั้งหมด" name="total_water" id="total_water" required>
        <hr>

        <label for="total_elec"><b>ค่าไฟฟ้าทั้งหมด</b></label>
        <input type="total_elec" placeholder="กรอกค่าไฟฟ้าทั้งหมด" name="total_elec" id="total_elec" required> -->
        

        <label for="date"><b>วันที่ออกบิล</b></label>
        <input type="date" placeholder="กรอกวันที่ออกบิล" name="date" id="date" required>
        <hr>

        <!-- <label for="room_price"><b>วันที่ออกบิล</b></label>
        <input type="number" placeholder="กรอกวันที่ออกบิล" name="room_price" id="room_price" required>
        <hr> -->
        <label for="sum"><b>รวมค่าใช้จ่ายทั้งสิ้น</b></label>
        <input type="text" placeholder="กรอกราคาทั้งหมด" name="sum" id="sum" required>
        <hr>
        <button type="submit" name="submit " class="registerbtn">ตกลง</button>
    </div>
</form>
</body>
  </html>