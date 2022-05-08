<?php

session_start();


$con = mysqli_connect('localhost','root','','task-manager','3307');

mysqli_select_db($con, 'task-manager');

$name = $_POST['name'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
 $_SESSION['username']=$name;
 header('location:index.php');
}else{
 header('location:signlog.php');
 
}
?>