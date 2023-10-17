<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'header.php' ?>
</head>
<body style="background-color:#e4e4e4;">
    <h1 class="text-center fw-bold text-success"><i class="fa-solid fa-cart-plus"></i>_My cart</h1>
    

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-borderd text-center m-3 p-2">
                <thead>
                  
                <th>NO</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quntity</th>
                <th>Total Price</th>
                <!-- <th>Update</th> -->
                <th>Delete</th>
                </thead>
                <tbody>
                    
                    


<?php
session_start(); 

$total = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if (is_numeric($value['productprice']) && is_numeric($value['productquntity'])) {
            $subtotal = $value['productprice'] * $value['productquntity'];
            $total += $subtotal;
            $i=$key+1;

            echo "
            <form action='Insertcart.php' method='POST'>
            <tr>
                <td> $i</td>           
                <td>{$value['productname']}</td>
                <td>{$value['productprice']}</td>
                <td>{$value['productquntity']}</td>
                <td><b><h5>$subtotal</b></td>
                <td> <button name='delete' class='btn btn-danger'>Delete</button></td>
                <td><input type='hidden' name='item' value='$value[productname]'></td>           
                
                </tr>
            </form>";
        }
    }
}

echo "<tr>
        <td colspan='4'><h3><b>Total Value =</b></td>
        <td class='text-danger ' ><h2><b>Rs: $total.00</b></td>
      </tr>";
// }else{
//     echo '';
// }

?>

                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html