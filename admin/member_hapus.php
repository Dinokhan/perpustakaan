<?php
include "koneksi.php";
mysqli_query($koneksi, "DELETE FROM member WHERE id_member='$_GET[id]' ");
header("location:member.php");

?>