<?php
include "koneksi.php";
mysqli_query($koneksi, "DELETE FROM jenis_buku where kode_jenisbuku='$_GET[id]'");
header("location:jenis.php");

?>