<?php
	include "myconnection.php";
	
	$name = $_GET["myname"];
	$address = $_GET["myaddress"];
	$photo = $_GET["photo"];
	
	$query = "INSERT INTO student (name, address, photo)
				VALUES ('$name', '$address', 'photo')";
		
	if(mysqli_query($connect, $query)) {
		echo "Data baru berhasil ditambahkan";
	}
	else{
		echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
	}
	
	mysqli_close($connect);
?>