 <?php
 
 include 'config.php';

 if (isset($_POST['submit'])){

    $Product_name = $_POST['Pname'];
    $Product_price = $_POST['Pprice'];
    $Product_location = $_POST['Ploc'];
    $Product_cat = $_POST['Pages'];

    $imagename = $_FILES['Pimage']['name'];
    $tmpName = $_FILES['Pimage']['tmp_name'];
    $uploc = 'Uploadimg/'.$imagename;
         
    $sql = "INSERT INTO `tableproduct`(`Pname`, `Pprice`, `Ploc`, `Pimage`, `Pcategory`) VALUES ('$Product_name','$Product_price','$Product_location','$imagename',' $Product_cat')";
        if (mysqli_query($conn,$sql)==true) {
            
           move_uploaded_file($tmpName,$uploc);
            echo 'Upload';

            # code...
        }else{
            echo 'Upload not';
        }

 }
 
 
 
 ?>
 
 <script>window.location.href = "../product/index.php";</script>
 