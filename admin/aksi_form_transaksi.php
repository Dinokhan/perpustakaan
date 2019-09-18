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
	$tampil = mysqli_query($koneksi, "SELECT * FROM buku WHERE kd_buku = '$_POST[kd_buku]' ");
$r = mysqli_fetch_array($tampil);
$ketemu = mysqli_num_rows($tampil);
if ($ketemu == 0) {
	echo "<h1>Kode Transaksi Peminjaman gak ada bro .. !</>";
	echo "<a href='form_transaksi.php'>Data Sudah Masuk...</a>";
}
else {
	mysqli_query($koneksi, "INSERT INTO transaksi_peminjaman(id_peminjaman, kd_buku, tardiness, denda, qty) 
		VALUES($_POST[id_peminjaman]', '$_POST[kd_buku]', '$_POST[tardiness]', '$_POST[denda]', '$_POST[qty]') ");
	mysqli_query($koneksi, "UPDATE buku SET stok=stok - '$_POST[qty]' WHERE kd_buku = '$_POST[kd_buku]' ");
	header("location:transaksi.php");
}
	?>

</body>
</html>
