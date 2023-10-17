<?php
// echo '$ID';
$ID = $_GET['ID'];
$conn =mysqli_connect('localhost','root','','ecom');
mysqli_query($conn,"DELETE FROM `users` WHERE `id`=$ID ");
header('location:users.php');

?>