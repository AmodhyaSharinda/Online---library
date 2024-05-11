<?php

  @include 'config.php';

  if(isset($_POST['donation'])){

    $name = $_POST['name'];
    $Amount = $_POST['amount'];
    $Message = $_POST['message'];
    $pay_type = 'Donations';

    $insert = "INSERT INTO payment (user_name, payment_type, Amount, message) VALUES ('$name', '$pay_type', '$Amount','$Message')";
    $upload = mysqli_query($conn, $insert);

    header('location:payment_checkout.php');

  }

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
    <link rel="stylesheet" href="css/donations.css">

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

<br><br>

<div class="container">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <h3 class="title">Donation Form</h3>

        <div class="inputBox">
          <span>Full name:</span>
          <input type="text" name="name" required placeholder="john perera">
        </div>

        <div class="inputBox">
          <span>Email :</span>
          <input type="text" required placeholder="example@gmail.com">
        </div>

        <div class="inputBox">
          <span>Phone number:</span>
          <input type="number" required placeholder="+94 77 123 4567">
        </div>

        <div class="inputBox">
          <span>Donation Amount:</span>
          <input type="text" name="amount" required placeholder="$xxxxx">
        </div>

          <div class="inputBox">
            <span>Donation message:</span>
            <textarea name="message" required placeholder="Message" cols="30" rows="10"></textarea>
          </div>

      
    </div>
    <input type="submit" class="submit-btn" value="proceed to payment" name="donation">
  </form>
</div>