<?php

@include 'config.php';

if(isset($_GET['delete'])){
  $user_id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM user_db WHERE user_id = $user_id ");
  header('location:Admin_Users.php');
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
    <<link rel="stylesheet" href="css/admin_books_table.css">

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

  <h1>Admin list</h1>
  
  <?php

    $select = mysqli_query($conn, "SELECT * FROM user_db WHERE user_type = 'user' ");

  ?>


  <div class="books-display">
  
    <table class="books-display-table">
      <thead>
        <tr>
          <th>User name</th>
          <th>Email</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <?php
        while($row = mysqli_fetch_assoc($select)){

      ?>

      <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td>
          <a href="Admin_Users.php?delete=<?php echo $row['user_id']; ?>" class="btn"> <i class="fas fa-trash"></i> remove </a>
        </td>
      </tr>
      
      <?php }; ?>
    </table>

  </div>
</div>
</body>