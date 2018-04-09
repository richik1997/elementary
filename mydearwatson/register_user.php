<?php

//connect to the db
include "includes/db_connect.php";
session_start();
//fetch user data
$name=$_POST['name'];
$year=$_POST['year'];
$college=$_POST['college'];
$email=$_POST['email'];
$password=hash('sha256',$_POST['password']);

$query="INSERT INTO `user` (`id`, `name`, `year`, `college`, `email`, `password`, `level`, `response`) VALUES (NULL, '$name', '$year', '$college', '$email', '$password', '1', NOW())";
if(mysqli_query($connection, $query))
{
//redirect
header('location: index.php?msg=0');
}
else
{
//redirect
header('location: register.php?msg=0');
}

?>

