<?php
session_start();
include('connect.php');
if (isset($_SESSION["userid"]) && isset($_SESSION["user"])) {
  $userid = $_SESSION["userid"];

  $sql1 = "SELECT * FROM room_information ri,user u,pay p,payment pm 
WHERE ri.room_num=u.room_num AND ri.room_num=p.room_num 
AND p.room_num=pm.room_num AND username='$userid' AND p.status='ยืนยันแล้ว'";
  $query1 = mysqli_query($con, $sql1);
  $rs = mysqli_fetch_array($query1);

  $sql = "SELECT * FROM room_information ri,user u,pay p,payment pm 
WHERE ri.room_num=u.room_num AND ri.room_num=p.room_num 
AND p.room_num=pm.room_num AND p.status='ยืนยันแล้ว'";
  $query = mysqli_query($con, $sql);


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
    <div class="container bg">
      <?php
      include "header1.php";
      ?>
      <table id="customers">
        <tr>
          <th>หมายเลขห้อง</th>
          <th>ปริมาณการใช้น้ำ</th>
          <th>ปริมาณการใช้ไฟฟ้า</th>
          <th>ค่าน้ำ</th>
          <th>ค่าไฟฟ้า</th>
          <th>วันที่ส่งบิล</th>
          <th>ราคาทั้งหมด</th>
          <th>ดำเนินการ</th>

        </tr>
        <tr>
          <tbody>
            <?php while ($row = mysqli_fetch_array($query)) : ?>
              <tr>
                <td><?php echo $row['room_num']; ?></td>
                <td><?php echo $row['unit_water']; ?></td>
                <td><?php echo $row['unit_elec']; ?></td>
                <td><?php echo $row['water_price']; ?></td>
                <td><?php echo $row['elec_price']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['sum']; ?></td>
                <td align="center"><?php echo "<a href=\"pay_home.php?username=$row[username]\">"; ?><span class="btn2 btn-success mb-1 w-100" data-toggle="modal" data-target="#logoutModal">ชำระเงิน</?>
                </td>
              </tr>
            <?php endwhile ?>
          </tbody>
        </tr>
      </table>

      <!-- <div class="navBar">
    <div class="dropdown">
        <button class="dropbtn"></button>
        <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="logout.php">Log Out</a>
        </div>
      </div>
      <ul>
        <li><a href="Index_user.php">HOME</a></li>
        <li><a href="pay.php">PAY</a></li>
        <li><a href="overdue.php">OVERDUE</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div> -->

    </div>

  </body>

  </html>
<?php
} else {
  echo "<script> alert('Please Login'); window.location='index_user.php';</script>";
  exit();
}
?>