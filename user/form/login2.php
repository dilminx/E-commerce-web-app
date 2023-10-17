<?php


$conn =mysqli_connect('localhost','root','','ecom');


$name = $_POST['name'];
$password = $_POST['password'];

$sql = mysqli_query($conn,"SELECT * FROM `users` WHERE name = '$name' AND password = '$password'");

session_start();

if (mysqli_num_rows($sql)) {

    $_SESSION['user'] = $name;

    echo"
    <script>
    alert('Login Successfully');
    window.location.href='../index.php';
    </script>
    ";
    
}else{
    echo"
    <script>
    alert('Login faild...');
    window.location.href='userlogin.php';
    </script>
    ";

}

?>