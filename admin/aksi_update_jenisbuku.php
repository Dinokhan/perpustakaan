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


	mysqli_query($koneksi, "UPDATE jenis_buku SET nama_jenisbuku = '$_POST[nama_jenisbuku]' WHERE kode_jenisbuku = '$_POST[kode_jenisbuku]'");

	header("location:jenis.php");
	?>
</body>
</html>
