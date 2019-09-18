<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
F
	<?php 
	include "../koneksi.php";
	// include "atas.php";


	mysqli_query($koneksi, "INSERT INTO jenis_buku(kode_jenisbuku, nama_jenisbuku) 
		VALUES('$_POST[kode_jenisbuku]', '$_POST[nama_jenisbuku]')");
	header("location:jenis.php");
	?>
</body>
</html>
