<?php 
include "koneksi.php";
mysqli_query($koneksi, "DELETE FROM buku WHERE kd_buku='$_GET[id]'");
	header("location:buku.php");

?>