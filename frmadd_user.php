<html>
<html lang="en">

<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="add_user.php" method="post" name="form1" id="form1">
        <div class="container2">
            <h1>เพิ่มสมาชิก</h1>
            <hr>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="firstname"><b>Firstname</b></label>
            <input type="firstname" placeholder="Enter firstname" name="firstname" id="firstname" required>

            <label for="lastname"><b>Lastname</b></label>
            <input type="lastname" placeholder="Enter Lastname" name="lastname" id="lastname" required>
            <hr>

            <label for="address"><b>Address</b></label>
            <input type="address" placeholder="Enter Address" name="address" id="address" required>
            <hr>

            <label for="email"><b>E-MAIL</b></label>
            <input type="email" placeholder="Enter E-MAIL" name="email" id="email" required>
            <hr>

            <label for="tel"><b>Telephone</b></label>
            <input type="tel" placeholder="Enter Telephone" name="tel" id="tel" required>
            <hr>

            <label for="userlevel"><b>Userlevel</b></label>
            <input type="userlevel" placeholder="Enter userlevel" name="userlevel" id="userlevel" required>
            <hr>

            <label for="date_birth"><b>Date Of Birth</b></label>
            <input type="date" placeholder="Enter Date of birth" name="date_birth" id="date_birth" required>
            <hr>

            <button type="submit" class="registerbtn">เพิ่มสมาชิก</button>
        </div>
    </form>
    </div>
    </div>
</body>

</html>