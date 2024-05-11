
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

     <!--Font awsome code-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link rel="stylesheet" href="css/payment_checkout.css">

    <!--styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/payment_checkout.css">

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
  <form action="">
    <div class="row">
      <div class="col">
        <h3 class="title">billing address</h3>

        <div class="inputBox">
          <span>Full name:</span>
          <input type="text" placeholder="john perera">
        </div>

        <div class="inputBox">
          <span>Email :</span>
          <input type="text" placeholder="example@gmail.com">
        </div>

        <div class="inputBox">
          <span>Address:</span>
          <input type="text" placeholder="number - road - city">
        </div>

        <div class="inputBox">
          <span>city:</span>
          <input type="text" placeholder="colombo">
        </div>

        <div class="flex">
          <div class="inputBox">
            <span>province:</span>
            <input type="text" placeholder="western">
          </div>

          <div class="inputBox">
            <span>zip code:</span>
            <input type="text" placeholder="123 456">
          </div>
        </div>
      </div>

      <div class="col">
        <h3 class="title">Payment</h3>

        <div class="inputBox">
          <span>cards accepted:</span>
          <img src="images/card_img.png" alt="">
        </div>

        <div class="inputBox">
          <span>Name on card :</span>
          <input type="text" placeholder="mr. john perera">
        </div>

        <div class="inputBox">
          <span>Credit card number:</span>
          <input type="text" placeholder="1111-2222-3333-4444">
        </div>

        <div class="inputBox">
          <span>expire month:</span>
          <input type="text" placeholder="january">
        </div>

        <div class="flex">
          <div class="inputBox">
            <span>expire year:</span>
            <input type="number" placeholder="2023">
          </div>

          <div class="inputBox">
            <span>cvv:</span>
            <input type="text" placeholder="1234">
          </div>
        </div>
      </div>

    </div>

    <a href="paymentPopUP.php"><button type="button" class="submit-btn">proceed to checkout</button></a> 
  </form>
</div>
    
</body>
</html>