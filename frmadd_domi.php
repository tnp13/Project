<html>
<html lang="en">

<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มห้องในหอพัก</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="test1111.php" method="post" name="form1" id="form1">
        <div class="container2">
            <h1>เพิ่มห้องพัก</h1>
            <hr>

            <label for="room_num"><b>หมายเลขห้อง</b></label>
            <input type="text" placeholder="กรุณากรอกหมายเลขห้อง" name="room_num" id="room_num" required>

            <label for="floor_level"><b>ชั้นที่อยู่</b></label>
            <input type="text" placeholder="กรุณากรอกชั้นที่อยู่" name="floor_level" id="floor_level" required>

            <label for="room_type"><b>ชนิดห้องพัก</b></label>
            <input type="text" placeholder="กรุณากรอกชนิดของห้องพัก" name="room_type" id="room_type" required>

            <label for="room_status"><b>สถานะของห้องพัก</b></label>
            <input type="text" placeholder="กรุณากรอกสถานะของห้องพัก" name="room_status" id="room_status" required>
            <hr>

            <label for="room_price"><b>ราคาห้อง</b></label>
            <input type="text" placeholder="กรุณากรอกราคาห้อง" name="room_price" id="room_price" required>
            <hr>

            <label for="room_note"><b>หมายเหตุ</b></label>
            <input type="text" placeholder="หมายเหตุ" name="room_note" id="room_note">
            <hr>

            <button type="submit" class="registerbtn">เพิ่มห้องพัก</button>
        </div>
    </form>
    </div>
    </div>
</body>

</html>