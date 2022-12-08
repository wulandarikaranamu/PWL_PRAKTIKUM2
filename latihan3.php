<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Tipe Data</title>
</head>
<body>
	<?php 
	//mendefinisikan variabel dengan berbagai tipe data
	$nim = "22.66.0080";
	$nama = "MERRY WULANDARI.S";
	$umur = 19;
	$nilai = 92.2;
	$status = TRUE;

	//menampilkan Data
	echo "NIM : ".$nim."</br>";
	echo "Nama : ".$nama."</br>";
	print "umur : ".$umur;
	print "</br>";
	printf("Nilai : %.3f</br>",$nilai);

	if($status)
		echo "Status : Aktif";
	else
		echo "Status : Tidak Aktif";

	?>
</body>
</html>