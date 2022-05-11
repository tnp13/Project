<?php
include('connect.php');
session_start();
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
                include "header.php";
              ?>
    <form method="post" name="form1" id="form1">
                    <div class="container2">
    <h1>ที่อยู่หอพัก</h1>
    <hr>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.7799690384795!2d100.50070311532606!3d7.035127418954368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d29144c705bcf%3A0x8f4985c4a5ebbdbf!2sHatyai%20Technical%20College!5e0!3m2!1sen!2sth!4v1645672329887!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <br><br>
    <h3>ถนน กาญจนวนิช ซอย 7 ตำบล คอหงส์ อำเภอหาดใหญ่ สงขลา 90110</h3>
  </div>
</body>

</html>