<?php
include "koneksi.php";
mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman='$_GET[id]' ");
header("location:peminjaman.php");

?>