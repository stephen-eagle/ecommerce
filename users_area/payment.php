<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
     <!-- BOOTSTRAP CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

 <link rel="stylesheet" href="..\assets\bs5\bootstrap.min.css">
    <!-- css file -->
 <link rel="stylesheet" href="..\assets\css\style.css">
 <style>
    img{
        width:50%;
        margin:auto;
        display:block;
    }
 </style>
</head>
<body>
    <!-- php code to access user id -->
    <?php
    $user_ip=getIPAddress();
    $get_user="select * from `user_table` where user_ip='$user_ip'";
    $result=mysqli_query($con,$get_user);
    $run_query=mysqli_fetch_assoc($result);
    ?>
  <div class="container">
    <h2 class="text-center text-info">payment options</h2>
<div class="row d-flex justify-content-center align-items-center my-5">
    <div class="col-md-6">
    <a href="https://www.paypal.com" target="_blank"><img src="../assets/photos/paypal.jpg" alt=""></a>
</div>
<div class="col-md-6">
    <a href="order.php?user_id=<?php echo $user_id ?>"><h2 class="text-center">pay offline</h2></a>
    <!-- <a href="order.php"><h2 class="text-center">pay offline</h2></a> -->
</div>
</div>
  </div>
  <?php
//   $user="select * from `user_table`";
//   echo $user;
  ?>
</body>
</html>