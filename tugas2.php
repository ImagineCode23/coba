<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
	<link rel="stylesheet" type="text/css" href="tugas2.css">
</head>
<body>
	<div id="card">
		<div id="card-content">
			<div id="judul">
				<h2>DATA DIRI</h2>	
				<div class="underline-title"></div>
			</div>

			<p>
				<?php

					$nama = "Lintang Seruni Senja<br>";
					$alamat = "Jl. Badak No. 2 Cimahi-Bandung<br>";
					$ttl = "Jakarta, 20 Oktober 1990<br>";
					$telp = "0812345678";

					echo "Nama Saya : $nama <br>";
					echo "Alamat : $alamat <br>";
					echo "TTL : $ttl<br>";
					echo "Telp : $telp<br>";
				?>
			</p>
			
		</div>
	</div>
</body>
</html>