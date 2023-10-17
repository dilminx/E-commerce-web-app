<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Upload </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background-color:pink ;">
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white"><b>E-STORE.COM <i class="fa-solid fa-truck-fast"></i></b></a>
   
   <a href="../../user/form/userlogin.php" class="text-decoration-none text-white" >    <i class="fa-solid fa-right-from-bracket"></i>
_LoginUser |&nbsp;</a>

<a class="text-decoration-none text-white" href="../../user/">Try user view</a>
   
  </div>
  
</nav>
<div class="text-center bg-secondary m-1 p-3 text-white fw-bold fs-5"> <a href="../mystore.php" class="text-decoration-none text-white">Dash Board</a></div>
    <div class="container mt-4 border border-primary col-md-6" style="background-color:#81d131;">
        <div class="row">
        <h2 class="text-dark text-center fw-bold m-2">Product Details...</h2>
  
  
    <form action="../product/insert.php" method="post" enctype="multipart/form-data">

   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Name</label>
  <input type="name" name="Pname" class="form-control"  placeholder="Enter Your Product Name">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Price</label>
  <input type="name" name="Pprice" class="form-control" placeholder="Enter Your Product Price">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Location</label>
  <input type="name" name="Ploc" class="form-control"  placeholder="Enter Your Product Location">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Add Image</label>
  <input type="file" name="Pimage" class="form-control">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Select Category</label>
  <select class="form-select" aria-label="Default select example" name="Pages">
  <option selected>Open this select menu</option>
  <option value="Domestic">Domestic</option>
  <option value="Vihicle">Vihicle</option>
  <option value="Electronic">Electronic</option>
  <option value="Others">Others</option>
</select>
  
  </div>
  
 <button name="submit" class="text-center tw-bold bg-danger form-control text-white fs-2 m-2" type="submit">UPLOAD</button>
 

        </form>
        </div>
    </div>


<hr><hr>
<div class="container">
<div class="row">
<table class=" table table-bordered border border-danger container mt-6 col-md-6" >
    <thead class="table-secondary text-center">
        <!-- <th>Id</th> -->
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Location</th>
        <th>Image</th>
        <th>Category</th>
        <th>Delete</th>
    </thead>
    <tbody class="text-center">
    <?php
include 'config.php';
$Record = mysqli_query($conn, "SELECT * FROM `tableproduct`");

while ($row = mysqli_fetch_array($Record)) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['Pname']}</td>";
    echo "<td>{$row['Pprice']}</td>";
    echo "<td>{$row['Ploc']}</td>";
    echo "<td><img src='Uploadimg/{$row['Pimage']}' height='120px' width='200px'></td>";
    echo "<td>{$row['Pcategory']}</td>";
    echo "<td><a href='delete.php?ID={$row['id']}' class='btn btn-danger'>Delete</a></td>";
    echo "</tr>";
}
?>
    </tbody>

</table>

</div>
</div>
</body>
</html>