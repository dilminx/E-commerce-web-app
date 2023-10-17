<?php

$conn =mysqli_connect('localhost','root','','ecom');

$adminname = $_POST['username'];
$adminpassword = $_POST['userpassword'];
$result = mysqli_query($conn, "SELECT * FROM `admin` WHERE username='$adminname' AND userpassword='$adminpassword'");

session_start();

if (mysqli_num_rows($result)) {

    $_SESSION['admin'] =$adminname;
    
    echo"
    <script>
    alert('login successful');
    window.location.href='../mystore.php';
    </script>
    ";
    # code...
}else{
echo"
    <script>
    alert('login failed broo');
    window.location.href='../form/login.php';
    </script>

    ";
}


?>