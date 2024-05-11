<?php

@include 'config.php';

    $book_id = $_GET['edit'];

  if(isset($_POST['update_book'])){

    $book_name = $_POST['book_name'];
    $book_qty = $_POST['book_qty'];
    $category_type = $_POST['category_type'];
    $book_image = $_FILES['book_image']['name'];
    $book_image_tmp_name = $_FILES['book_image']['tmp_name'];
    $book_image_folder = 'images/books/'.$book_image;
 
    if(empty($book_name) || empty($book_qty) || empty($category_type) || empty($book_image)){
       $message[] = 'please fill out all';
    }else{
      $update_data = "UPDATE books SET book_name='$book_name', quantity='$book_qty', category='$category_type', image='$book_image' WHERE book_id = $book_id";
      $upload = mysqli_query($conn, $update_data);

      if($upload)
      {
        move_uploaded_file($book_image_tmp_name, $book_image_folder);
        header('location:Admin_Books.php');
      }else{
        $message[] = 'could not add the product';
      }
    }
 
 };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update</title>

     <!--Font awsome code-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin_Books.css">
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

<?php

if(isset($message))
{
  foreach($message as $message)
  {
    echo '<span class="message">'.$message.'</span>';
  }
}

?>

<div class="container">
  <div class="admin-book-form-container centered">

    <?php

    $select = mysqli_query($conn, "SELECT * FROM books WHERE book_id = $book_id");
    while($row = mysqli_fetch_assoc($select)){

    ?>


    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <h3>Update the Book</h3>
      <input type="text" placeholder="enter book name" value="<?php $row['book_name']; ?>" name="book_name" class="box">
      <input type="number" placeholder="enter book quantity" value="<?php $row['quantity']; ?>" name="book_qty" class="box">
      <select name="category_type" value="<?php $row['category']; ?>" class="box">
        <option value="newtwork">Network</option>
        <option value="Software">Software</option>
        <option value="Cyber-sequrity">Cyber sequrity</option>
        <option value="Data-science">Data science</option>
        <option value="Computer-science">Computer science</option>
        <option value="Programing">Programing </option>
        <option value="Past-papers">Past papers </option>
      </select>
      <input type="file" accept="image/png, image/jpeg, image/jpg" name="book_image" class="box">
      <input type="submit" class="button" name="update_book" value="update book">
      <a href="Admin_Books.php" class="button">go back</a>
    </form>

    <?Php }; ?>

  </div>
</div>    
</body>
</html>