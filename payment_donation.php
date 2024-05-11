<?php

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>

    <!--Font awsome code-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/payment_Donation.css">

    <!--js-->
    <script src="js/Landing.js"></script>
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
    <div class="box-container">
        <div class="content">
            <h1>Fine Payment</h1>
            <div class="grid">
                <img src="images/finePayment.jpg" height="100px">
                <a href="fine_form.php">
                    <button class="btn"> Fine Payment </button>
                </a>
            </div>
        </div>
        <div class="content">
            <h1>Donations</h1>
            <div class="grid">
                <img src="images/donations.png" height="100px">
                <a href="donation_form.php">
                    <button class="btn"> Donations </button>
                </a>
            </div>
        </div>
    </div>
    
</div>
</body>