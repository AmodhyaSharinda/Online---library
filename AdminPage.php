<?php

@include 'config.php';

session_start();

if(!(isset($_SESSION['user_name']) || (isset($_COOKIE['admin_name'])))){
  header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

     <!--Font awsome code-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/adminDashboard.css">

</head>
<body>
<div class="wrapper">
    <div class="multi_color_border"></div>
    <div class="top_nav">
        <div class="left">
          <div class="logo"><p><span>Knowledge</span>Hive</p></div>
          <div class="search_bar">
              <input type="text" placeholder="Search">
          </div>
      </div> 
      <div class="right">
      <ul>
          <li><a href="#">Whats Next</a></li>
          <li><a href="login_form.php">LogIn</a></li>
          <li><a href="register.php">SignUp</a></li>
          <li><a href="logout.php">logout</a></li>
          <li><a href="AccountPage.php"><img src="images/Account.png" alt=""></a></li>
        </ul>
      </div>
    </div>
    <div class="bottom_nav">
      <ul>
        <li><a href="LandingPage.php">Home</a></li>
        <li><a href="Search.php">Search</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="My_books.php">MY Books</a></li>
        <li><a href="payment_donation.php">Payment/Donation</a></li>
        <li><a href="AboutUS.php">About US</a></li>
      </ul>
  </div>
</div>

<div class="container">

    <div class="content">
        <h3>Hi, <span>Admin</span></h3><br>
        <h1>Welcome</h1><span><?php echo $_SESSION['admin_name'] ?></span><br>
        <p>this is an admin page</p><br>
        <a href="login_form.php" class="btn">login</a>
        <a href="Register_form.php" class="btn">register</a>
        <a href="Logout.php" class="btn">logout</a>


    </div>
</div>

<!--Admin dashboard -->

<section class="dashboard">
  <h1 class="heading">Dashboard</h1>

  <div class="box-container">
    <div class="box">
      <?php
        $select_Books = mysqli_query($conn, "SELECT * FROM books") or die('query failed');
        $number_of_books = mysqli_num_rows($select_Books);
      ?>
      <img src="images/books.jpg" alt="">
      <h3><?php echo $number_of_books; ?></h3>
      <p>Books</p>
      <a href="Admin_Books.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_User = mysqli_query($conn, "SELECT * FROM user_db WHERE user_type = 'user' ") or die('query failed');
        $number_of_users = mysqli_num_rows($select_User);
      ?>
      <img src="images/users.jpg" alt="">
      <h3><?php echo $number_of_users; ?></h3>
      <p>Users</p>
      <a href="Admin_Users.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_Admin = mysqli_query($conn, "SELECT * FROM user_db WHERE user_type = 'admin'") or die('query failed');
        $number_of_admins = mysqli_num_rows($select_Admin);
      ?>
      <img src="images/admin.jpg" alt="">
      <h3><?php echo $number_of_admins; ?></h3>
      <p>Admins</p>
      <a href="Admin_admins.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_Borrowed_books = mysqli_query($conn, "SELECT * FROM borrow_book ") or die('query failed');
        $number_of_borrowed_books = mysqli_num_rows($select_Borrowed_books);
      ?>
      <img src="images/borowe.jpg" alt="">
      <h3><?php echo $number_of_borrowed_books; ?></h3>
      <p>Borrowed books</p>
      <a href="Admin_BorrowBooks.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_Reserved_books = mysqli_query($conn, "SELECT * FROM reserve_book ") or die('query failed');
        $number_of_reserved_books = mysqli_num_rows($select_Reserved_books);
      ?>
      <img src="images/reserve.jpg" alt="">
      <h3><?php echo $number_of_reserved_books; ?></h3>
      <p>Reserved books</p>
      <a href="Admin_ReserveBooks.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_donations = mysqli_query($conn, "SELECT * FROM payment WHERE payment_type = 'Donations' ") or die('query failed');
        $number_of_donations = mysqli_num_rows($select_donations);
      ?>
      <img src="images/don.jpg" alt="">
      <h3><?php echo $number_of_donations; ?></h3>
      <p>Donations</p>
      <a href="Admin_donations.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_fine = mysqli_query($conn, "SELECT * FROM payment WHERE payment_type = 'fine' ") or die('query failed');
        $number_of_fine = mysqli_num_rows($select_fine);
      ?>
      <img src="images/finepay.png" alt="">
      <h3><?php echo $number_of_fine; ?></h3>
      <p>fine</p>
      <a href="Admin_fine.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_msg = mysqli_query($conn, "SELECT * FROM reviews ") or die('query failed');
        $number_of_messages = mysqli_num_rows($select_msg);
      ?>
      <img src="images/review.png" alt="">
      <h3><?php echo $number_of_messages; ?></h3>
      <p>Reviews</p>
      <a href="Admin_review.php" class="btn">view</a>
    </div>
  </div>
</section>

    
</body>
</html>