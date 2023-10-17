<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
include 'header.php';
?>
<body class="mb-4">
<h1 class="text-center bg-warning fw-bold ">Home</h1>
<div class="container-fluid">
    <div class="col-md-12">
    <div class="row">

     
    <?php
    include 'config.php';
    $Record = mysqli_query($conn, "SELECT * FROM `tableproduct`");
    
    if (!$Record) {
        die("Query failed: " . mysqli_error($conn));
    }
    
    while ($row = mysqli_fetch_array($Record)) {
    $imagePath = '../admin/product/Uploadimg/'.$row['Pimage'];
    

        echo "
        <div class='col-md-6 col-lg-4 m-auto'>
        
            <div class='card' style='width: 18rem;'>
            <form action='Insertcart.php' method='POST'>
                <img src='$imagePath' alt='Card image cap' style='height:250px' class='card-img-top rounded float-left'>
                <div class='card-body text-center'>
                    <h5 class='card-title'>{$row['Pname']}</h5>
                    <h5 class='card-title'>{$row['Ploc']}</h5>
                    <h2 class='card-text'>Rs.{$row['Pprice']}.00</h2>
                    <input type='hidden' name='Pname' value='$row[Pname]'>
                    <input type='hidden' name='Pprice'value='$row[Pprice]'>
                    <input type='number'  name='Pqun' placeholder='Quntity' min='0' ><br><br>
                    <input type='submit' name='addcart' class='btn btn-danger text-white w-100' value='add to cart'>
                    </div>
                    </div>
                    </form>
        </div>
        ";
    }
    ?>

</div>
    </div>
</div>
</body>
<footer>
    <?php include'footer.php';?>

</footer>
</html>