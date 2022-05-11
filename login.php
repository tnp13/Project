<?php
session_start();
?>

<html>
<html lang="en">

<head>
  <meta charset="UTF8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php if (isset($_SESSION['success'])) : ?>
    <div class="success">
      <?php
      echo $_SESSION['success'];
      ?>
    </div>
  <?php endif; ?>
  <?php if (isset($_SESSION['error'])) : ?>
    <div class="error">
      <?php
      echo $_SESSION['error'];
      ?>
    </div>
  <?php endif; ?>
  <div class="container bg">
    <div class="navBar">
      <div class="logo">
        <a href="#">
          <i class="fas fa-suitcase-rolling"></i>
        </a>
      </div>
      <ul>
        <li><a href="Index.php">HOME</a></li>
        <li><a href="pay.php">PAY</a></li>
        <li><a href="overdue.php">OVERDUE</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
    <form action="login2.php" method="post">
      <div class="container">
        <label for="username">ชื่อผู้ใช้</label>
        <input type="text" name="username" placeholder="Username" required>
        <br>
        <label for="password">รหัสผ่าน</label>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit" class="loginbtn">Login</button>
        <a href="formregis.php">Register here.</a>
      </div>
    </form>
  </div>
  </div>
</body>

</html>