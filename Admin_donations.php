<?php

@include 'config.php';

if(isset($_GET['delete'])){
  $payment_id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM payment WHERE payment_id = $payment_id ");
  header('location:Admin_Books.php');
};

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
    <link rel="stylesheet" href="css/admin_books_table.css">

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

  <h1>Donation list</h1>
  
  <?php

    $select = mysqli_query($conn, "SELECT * FROM payment WHERE payment_type = 'Donations'");

  ?>


  <div class="books-display">
  
    <table class="books-display-table">
      <thead>
        <tr>
          <th>user name</th>
          <th>Amount</th>
          <th>Message </th>
          <th>date</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <?php
        while($row = mysqli_fetch_assoc($select)){

      ?>

      <tr>
        <td><?php echo $row['user_name'];?></td>
        <td><?php echo $row['Amount'];?></td>
        <td><?php echo $row['message'];?></td>
        <td><?php echo $row['date'];?></td>
        <td>
          <a href="Admin_donations.php?delete=<?php echo $row['payment_id']; ?>" class="btn"> <i class="fas fa-trash"></i> remove </a>
        </td>
      </tr>
      
      <?php }; ?>
    </table>

  </div>
</div>
</body>