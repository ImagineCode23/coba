<!DOCTYPE html>
<html>
<head>
	<?php
		$title = "Latihan Operator";
	?>
	<title>Nama: <?php echo $title?></title>
	<link rel="stylesheet" type="text/css" href="tugas2.css">
</head>
<body>
	<?php
	 	$panjang = 10;
	 	$lebar = 7;
	 	$tinggi = 15;
	 	$volume = $panjang * $lebar * $tinggi;

	 	$kelas = "12.2A.07";

	 	$teks1 = 'Belajar Menghitung ';
	 	$teks2 = 'Volume Balok';

	 	
	?>
	<div id="card">
		<div id="card-content">
			<div id="judul">
				<h2><?php echo $teks1 . $teks2?></h2>	
				<div class="underline-title"></div>
			</div>
			<p>
				<?php
					echo "<br>";
				 	echo "Panjang Balok = $panjang<br><br>";
				 	echo "Lebar Balok = $lebar<br><br>";
				 	echo "Tinggi Balok = $tinggi<br><br>";
				 	echo "Volume Balok = $volume<br><br>";
				 	echo "Kelas = $kelas";
				?>
			</p>
		</div>
	</div>
	 
</body>
</html>