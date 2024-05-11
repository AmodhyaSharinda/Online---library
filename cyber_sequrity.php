<?php

@include 'config.php';

if(isset($_POST['borrow_book']))
{
    /*keep track of user*/
    session_start();

    if(!(isset($_SESSION['user_name']) || isset($_COOKIE['user_name']) || isset($_COOKIE['admin_name']))){
    header('location:login_form.php');
    }

    $book_name = $_POST['Book_name'];
    $book_image = $_POST['Book_img'];
    $book_qty = 1;
    $due_date = date('y-m-d', strtotime('+14 day'));

    $borrow_book = mysqli_query($conn, "SELECT * FROM borrow_book WHERE Book_name = '$book_name'");

    if(mysqli_num_rows($borrow_book) > 0)
    {
        $message[] = 'Book already borrowed';
    }else{
        $insert_book = mysqli_query($conn, "INSERT INTO borrow_book (Book_name, quantity, image, due_date) VALUES ('$book_name', '$book_qty', '$book_image', '$due_date')");
        $message[] = 'Book borrowed successfully !!';
    }
}
else if(isset($_POST['reserve_book']))
{
    /*keep track of user*/
    session_start();

    if(!(isset($_SESSION['user_name']) || isset($_COOKIE['user_name']) || isset($_COOKIE['admin_name']))){
    header('location:login_form.php');
    }
    
    $book_name = $_POST['Book_name'];
    $book_image = $_POST['Book_img'];
    $book_qty = 1;
    $due_date = date('y-m-d', strtotime('+7 day'));

    $reserve_book = mysqli_query($conn, "SELECT * FROM reserve_book WHERE Book_name = '$book_name'");

    if(mysqli_num_rows($reserve_book) > 0)
    {
        $message[] = 'Book already reserved';
    }else{
        $insert_book = mysqli_query($conn, "INSERT INTO reserve_book (Book_name, quantity, image, due_date) VALUES ('$book_name', '$book_qty', '$book_image', '$due_date')");
        $message[] = 'Book reserved successfully !!';
    }
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
    <link rel="stylesheet" href="css/search.css">

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
    <section class="Books">
        <h1 class="heading">Cyber Sequrity Books</h1>

        <div class="box-container">

            <?php

                $select_books = mysqli_query($conn, "SELECT * FROM books Where category = 'Cyber-sequrity'");
                if(mysqli_num_rows($select_books) > 0){
                    while($fetch_books = mysqli_fetch_assoc($select_books)){
            ?>


            <form action="" method="post">
                <div class="box">
                    <img src="images/books/<?php echo $fetch_books['image']; ?>" alt="" height="250">
                    <h3><?php echo $fetch_books['book_name']; ?></h3>
                    <input type="hidden" name="Book_name" value="<?php echo $fetch_books['book_name']; ?>">
                    <input type="hidden" name="Book_qty" value="<?php echo $fetch_books['quantity']; ?>">
                    <input type="hidden" name="Book_img" value="<?php echo $fetch_books['image']; ?>">
                    <input type="submit" class="btn" value="borrow book" name="borrow_book">
                    <input type="submit" class="btn" value="reserve book" name="reserve_book">
                </div>
            </form>

            <?php
                    };
                };
            ?>
        </div>
    </section>
</div>
</body>