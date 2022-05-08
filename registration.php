<?php

session_start();
header('location:signlog.php');

$con = mysqli_connect('localhost','root','','task-manager','3307');

mysqli_select_db($con, 'task-manager');
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$squestion = $_POST['squestion'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Exist";
}else{
    $reg="insert into usertable(name ,email, password, squestion) values ('$name' ,'$email', '$pass', '$squestion')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
}

?>