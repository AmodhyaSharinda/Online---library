<?php

@include 'config.php';

/*keep track of user*/
session_start();

if(!(isset($_SESSION['user_name']) || isset($_COOKIE['user_name']) || isset($_COOKIE['admin_name']))){
  header('location:login_form.php');
}

if(isset($_GET['return'])){
    $borrow_id = $_GET['return'];
    mysqli_query($conn, "DELETE FROM borrow_book WHERE borrow_id = $borrow_id ");
    header('location:My_books.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My books</title>

    <!--Font awsome code-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/my_book.css">

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

<br>
<!--borrowed books-->

<h1 class="heading">Borrowed books</h1>

<?php

    $select = mysqli_query($conn, "SELECT * FROM borrow_book WHERE user_name = '$_SESSION[user_name]' ");

?>

  <div class="books-display">

    <table class="books-display-table">
      <thead>
        <tr>
          <th>Book image</th>
          <th>Book name</th>
          <th>Book quantity</th>
          <th>Borrow date</th>
          <th>Due date</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <?php
        while($row = mysqli_fetch_assoc($select)){

      ?>

      <tr>
        <td><img src="images/books/<?php echo $row['image'];?>" height="100" alt=""></td>
        <td><?php echo $row['Book_name'];?></td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['borrow_date'];?></td>
        <td><?php echo $row['due_date'];?></td>
        <td>
          <a href="My_books.php?return=<?php echo $row['borrow_id']; ?>" class="btn"> <i class="fa-window-close"></i> return </a>
        </td>
      </tr>
      
      <?php }; ?>
    </table>

  </div>

  <br>

<!--Reserved books-->

  <h1 class="heading">Reserved books</h1>

<?php

    $select = mysqli_query($conn, "SELECT * FROM reserve_book WHERE user_name = '$_SESSION[user_name]' ");

?>

  <div class="books-display">

    <table class="books-display-table">
      <thead>
        <tr>
          <th>Book image</th>
          <th>Book name</th>
          <th>Book quantity</th>
          <th>reserve date</th>
          <th>Due date</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <?php
        while($row = mysqli_fetch_assoc($select)){

      ?>

      <tr>
        <td><img src="images/books/<?php echo $row['image'];?>" height="100" alt=""></td>
        <td><?php echo $row['Book_name'];?></td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['reserve_date'];?></td>
        <td><?php echo $row['due_date'];?></td>
        <td>
          <a href="My_books.php?return=<?php echo $row['reserve_id']; ?>" class="btn"> <i class="fa-window-close"></i> return </a>
        </td>
      </tr>
      
      <?php }; ?>
    </table>

  </div>

  <br>
<!--Overdue books-->

<h1 class="heading">Overdue books</h1>

<div class="books-display">

    <table class="books-display-table">
      <thead>
        <tr>
          <th>Book image</th>
          <th>Book name</th>
          <th>Book quantity</th>
          <th>reserve date</th>
          <th>Due date</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

    </table>

<br>


</body>