<?php

//connect to the db
include "includes/db_connect.php";
session_start();

//fetch user data
$question_no=$_POST['question_no'];
$question=$_POST['question'];
$image=$_POST['image'];
$hint=$_POST['hint'];
$answer=hash('sha256',strtolower($_POST['answer']));
$image_hover=$_POST['image_hover'];
$tabname=$_POST['tabname'];
$tablogo=$_POST['tablogo'];
$password=$_POST['password'];

if($password == "password")
{
$query1="INSERT INTO `questions` (`question_no`, `question`, `image`, `hint`, `answer`, `image_hover`, `tab_name`, `tab_logo`) VALUES ('$question_no', '$question', '$image', '$hint', '$answer', '$image_hover', '$tabname', '$tablogo')";

if(mysqli_query($connection, $query1))
{
//redirect
header('location: add_question.php?msg=1');
}
else
{
header('location: add_question.php?msg=0');
}
}
?>