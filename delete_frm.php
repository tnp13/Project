<?php
session_start();
include "connect.php";
?>
<html>
<html lang="en">

<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ลบสมาชิก</title>
    <link rel="stylesheet" href="">
</head>

<body>

    <form action="delete.php" method="post" name="form1" id="form1">
        <input name="username" type="hidden" id="username" value="<?php echo $result['username']; ?>" />
        <div class="container2">
            <h1>ลบสมาชิก</h1>
            <hr>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" value="<?php echo $result['username']; ?>" readonly="readonly" name="username" id="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" value="<?php echo $result['password']; ?>" name="password" id="password" required>

            <label for="firstname"><b>Firstname</b></label>
            <input type="firstname" placeholder="Enter firstname" value="<?php echo $result['firstname']; ?>" name="firstname" id="firstname" required>

            <label for="lastname"><b>Lastname</b></label>
            <input type="lastname" placeholder="Enter Lastname" value="<?php echo $result['lastname']; ?>" name="lastname" id="lastname" required>
            <hr>

            <label for="address"><b>Address</b></label>
            <input type="address" placeholder="Enter Address" value="<?php echo $result['address']; ?>" name="address" id="address" required>
            <hr>

            <label for="email"><b>E-MAIL</b></label>
            <input type="email" placeholder="Enter E-MAIL" value="<?php echo $result['email']; ?>" name="email" id="email" required>
            <hr>

            <label for="tel"><b>Telephone</b></label>
            <input type="tel" placeholder="Enter Telephone" value="<?php echo $result['tel']; ?>" name="tel" id="tel" required>
            <hr>

            <label for="date_birth"><b>Date Of Birth</b></label>
            <input type="date" placeholder="Enter Date of birth" value="<?php echo $result['date_birth']; ?>" name="date_birth" id="date_birth" required>
            <hr>

            <button type="submit" name="submit " class="registerbtn">แก้ไข</button>
        </div>
    </form>
</body>
</html>