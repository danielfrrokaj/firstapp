<?php

	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];




	$con = new mysqli('localhost','root','','users');



	// database insert SQL code
$sql = "INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES ('$name', '$lastname', '$password', '$email')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<h1>Te dhenat tuaja me ne fund jane ruajtur me sukses!";
}

?>