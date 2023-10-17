<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    
</head>
<body>
    <?php
    session_start();
    $count=0;
if (isset($_SESSION['cart'])) {
$count=count($_SESSION['cart']);

    # code...
}

?>

<nav class="navbar bg-dark">
  <div class="container-fluid d-flex">
    <a class="navbar-brand fw-bold fs-4  text-info">E-STORE.COM</a>
   <a href="index.php" class="text-decoration-none text-warning pe-2"><i class="fa-solid fa-house"></i>_Home</a>
   <a href="Viewcart.php" class="text-decoration-none text-warning pe-2"><i class="fa-solid fa-cart-plus"></i>_Cart (<?php echo $count ?>)</a>
    <span class="text-decoration-none text-white">
        Hello__ 
        <?php
        if (isset($_SESSION['user'])) {
            echo $_SESSION['user'];
            echo "        
            <a href='../user/form/logout.php' class='text-decoration-none text-info pe-2'>Logout</a>
            ";
             }else{
                echo"
                 <a href='../user/form/userlogin.php' class='text-decoration-none text-info pe-2'>User_Login</a>
                ";

             };
        ?>
       
          
          <i class="fa-solid fa-user-secret"></i>|
        <a href="../admin/form/login.php" class="text-decoration-none text-info pe-2">__Admin_</a>
     </span>
</div>
</nav> 

<div class="bg-secondary">
    <div class=" ">
        <ul class="list-unstyled d-flex justify-content-center ">
            <a href="demostic.php" class="text-decoration-none fw-bold text-white fs-4 px-5 p-4">Demostic</a>
            <a href="vihicle.php" class="text-decoration-none fw-bold text-white fs-4 px-5 p-4">Vehicle</a>
            <a href="electronic.php" class="text-decoration-none fw-bold text-white fs-4 px-5 p-4">Electronic</a>
            <a href="others.php" class="text-decoration-none fw-bold text-white fs-4 px-5 p-4">Others</a>

        </ul> 

    </div>
</div>

</body>
</html> 