<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<?php 
	include "../koneksi.php";
	// include "atas.php";


	mysqli_query($koneksi, "INSERT INTO buku(kd_buku, judul_buku, kode_jenisbuku, penerbit, pengarang, tahun_terbit, stok) 
		VALUES('$_POST[kd_buku]', '$_POST[judul_buku]', '$_POST[kode_jenisbuku]', '$_POST[penerbit]', '$_POST[pengarang]', '$_POST[tahun_terbit]', '$_POST[stok]') ");
	header("location:buku.php");
	?>
</body>
</html>
