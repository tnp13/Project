<?php
  include ("connect.php");
	session_start();
	if(!$_SESSION['userid']) {
    header("Location: index_user.php");
}else{
}
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
    <div class="content">
      <div class="meow" style="width:50%;">
        <div class="tnx">
          <h2><i class="fas fa-map-marker-alt"></i>Apartment</h2>
        </div>
        <div class="txt">
          <h1>Mid</h1>
          <h1>Night</h1>
        </div>
      </div>
      <div class="card" style="width:50%;">
        <a href="freewifi.php" target="_blank">
          <div class="box1">
            <h2>Free-WIFI</h2>
          </div>
        </a>
        <a href="parking.php" target="_blank">
          <div class="box2">
            <h2>Parking</h2>
          </div>
        </a>
        <a href="high_secure.php" target="_blank">
          <div class="box3">
            <h2>High Security</h2>
          </div>
        </a>
        <a href="facili.php" target="_blank">
          <div class="box4">
            <h2>Facilitate</h2>
          </div>
        </a>
      </div>
    </div>
  </div>
</body>

</html>