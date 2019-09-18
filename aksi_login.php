<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST ['password']);

$login = mysqli_query($koneksi, "SELECT * FROM users where username = '$username' AND password = '$password'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
	session_start();
	//$_SESSION['id'] = $r['id_users'];
	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];
	$_SESSION['nama_lengkap'] = $r['nama_lengkap'];
	$_SESSION['email'] = $r['email'];
	$_SESSION['no_telp'] = $r['no_telp'];
	$_SESSION['level'] = $r['level'];
	$_SESSION['foto'] = $r['foto'];
	$sid_lama = session_id();
	session_regenerate_id();
	$sid_baru = session_id();
	mysqli_query($koneksi, "UPDATE users SET id_sission = '$sid_baru' where username = '$username'");
	echo "<script>
	alert('selamat Datang $r[nama_lengkap], $r[level]');
	document.location.href = 'admin/buku.php';
	</script>";
}else{
	echo "<script>
	alert('username/password Salah');
	document.location.href = 'login.php';
	</script>";

}
?>