<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <?php
include 'mystore.php';

    $conn =mysqli_connect('localhost','root','','ecom');
    $sql=mysqli_query($conn,"SELECT * FROM `users`");
    
    $totalcount = mysqli_num_rows($sql);

    ?>
<div class="container">
    <div class="row">
        <div class="col-md-10">

       
   
    <table class="table table-bordered border-info table-secondary m-3 fs-4">
        <thead class="text-center">
            <th>User Name</th>
            <th>User Email</th>
            <th>User T.P</th>
            <th>Remove User</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($sql)){
                echo "
                <tr class='text-center ' >
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[tp]</td>
            <td><a href='deleteuser.php?ID=$row[id]' class='btn btn-danger'>Delete</a></td>
        </tr>
           ";
         }
            ?>
        
        

        </tbody>
       
    </table>
    </div>

    <div class="col-md-2 text-center mt-5 ml-2">
        <h3 class="bg-danger text-white">total Users:</h3>
        <h2 class="bg-success text-white"><?php echo"$totalcount";?></h2>
    </div>
    </div> 
</div>
</body>
</html>