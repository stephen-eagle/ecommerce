<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-COMMERCE WEBSITE</title>
    <!-- BOOTSTRAP CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

 <link rel="stylesheet" href="assets\bs5\bootstrap.min.css">
    <!-- css file -->
 <link rel="stylesheet" href="assets\css\style.css">
 <style>
  body {
    overflow-x: hidden;
}
 </style>
    <!-- FONT OWESOME CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- navbar -->
<div class="contaner-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./assets/photos/logo3b.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></i><sup><?php cart_items();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price: <?php total_cart_price();?>/-</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
         <input type="submit" value="search" class="btn btn-outline-light" name="search_data_value">
      </form>
    </div>
  </div>
</nav>

<!-- calling cart function -->
<?php
cart();
?>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
<!-- <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li> -->
        <?php
        if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'>Welcome Guest</a>
        </li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'>welcome ".$_SESSION['username']."</a>
        </li>";
        }
        if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users_area/user_login.php'>login</a>
        </li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users_area/user_logout.php'>logout</a>
        </li>";
        }
        ?>
</ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communication is at the heart of E-commerce and community</p>
</div>

<!-- fourth child -->
<div class="row">

      <!-- products -->
    <div class="col-md-10">
<div class="row px-2">
  <!-- fetching products -->
<?php
// calling function 
getproducts();
get_unique_categories();
  get_unique_brand();
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 

?>
</div> 
    </div>
    <!-- products ends here -->
         <!-- sidebar -->
    <div class="col-md-2 bg-secondary p-0 "> 
        <!-- delivery brands to be desplayed -->
    <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
        </li>
        <?php
        // calling function brands
        getbrands();
      
        ?>
         
     </ul>
     <!-- categories to be displayed -->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
        </li>
         <?php
        getcategories();
        
        ?>
     </ul>
    <!-- sidebar ends here -->
</div>
</div>

<!-- Last child -->
<?php
include('includes/footer.php');
?>
</div>


<!-- BOOTSRAP JAVASCRIPT -->
<!-- js5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>