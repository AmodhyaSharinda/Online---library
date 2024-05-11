
<?php

@include 'config.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Page</title>

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
<br>
<br>
<section class="dashboard">
  <h1 class="heading">Categories</h1>

  <div class="box-container">
    <div class="box">
      <?php
        $select_DS_Books = mysqli_query($conn, "SELECT * FROM books WHERE category = 'Data-science' ") or die('query failed');
        $number_of_DS_Books = mysqli_num_rows($select_DS_Books);
      ?>
      <img src="images/data science.jpg" alt="">
      <h3><?php echo $number_of_DS_Books; ?></h3>
      <p>Data sciece Books</p>
      <a href="data_science.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_Cyber_Books = mysqli_query($conn, "SELECT * FROM books WHERE category = 'Cyber-sequrity' ") or die('query failed');
        $number_of_Cyber_Books = mysqli_num_rows($select_Cyber_Books);
      ?>
      <img src="images/cyber sequrity.jpg" alt="">
      <h3><?php echo $number_of_Cyber_Books; ?></h3>
      <p>Cyber Sequrity Books</p>
      <a href="cyber_sequrity.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_networking_books = mysqli_query($conn, "SELECT * FROM books WHERE category = 'network'") or die('query failed');
        $number_of_networking_books = mysqli_num_rows($select_networking_books);
      ?>
      <img src="images/networking.jpg" alt="">
      <h3><?php echo $number_of_networking_books; ?></h3>
      <p>Networking Books</p>
      <a href="networking.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_computer_science_books = mysqli_query($conn, "SELECT * FROM books WHERE category = 'Computer-science' ") or die('query failed');
        $number_of_computer_science_books = mysqli_num_rows($select_computer_science_books);
      ?>
      <img src="images/comp science.jpg" alt="">
      <h3><?php echo $number_of_computer_science_books; ?></h3>
      <p>Computer Science books</p>
      <a href="computer_Science.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_programing_books = mysqli_query($conn, "SELECT * FROM books WHERE category = 'Programing'") or die('query failed');
        $number_of_programing_books = mysqli_num_rows($select_programing_books);
      ?>
      <img src="images/programming.jpg" alt="">
      <h3><?php echo $number_of_programing_books; ?></h3>
      <p>programing books</p>
      <a href="Programming.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_software_books = mysqli_query($conn, "SELECT * FROM books WHERE category = 'software'") or die('query failed');
        $number_of_software_books = mysqli_num_rows($select_software_books);
      ?>
      <img src="images/soft eng.jpg" alt="">
      <h3><?php echo $number_of_software_books; ?></h3>
      <p>Software Books</p>
      <a href="software_eng.php" class="btn">view</a>
    </div>

    <div class="box">
      <?php
        $select_Past_papers = mysqli_query($conn, "SELECT * FROM books WHERE category = 'Past-papers'") or die('query failed');
        $number_of_Past_papers = mysqli_num_rows($select_Past_papers);
      ?>
      <img src="images/papers.jpg" alt="">
      <h3><?php echo $number_of_Past_papers; ?></h3>
      <p>Past Papres</p>
      <a href="Past_paper.php" class="btn">view</a>
    </div>
  </div>
</section>