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


	mysqli_query($koneksi, "INSERT INTO peminjaman(id_peminjaman, tgl_peminjaman, tgl_kembali, id_member, kd_buku) 
		VALUES('$_POST[id_peminjaman]', '$_POST[tgl_peminjaman]', '$_POST[tgl_kembali]', '$_POST[id_member]', '$_POST[kd_buku]') ");
	header("location:peminjaman.php");
	?>
</body>
</html>
