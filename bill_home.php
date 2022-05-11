<?php
session_start();
if (isset($_SESSION["usn"]) && isset($_SESSION["pwd"])) {
    include "connect.php";
    $usn = $_SESSION["usn"];
    $sql = "SELECT * FROM user u,room_information ri,payment pm WHERE u.room_num = ri.room_num AND u.room_num = pm.room_num AND username = '$usn'";
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
            <form action="test1111.php" method="post" name="form1" id="form1">
                <table id="customers">
                    <tr>

                        <th>รหัสบิล</th>
                        <th>หมายเลขห้อง</th>
                        <th>หน่วยน้ำ</th>
                        <th>หน่วยไฟฟ้า</th>
                        <th>ค่าน้ำ</th>
                        <th>ค่าไฟ</th>
                        <th>วันที่ออกบิล</th>
                        <th>ราคาทั้งหมด</th>
                        <th>ดำเนินการ</th>
                    </tr>
                    <tr>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($query)) : ?>
                                <tr>
                                    <td><?php echo $row['unit_id']; ?></td>
                                    <td><?php echo $row['room_num']; ?></td>
                                    <td><?php echo $row['unit_water']; ?></td>
                                    <td><?php echo $row['unit_elec']; ?></td>
                                    <td><?php echo $row['water_price']; ?></td>
                                    <td><?php echo $row['elec_price']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['sum']; ?></td>
                                    <td align="center">
                                        <?php echo "<a href=\"pay_home.php?unit_id=$row[unit_id]\">"; ?>
                                        <span class="btn btn-danger mb-1 w-100" data-toggle="modal" 
                                        data-target="#logoutModal">ชำระเงิน</a>
                                    </td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </tr>
                </table>
            </form>
            <!-- <div class="navBar">
      <div class="dropdown">
        <button class="dropbtn"></button>
        <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="logout.php">Log Out</a>
        </div>
      </div>
      <ul>
        <li><a href="index_user.php">HOME</a></li>
        <li><a href="pay.php">PAY</a></li>
        <li><a href="overdue.php">OVERDUE</a></li>
        <li><a href="contact_user.php">CONTACT</a></li>
      </ul>
    </div> -->

        </div>
    </body>

    </html>
<?php
} else {
    echo "<script> alert('Pleasem Login'); window.location='formlogin.php';</script>";
    exit();
}
?>