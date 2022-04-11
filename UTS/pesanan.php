<html>
	<head>
	</head>
	<body>
		<?php
			if(isset($_POST['id']) AND isset($_POST['nama']) AND isset($_POST['status']) AND isset($_POST['menu']) AND isset($_POST['prc']) AND isset($_POST['jml']) )
			{
			$id=$_POST['id'];
			$nama=$_POST['nama'];
			$status=$_POST['status'];
			$menu=$_POST['menu'];
			$prc=$_POST['prc'];
			$jml=$_POST['jml'];
			$jumlah="";
			
			
			if($status== 'r1'){
				if($jml==1){
					$jumlah= $prc * $jml;
					$diskon= 0.05 * $jumlah;
					$harga= $jumlah - $diskon;
				
				}
				else if($jml==3){
					$jumlah= $prc * $jml;
					$diskon= 0.07 * $jumlah;
					$harga= $jumlah - $diskon;
					
				}
				else if($jml > 3){
					$jumlah= $prc * $jml;
					$diskon= 0.1 * $jumlah;
					$harga= $jumlah - $diskon;
			
				}
			}else{
				if($jml==1){
					$harga= $prc;
					
				}
				else if($jml==3){
					$jumlah= $prc * $jml;
					$diskon= 0.05 * $jumlah;
					$harga= $jumlah - $diskon;
					
				}
				else if($jml > 5){
					$jumlah= $prc * $jml;
					$diskon= 0.05 * $jumlah;
					$harga= $jumlah - $diskon;
		
				}
			}
				echo "Laporan Pemesanan"; 
				echo "<br>";
				echo "Customer ID : " .$id;
				echo "<br>";
				echo "Customer Name : " .$nama;
				echo "<br>";
				echo "Menu : " .$menu;
				echo "<br>";
				echo "Total : " .$harga;
				echo "<br>";
			}	
		?>
	</body>
</html>