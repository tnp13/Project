<?php
session_start();
if (isset($_SESSION["usn"]) && isset($_SESSION["pwd"])) {
  // include "connect.php";
  // $usn = $_SESSION["usn"];
  // $sql = "SELECT * FROM user u,room_information ri,payment pm WHERE u.room_num = ri.room_num AND u.room_num = pm.room_num AND username = '$usn'";
  // $query = mysqli_query($con, $sql);
  
  include "connect.php";
  @$sql1 = "SELECT * FROM user WHERE username = '$usn'";
  $result1 = mysqli_query($con,$sql1);
  $rs = mysqli_fetch_array($result1);
	
	include "connect.php";
	
  $unit_id = $_GET['unit_id'];
  $sql = "SELECT * FROM payment 
  WHERE unit_id = '$unit_id'";
	$result = mysqli_query($con,$sql)
 or die ("3.ไม่สามารถประมวลคำสั่งได้").mysqli_error($conn);
 $rs = mysqli_fetch_array($result);
 ?>

 <!DOCTYPE html>
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
      <form action="pay_proce.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
        <input name="id" type="hidden" id="id" value="<?php echo "$rs[id]"; ?>" />
        <input name="room_num" type="hidden" id="room_num" value="<?php echo "$rs[room_num]"; ?>" />
        <div class="container2">
          <h1>ชำระเงิน</h1>
          <hr>
          <table id="customers">
            <tr>
              <th>ธนาคาร</th>
              <th>เลขบัญชี</th>
            </tr>
            <tr>
              <tbody>
                <tr>
                  <td>ธนาคารออมสิน</td>
                  <td>020-2-90707-072</td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td>ธนากสิกรไทย</td>
                  <td>037-2-75312-9</td>
                </tr>
              </tbody>
          </table>
          <br><br>
          <label for="option"><b>ธนาคาร</b></label>
          <select id="bank" name="bank">
            <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
            <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
            <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
            <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
            <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
            <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
          </select>
          <input type="bank_number" placeholder="Enter Account Number " name="bank_number" id="bank_number" required>

          <div class="col-md-4">
            จำนวนที่โอน <br>
            <input type="number" name="sum" id="sum" any required min="0" 
            class="form-control" value="<?php echo"$rs[sum]"; ?>">
          </div>

          <label for="slip"><b>สลิป</b></label>
          <input type="file" name="slip" id="slip" required>
          <br><br><br>

          <button type="submit" class="registerbtn">ชำระเงิน</button>
          
        </div>
      </form>
    </div>
  </body>

  </html>
<?php
} else {
  echo "<script> alert('Pleasem Login'); window.location='formlogin.php';</script>";
  exit();
}
?>