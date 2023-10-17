<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- ... (rest of your head section) ... -->
</head>
<body class="bg-secondary">
    <div class="container mt-4 border border-primary col-md-6" style="background-color:#bedde0;">
        <h2 class="text-dark text-center fw-bold m-2">SIGNUP HERE...<i class="fa-solid fa-helicopter"></i></h2>
  
        <form action="../form/insert.php" method="post">
            <div class="mb-3"> 
                <label for="exampleFormControlInput1" class="form-label">User Name</label>
                <input type="name" name="name" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="mb-3"> 
                <label for="exampleFormControlInput1" class="form-label">User Email</label>
                <input type="name" name="email" class="form-control" placeholder="Enter Your Email">
            </div>
            <div class="mb-3"> 
                <label for="exampleFormControlInput1" class="form-label">User T.P</label>
                <input type="name" name="tp" class="form-control" placeholder="Enter Your TP Number">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
            </div>
            
            <button name="sign" class="text-center tw-bold bg-danger form-control text-white fs-2 m-2" type="submit">SIGNIN</button>
        </form>
        <h5 class="text-center">Have An Account..?<a href="userlogin.php">Login Here..</a>..<i class="fa-solid fa-hand-point-left"></i></h5>
    </div>
</body>
</html>