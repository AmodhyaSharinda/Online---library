<?php

@include 'config.php';

if(isset($_POST['submit'])){
  $name = $_POST['Uname'];
  $Email = $_POST['email'];
  $Subject = $_POST['subject'];
  $Msg = $_POST['message'];

  $insert = "INSERT INTO reviews (user_name, email, subject, message) VALUES('$name', '$Email', '$Subject', '$Msg')";
  mysqli_query($conn, $insert);
  $message[] = 'your email has recieved !!';
  header('location:contact.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!--Font awsome code-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">

    
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

<div class="contact">
    <div class="container">
      <form action="" method="post">
          <h1>Contact US</h1>
          <p>feel free to contact us and we will get back to you as soon as we can</p>

          <?php

          if(isset($message))
          {
            foreach($message as $message)
            {
              echo '<span class="message">'.$message.'</span>';
            }
          }

          ?>
          
        <br>  
              <input type="text" name="Uname" id="name" required placeholder="name">
              <input type="email" name="email" id="email" required placeholder="email">
              <input type="text" name="subject" id="subject" required placeholder="Subject">
              <textarea name="message" required placeholder="message" cols="30" rows="10"></textarea>
              <input type="submit" name="submit" value="Send" class="form-btn">
      </form>
    </div>
</div>


</body>

