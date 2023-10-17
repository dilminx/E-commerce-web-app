<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./style.css">
</head>
<?php

session_start();
if(!$_SESSION['admin'])
{
  header("location:../admin/form/login.php");
}

?>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><b>E-STORE.COM <i class="fa-solid fa-truck-fast"></i></b></a>
    <form class="d-flex">
    Hello_<i class="fa-solid fa-user-tie"></i>_<?php echo $_SESSION['admin'] ?>|&nbsp;&nbsp;
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="../admin/form/logout.php" class="text-decoration-none text-white" >_Logout |&nbsp;</a>
    <i class="fa-solid fa-users-rectangle"></i>
    <a href="../user/index.php" class="text-decoration-none text-white" >&nbsp;_UserPanel</a>
    </form>
  </div>
</nav>
<div class="text-center bg-success m-1 p-3 text-white fw-bold fs-5"> <a href="mystore.php" class="text-decoration-none text-white">Dash Board</a></div>


  <div class="container-fluid" >
   
      <div class=" text-center bg-danger  p-3" >
      <i class="fa-solid fa-plus"></i>
      <a href="../admin/product/index.php" class="text-decoration-none fs-5 fw-bold  text-white">Add Post &nbsp;</a>
      <a href="users.php" class="text-decoration-none fs-5 fw-bold  text-white">&nbsp;View Users</a>
        <i class="fa-solid fa-people-group"></i>
      </div>
      
</div>



</body>
</html>
