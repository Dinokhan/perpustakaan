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


	mysqli_query($koneksi, "UPDATE buku SET judul_buku='$_POST[judul_buku]',
										pengarang='$_POST[pengarang]',
										kode_jenisbuku='$_POST[kode_jenisbuku]',
										penerbit='$_POST[penerbit]',
										tahun_terbit='$_POST[tahun_terbit]',
										stok='$_POST[stok]'  
										WHERE kd_buku='$_POST[kd_buku]' ");

	header("location:buku.php");
	?>
</body>
</html>
