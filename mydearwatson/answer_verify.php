<?php
include "includes/db_connect.php";
session_start();
//fetchdata
$answer=hash('sha256',strtolower($_POST['answer']));
$level=$_SESSION['level'];
$user=$_SESSION['name'];

$query= "SELECT * FROM `questions` WHERE `question_no` = '$level' AND `answer` = '$answer'";

$result=mysqli_query($connection, $query);

$num_rows=mysqli_num_rows($result);



if($num_rows==1)
{
	$level++;
	echo "$level";
	
	$query1= "SELECT * FROM `user` WHERE `name` LIKE '$user'";
	$result1=mysqli_query($connection, $query1);
	$num_rows1=mysqli_num_rows($result1);
	if($num_rows1==1)
	{
		$row=mysqli_fetch_assoc($result1);
		    $id=$row['id'];
		    echo "$id";
			$query2="UPDATE `user` SET `level` = '$level', `response` = NOW() WHERE `user`.`id` = '$id'";
			if(mysqli_query($connection, $query2))
{
//redirect
	$_SESSION['level']=$level;
header('location: compete.php?msg=0');
}
	}
	
}
else
{
	header('location: compete.php?msg=1');
}
?>