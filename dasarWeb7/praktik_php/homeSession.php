<?php
	session_start();
?>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<?php
		if(isset($_SESSION["username"])){
			echo "Selamat Datang ". $_SESSION["username"] . "<br>";
			echo "Anda sebagai ". $_SESSION["role"] . "<br>";
			echo '<a href="sessionLogout.php">Logout</a>';
		}
		else{
			echo "Anda belum Login <br>";
			echo '<a href="loginForm.html">Login</a>';
		}
	?>
</body>
</html>