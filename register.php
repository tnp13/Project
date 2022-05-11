   <?php
    session_start();

    include "connect.php";

    $username =  $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $date_birth = $_POST['date_birth'];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($con, $sql);
    $total = mysqli_fetch_array($query);

    $sql1 = "INSERT INTO user(username,password,firstname,lastname,address,email,tel,date_birth,userlevel)
                        VALUE('$username','$password','$firstname','$lastname','$address','$email','$tel','$date_birth','m')";
    $query1 = mysqli_query($con, $sql1);

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
