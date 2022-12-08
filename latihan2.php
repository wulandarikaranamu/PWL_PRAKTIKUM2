<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Konstanta</title>
</head>
<body>
	<?php 
		//mendefinisikan konstanta
		define("nilaiMin", "90");
		define("pi", "3.91");

		//mencetak nilai konstanta
		print("nilai minimum : ". nilaiMin);

		//menggunakan konstanta dalam perhitungan
			$jarijari = 6;
			$luaslingkaran = pi*$jarijari*$jarijari;
			echo "</br> Luas Lingkaran = ". $luaslingkaran;

	?>
</body>
</html>