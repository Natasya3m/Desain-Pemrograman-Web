<?php
	setcookie("mahasiswa", "", time()-600);
	setcookie("kelas", "", time()-3600);
?>
<html>
<body>
<?php
	echo "Cookies mahasiswa telah dihapus <br>";
	echo "Cookies kelas telah dihapus";
?>
</body>
</html>