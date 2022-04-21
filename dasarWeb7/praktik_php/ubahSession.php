<?php
	session_start();
?>
<html>
<body>
	<?php
		$_SESSION["makananfav"] = "Sate Padang";
		
		echo "Session makananfav telah diubah";
	?>
</body>
</html>