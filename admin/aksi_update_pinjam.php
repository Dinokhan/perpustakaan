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

mysqli_query($koneksi, "UPDATE peminjaman SET tgl_peminjaman = '$_POST[tgl_peminjaman]',
										tgl_kembali = '$_POST[tgl_kembali]',
										id_member = '$_POST[id_member]',
										kd_buku = '$_POST[kd_buku]'
										WHERE id_peminjaman = '$_POST[id_peminjaman]'");
header("location:peminjaman.php");
	?>
</body>
</html>

