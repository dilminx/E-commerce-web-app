<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-secondary">
    
<div class="container mt-4 border border-primary col-md-6" style="background-color:#e8faa2;">
        <h2 class="text-dark text-center fw-bold m-2">ADMIN LOGIN...<i class="fa-solid fa-helicopter"></i></h2>
  
  
    <form action="login1.php" method="post" enctype="multipart/form-data">
  <div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label">User Name</label>
  <input type="name" name="username" class="form-control"  placeholder="Enter Your  Name">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">User Password</label>
  <input type="password" name="userpassword" class="form-control" placeholder="Enter Your Password">
  </div>

  
  
  
 <button name="submit" class="text-center tw-bold bg-danger form-control text-white fs-2 m-2" type="submit">LOGIN</button>

        </form>

    </div>



</body>
</html>