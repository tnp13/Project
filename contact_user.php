<?php
session_start();
include('connect.php');
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
    <form method="post" name="form1" id="form1">
                    <div class="container2">
    <h1>CONTACT</h1>
    <hr>
    <h3>เบอร์ติดต่อเจ้าของหอพัก : 0958088533<br><br></h3>
    <h3>FACEBOOK :</h3><a href="https://www.facebook.com/profile.php?id=100007182362178">คลิกที่นี่</a><br><br>
    <h3>INSTAGRAM :</h3><a href="https://www.instagram.com/god_thapanat/">คลิกที่นี่</a>

  </div>
</form>
  </div>
</body>

</html>