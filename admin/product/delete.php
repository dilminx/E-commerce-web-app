<?php
// echo '$ID';
$ID = $_GET['ID'];
$conn =mysqli_connect('localhost','root','','ecom');
mysqli_query($conn,"DELETE FROM `tableproduct` WHERE `id`=$ID ");
header('location:index.php');

?>