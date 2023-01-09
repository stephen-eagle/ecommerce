<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
     <!-- BOOTSTRAP CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

 <link rel="stylesheet" href="../assets/bs5/bootstrap.min.css">
    <!-- css file -->
 <link rel="stylesheet" href="../assets/css/style.css">
    <!-- FONT OWESOME CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- navbar -->
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../assets/photos/logo3B.jpg" alt="" class="logo">
             <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                 <li class="nav-item">
                    <a href="#" class="nav-link">Welcome Guest</a>
                 </li>
                   </ul>
             </nav>
        </div>
    </nav>
    <!-- second child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
    <!-- third child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../assets/imgs/avatar1.jpg" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin</p>
            </div>
            <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
            <div class="button text-center">
                <button class="my-1"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Product</a></button>
                <button class="my-1"><a href="#" class="nav-link text-light bg-info my-1">View product</a></button>
                <button class="my-1"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">insert categories</a></button>
                <button class="my-1"><a href="#" class="nav-link text-light bg-info my-1">view categories</a></button> 
               <button class="my-1"><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">insert brands</a></button>
               <button class="my-1"><a href="#" class="nav-link text-light bg-info my-1">views brands</a></button>
               <button class="my-1"><a href="#" class="nav-link text-light bg-info my-1">all orders</a></button>
               <button class="my-1"><a href="#" class="nav-link text-light bg-info my-1">all payments</a></button>
               <button class="my-1"><a href="#" class="nav-link text-light bg-info my-1">list user</a></button>
               <button class="my-1"><a href="#" class="nav-link text-light bg-info my-1">logout</a></button>
               
            </div>
        </div>
    </div>
    <!-- fourth child -->
    <div class="container my-5">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
         if(isset($_GET['insert_brands'])){
            include('insert_brands.php');
        }


        ?>
    </div>

    <!-- Last child -->
<div class="bg-info p-3 text-center footer">
    <p>All rights reserved, Copyright &copy; Eagle Boy 2022.
    </p>
</div>
</div>

<!-- BOOTSRAP JAVASCRIPT -->
<!-- js5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>