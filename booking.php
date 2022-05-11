<?php
include('connect.php');
session_start();
$sql = "SELECT * FROM room_information ORDER BY floor_level asc";
$query = mysqli_query($con,$sql);
// error_reporting(0);
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
        include('header1.php');
        ?>
        <tr>
            <th>หมายเลขห้อง :</th>
            <td>
                <select class="form-control" readonly required="required" name="room_num" id="room_num">
                    <?php
                    include('connect.php');
                    $sql1 = "SELECT DISTINCT floor_level FROM room_information ORDER BY floor_level";
                    $query = mysqli_query($con, $sql1);
                    while ($rs1 = mysqli_fetch_array($query)) {
                        echo "<option value=$rs1[floor_level]>$rs1[floor_level]</option>";
                    }
                    ?>
                </select>
                <br><br>
            </td>
        </tr>

        <tr>
            <th>หมายเลขห้อง :</th>
            <td>
                <select class="form-control" readonly required="required" name="room_num" id="room_num">
                    <?php
                    include('connect.php');
                    $sql1 = "SELECT * FROM room_information WHERE room_num";
                    $query = mysqli_query($con, $sql1);
                    while ($rs1 = mysqli_fetch_array($query)) {
                        echo "<option value=$rs1[floor_level]>$rs1[room_num]</option>";
                    }
                    ?>
                </select>
                <br><br>
            </td>
        </tr>
    </div>
</body>
</html>