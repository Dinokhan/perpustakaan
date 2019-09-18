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
	mysqli_query($koneksi, "UPDATE member SET nama_member ='$_POST[nama_member]',
										alamat='$_POST[alamat]',
										telepon='$_POST[telepon]',
										tgl_lahir='$_POST[tgl_lahir]',
										status_member='$_POST[status_member]',
										foto='$_POST[foto]'
										WHERE id_member='$_POST[id_member]' ");

	header("location:member.php");
	?>
</body>
</html>
