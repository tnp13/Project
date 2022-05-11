<div class="navBar">
      <div class="dropdown">
        <button class="dropbtn"><?php echo $_SESSION['user']; ?></button>
        <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="logout.php">Log Out</a>
        </div>
      </div>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="pay_home.php">PAY</a></li>
        <li><a href="overdue_home.php">OVERDUE</a></li>
        <li><a href="bill_home.php">BILL</a></li>
        <li><a href="contact_user.php">CONTACT</a></li>
      </ul>
    </div>