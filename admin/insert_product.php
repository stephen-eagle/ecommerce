<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';
    // accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    // accesing image tmp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    //checking empty condition
     if($product_title=='' or  $product_description==''or $product_keywords=='' or  $product_category=='' or $product_brands=='' or  $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo "<script> alert('please fill in all the fields')</script>";
        exit();
      }else
      {
        move_uploaded_file($temp_image1,"./product_images/ $product_image1");
        move_uploaded_file($temp_image2,"./product_images/ $product_image2");
        move_uploaded_file($temp_image3,"./product_images/ $product_image3");

        // insert query
        $insert_products="insert into `products`
        (product_title,product_description,product_keyword,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status)
         value(' $product_title','$product_description','$product_keywords',' $product_category',' $product_brands','$product_image1','$product_image2','$product_image3',' $product_price',NOW(),'$product_status')";
         $result_query=mysqli_query($con,$insert_products);
         if($result_query){
                 echo "<script> alert('product inserted successfully')</script>";
         }
        }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert product</title>
     <!-- BOOTSTRAP CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

 <link rel="stylesheet" href="../assets/bs5/bootstrap.min.css">
    <!-- css file -->
 <link rel="stylesheet" href="../assets/css/style.css">
    <!-- FONT OWESOME CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">product title</label>
            <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required>
        </div>
        <!-- product description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_description" class="form-label">product description</label>
            <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off" required>
        </div>
        <!-- product keyword -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label">product keywords</label>
            <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required>
        </div>
        <!-- select product category -->
        <div class="form-outline mb-4 w-50 m-auto">
             <label for="product_category" class="form-label">product category</label>
         <select name="product_category" id="" class="form-select">
            <option value="">Select a category</option>
             <?php
             $select_query="select * from `categories`";
             $result_query=mysqli_query($con,$select_query);
             while($row=mysqli_fetch_assoc($result_query)){
                $category_title=$row['category_title'];
                  $category_id=$row['category_id'];
                  echo "<option value=' $category_id'> $category_title</option> ";
             }
             ?>
         </select>
        </div>
        <!-- select product brand -->
        <div class="form-outline mb-4 w-50 m-auto">
             <label for="product_brands" class="form-label">product brand</label>
         <select name="product_brands" id="" class="form-select">
            <option value="">Select a brand</option>
              <?php
             $select_query="select * from `brands`";
             $result_query=mysqli_query($con,$select_query);
             while($row=mysqli_fetch_assoc($result_query)){
                $brand_title=$row['brand_title'];
                  $brand_id=$row['brand_id'];
                  echo "<option value=' $brand_id'> $brand_title</option> ";
             }
             ?>
         </select>
        </div> 
        <!-- image1 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label">product image1</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control" required>
        </div>
        <!-- image2 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label">product image2</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" required>
        </div>
        <!-- image3 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image3" class="form-label">product image3</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control"  required>
        </div>
        <!-- product price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">product price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
       <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert product">
       <div class="mt-4 pt-2">
        <a href="./index.php" class="text-info"> Back home</a>
    </div>
        </div>
      
        </form>
    </div>

</body>
</html>