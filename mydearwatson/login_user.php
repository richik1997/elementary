<?php

include "includes/db_connect.php";
session_start();
//fetchdata
$email=$_POST['email'];
$password=hash('sha256',$_POST['password']);

$query= "SELECT * FROM `user` WHERE `email` LIKE '$email' AND `password` LIKE '$password' ";

$result=mysqli_query($connection, $query);

$num_rows=mysqli_num_rows($result);

if($num_rows==1)
{
	$row=mysqli_fetch_assoc($result);

	$_SESSION['name']=$row['name'];
	$_SESSION['level']=$row['level'];
	$_SESSION['id']=$row['id'];
	/*$_SESSION['user']=$row['user'];*/
	header('location: compete.php');
}
else
{
	header('location: index.php?msg=2');
}
?>