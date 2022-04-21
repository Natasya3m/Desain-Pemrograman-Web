<?php
	session_start();
?>
<html>
<body>
	<?php
		echo "Makanan favorit saya adalah " . $_SESSION["makananfav"] . "<br>";
		echo "Minuman favorit saya adalah " . $_SESSION["minumanfav"] . "<br>";
		
		print_r($_SESSION);
	?>
</body>
</html>