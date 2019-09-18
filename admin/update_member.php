<?php 
include "../koneksi.php";
$tampil=mysqli_query($koneksi, "SELECT * FROM member where id_member='$_GET[id]'");
$r=mysqli_fetch_array($tampil);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perpustakaan&mdash; Berjalan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="../fonts/icomoon/style.css">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<link rel="stylesheet" href="../css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="../css/aos.css">

	<link rel="stylesheet" href="../css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<div class="site-wrap"  id="home-section">

		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>

		<div class="container d-none d-lg-block">
			<div class="row">
				<div class="col-12 text-center mb-4 mt-5">
					<h1 class="mb-0 site-logo"><a href="index.html" >Perpustakaan<span class="text-primary">.</span> </a></h1>
					
				</div>
			</div>
		</div>
		<header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">

			<div class="container">
				<div class="row align-items-center">

					<div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">

						<h1 class="mb-0 site-logo">
							<a href="index.html" class="text-black h2 mb-0">
								<span class="text-primary">.</span> 
							</a>
						</h1>
					</div>

					<div class="col-12 col-md-10 main-menu">
						<nav class="site-navigation position-relative text-right" role="navigation">

							<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
								<!-- <li><a href="#home-section" class="nav-link">Beranda</a></li> -->
								<li><a href="buku.php" class="nav-link">Buku</a></li>
								<li><a href="jenis.php" class="nav-link">Jenis Buku</a></li>
								<li><a href="member.php" class="nav-link">Member</a></li>
								<li><a href="peminjaman.php" class="nav-link">Peminjaman</a></li>
								<li><a href="transaksi.php" class="nav-link">Transaksi</a></li>
								<li><a href="about.php" class="nav-link">Tentang</a></li>
							</ul>
						</nav>
					</div>


					<div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

				</div>
			</div>

		</header>
		<!-- membuat div menggunakan bootstrap -->
		<br><br>
		<br><br>
		<!-- data untuk membuat tabel -->
		<div class="container alert alert-dark">
			<h1 class="display-4" align="center">Silahkan Ubah Data</h1>
			<div class="alert alert-success" role="alert">
				<h4 align="center">Member</h4>

			</div>
		</div>
		<div class="container alert alert-dark">
			<form action="aksi_update_member.php" class="p-5 bg-white" method="POST">

				<h2 class="h4 text-black mb-5">Ubah Member</h2> 

				<div class="row form-group">
					<div class="col-md-4 mb-3 mb-md-0">
						<label class="text-black" for="fname">ID Member</label>
						<input type="text" name="id_member" readonly value="<?php echo $r['id_member'];?>" class="form-control rounded-0">
					</div>
					<div class="col-md-8">
						<label class="text-black" for="lname">Nama Member</label>
						<input type="text" name="nama_member" value="<?php echo $r['nama_member'];?>" class="form-control rounded-0">
					</div>
				</div>

				<div class="row form-group">

					<div class="col-md-12">
						<label class="text-black" for="email">Alamat</label> 
						<input type="text" name="alamat" value="<?php echo $r['alamat'];?>" class="form-control rounded-0">
					</div>
				</div>

				<div class="row form-group">

					<div class="col-md-8">
						<label class="text-black" for="subject">Telepon</label> 
						<input type="subject" name="telepon" value="<?php echo $r['telepon'];?>" class="form-control rounded-0">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-8 mb-3 mb-md-0">
						<label class="text-black" for="fname">TGL Lahir</label>
						<input type="date" name="tgl_lahir"  value="<?php echo $r['tgl_lahir'];?>" class="form-control rounded-0">
					</div>
					
				</div>
				<div class="row form-group">

					<div class="col-md-8">
						<label class="text-black" for="subject">Status Member</label> <br>
						<input type="radio" name="status_member" value="Aktif">Aktif &nbsp;&nbsp;&nbsp;
						<input type="radio" name="status_member" value="Tidak Aktif">Tidak Aktif
					</div>
				</div>
				<br>
				<div class="row form-group">
					<div class="col-md-12">
						<input type="submit" value="Simpan Data" class="btn btn-primary mr-2 mb-2">

					</div>
				</div>


			</form>

		</div>
		<!-- footer  -->
		<br><br>
		<!-- footer -->
		<div class="footer py-5 border-top text-center">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12">
						<p class="mb-0">
							<a href="#" class="p-3"><span class="icon-facebook"></span></a>
							<a href="#" class="p-3"><span class="icon-twitter"></span></a>
							<a href="#" class="p-3"><span class="icon-instagram"></span></a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="mb-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made Dino khan and kawan2 
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->



		<!-- script data base -->
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/jquery-migrate-3.0.1.min.js"></script>
		<script src="../js/jquery-ui.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<script src="../js/jquery.stellar.min.js"></script>
		<script src="../js/jquery.countdown.min.js"></script>
		<script src="../js/bootstrap-datepicker.min.js"></script>
		<script src="../js/jquery.easing.1.3.js"></script>
		<script src="../js/aos.js"></script>
		<script src="../js/jquery.fancybox.min.js"></script>
		<script src="../js/jquery.sticky.js"></script>


		<script src="../js/main.js"></script>
	</body>
	</html>