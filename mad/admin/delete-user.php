<?php 
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','mydatabase1');
$sql = "delete from users where id=$id ";
mysqli_query($conn,$sql);
?>