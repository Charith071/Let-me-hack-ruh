<?php 
	$user = "root";
	$pass = "1234";
	$server = "localhost";
	$con = mysqli_connect($server,$user,$pass);
	if (mysqli_connect_errno()) {
		//die('Database connection failed ' . mysqli_connect_error());
	}	
?>