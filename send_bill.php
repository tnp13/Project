    <?php

    session_start();

    include "connect.php";

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($con, $sql);
    $total = mysqli_fetch_array($query);

    $sql = "INSERT INTO user(username,password,firstname,lastname,address,email,tel,date_birth,userlevel)
                        VALUE('$username','$password','$firstname','$lastname','$address','$email','$tel','$date_birth','m')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);

    if ($total) {
        echo "<script type='text/javascript'>";
        echo "alert('สมัครสมาชิกเรียบร้อย');";
        echo "window.location = 'index_user.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('เกิดข้อผิดพลาดในการสมัคร');";
        echo "window.location = 'index_user.php'; ";
        echo "</script>";
    }

    ?>


