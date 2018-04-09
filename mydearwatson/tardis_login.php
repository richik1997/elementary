<?php

include "includes/db_connect.php";
session_start();
//fetchdata
$username=$_POST['username'];
$password=$_POST['password'];


if($username == "admin" && $password == "password")
{
	$_SESSION['name']="admin";
	header('location: add_question.php');
}
else
{
	header('location: tardis.php');
}
?>