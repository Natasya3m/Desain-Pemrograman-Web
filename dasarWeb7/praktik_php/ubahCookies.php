<?php
	$name = "mahasiswa";
	$value = "Natasya Tri Melinna";
	setcookie ($name, $value, time()+600);
	
	setcookie ("kelas", "MI-1F", time()+3600);
?>
<html>
<body>
<?php
	echo "Cookies telah diubah";
?>
</body>
</html>