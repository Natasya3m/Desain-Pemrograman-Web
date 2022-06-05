<?php
	include "myconnection.php";
	
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	
	$query = "SELECT * FROM user WHERE username='$username' && password='$password'";
	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_assoc($result);
	
	if($row['level'] == "1") {
		header("Location:homeGuest.html");
	}
	else if($row['level'] == "2") {
		header("Location:homeCRUD.php");
	}
	else {
		header("Location:multiLogin.php?error=gagal");
	}
?>