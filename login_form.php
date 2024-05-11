<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM user_db WHERE email = '$email' && password  = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

        $_SESSION['admin_name'] = $row['name'];
        setcookie('admin_name', $row['name'], time()+60*60*24);
        header('location:AdminPage.php');

      }elseif($row['user_type'] == 'user'){

        $_SESSION['user_name'] = $row['name'];
        setcookie('user_name', $row['name'], time()+60*60*24);
        header('location:User_acount.php');

      }else{
        $error[] = 'incorrect email or password';
      }
    }
    else
    {
      $error[] = 'incorrect email or password';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>

    <!--Font awsome code-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/register.css">
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

  <div class="form-container">

  <form action="" method="post">
    <h3>Login now</h3>

    <?php
    if(isset($error)){
        foreach($error as $error){
            echo "<span class='error-msg'>".$error."</span>";
        };
    };
    ?>

    <input type="email" name="email" required placeholder="enter your email">
    <input type="password" name="password" required placeholder="enter your password">
    <input type="submit" name="submit" value="Login now" class="form-btn">
    <p>Don't have an account? <a href="register.php">Register now</a></p>
  </form>
 </div>

</body>
</html>