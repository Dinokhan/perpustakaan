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


	mysqli_query($koneksi, "INSERT INTO member(id_member, nama_member, alamat, telepon, tgl_lahir, status_member) 
		VALUES('$_POST[id_member]', '$_POST[nama_member]', '$_POST[alamat]', '$_POST[telepon]', '$_POST[tgl_lahir]', '$_POST[status_member]') ");
	header("location:member.php");
	?>
</body>
</html>
