<?php
include "koneksi.php";
mysqli_query($koneksi, "DELETE FROM transaksi_peminjaman WHERE id_transaksipeminjaman ='$_GET[id]'");
mysqli_query($koneksi, "UPDATE buku SET stok=stok + '$_GET[qty]' WHERE kd_buku ='$_GET[kd_buku]'");
header("location:transaksi.php");

?>