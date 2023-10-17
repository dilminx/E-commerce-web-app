<?php
// include 'config.php';
$conn = mysqli_connect('localhost', 'root', '', 'ecom');

if (isset($_POST['sign'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Tp = $_POST['tp']; 
    $Password = $_POST['password'];
   
                    //check duplcate username and email
   
    $dup_name = mysqli_query($conn, "SELECT * FROM `users` WHERE `name` = '$Name'");
    $dup_email = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$Email'");


    if (mysqli_num_rows($dup_name)) {
        echo"
        <script>
        alert('This User Name is already Taken');
        window.location.href='register.php';
        </script>
        ";
       
    }
    if (mysqli_num_rows($dup_email)) {
        echo"
        <script>
        alert('This User Email is already Taken');
        window.location.href='register.php';
        </script>
        ";
       
    }else{
        $sql = mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `tp`, `password`) VALUES ('$Name','$Email','$Tp','$Password')");

        echo"
        <script>
        alert('Register Successfully');
        window.location.href='userlogin.php';
        </script>
        ";
    }
     
}

?>
