<?php
	$conn = Mysqli_connect("localhost", "root", "6577", "BankingDB");
	if(!$conn){
		die("Database connection failed !");
	}
	$conn->query("SET NAMES 'utf8'");
	session_start();
 ?>
