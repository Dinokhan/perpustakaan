<?php 
include "../koneksi.php";
// include "akses.php";
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
<body>
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
									<li><a href="../logout.php" class="nav-link" onclick="return confirm('Apakah anda ingin keluar !!!')">Keluar</a></li>
									
									
								</ul>
							</nav>
						</div>


						<div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

					</div>
				</div>

			</header>


			<!-- membuat div menggunakan bootstrap -->
			
			<!-- data untuk membuat slider guys -->


			<!-- data untuk membuat slider guys -->
			<!-- <img src="..." class="rounded float-left" alt="..."> -->
			<div class="alert alert-primary" role="alert">
				<br><br><br><br>
				<h1 class="display-4">Master Member</h1>
				<p class="lead">Kami Selalu memberikan kepercayaan kepada anda dimanapun</p>
			</div>
			

			<!-- data untuk membuat tabel -->


			<div class="container-fluid">
				<a href="form_member.php"><button type="button" class="btn btn-primary btn-lg">Tambah Data</button></a>
				<button type="button" class="btn btn-danger btn-lg">Hapus Semua Data</button>
				<form action="member.php" method="POST" class="form-inline my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
					</ul>
					<input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Orang" aria-label="Search" name="cari">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari Data</button>
				</form>
			</div>
			<br>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<!-- <th scope="col">#</th> -->
						<th scope="col">NO</th>
						<th scope="col">ID</th>
						<th scope="col">Nama Member</th>
						<th scope="col">Alamat</th>
						<th scope="col">Telp</th>
						<th scope="col">Tanggal Lahir</th>
						<th scope="col">Status</th>
						<th style="text-align: center;" scope="col">Action</th>

					</tr>
				</thead>
				<tbody>
					<?php 
					include "../koneksi.php";

					if (isset($_POST['cari'])){
						$cari=$_POST['cari'];
						$buku  = mysqli_query($koneksi, "SELECT * FROM member where nama_member like '%$cari%'") or die(mysqli_error());  

					}
					else {
						$buku  = mysqli_query($koneksi, "SELECT * FROM member") or die(mysqli_error());
					}

				// $tampil=mysqli_query($koneksi, "SELECT * FROM buku");

					$no=1;
					while ($r=mysqli_fetch_array($buku)){
						?>
						<tr>
							<!-- <th scope="row">1</th> -->
							<th><?php echo "$no"; ?></th>
							<td><?php echo "$r[id_member]"; ?></td>
							<td><?php echo "$r[nama_member]"; ?></td>
							<td><?php echo "$r[alamat]"; ?></td>
							<td><?php echo "$r[telepon]"; ?></td>
							<td><?php echo "$r[tgl_lahir]"; ?></td>
							<td><?php echo "$r[status_member]"; ?></td>

							<td>
								<!-- buat view data -->
<!-- 								<a <?php  //echo "href='view_buku.php?id=$r[id_member]'" ;?>>
									<button type="button" class="btn btn-primary btn-lg">
										view
									</button>
								</a>
 -->								<!-- buat view data -->


								<!-- buat update data -->
								<a <?php  echo "href='update_member.php?id=$r[id_member]'" ;?>>
									<button type="button" class="btn btn-success btn-lg">
										Ubah
									</button>
								</a>
								<!-- buat update data -->

								<!-- buat memnghapus data -->
								<a onclick="return confirm('Apakah anda yakin ingin menghapus !!!')" <?php  echo "href='member_hapus.php?id=$r[id_member]'" ;?>>
									<button type="button" class="btn btn-danger btn-lg">
										Hapus
									</button>
								</a>
								<!-- buat memnghapus data -->

							</td>


						</tr>

						<?php 
						$no=$no+1;
					}

					?>

				</tbody>


			</div>
		</table>
	</div>
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