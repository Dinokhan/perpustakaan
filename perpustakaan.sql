-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 08:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kd_buku` int(5) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `kode_jenisbuku` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(6) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kd_buku`, `judul_buku`, `pengarang`, `kode_jenisbuku`, `penerbit`, `tahun_terbit`, `stok`) VALUES
(111, 'Bumi Manusia', 'Ananta Toer', 'Novel', 'Hasta Mitra', '1980', 22),
(113, 'Hijaukan Keadaan ', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1930', 30),
(114, 'Tenangkan Keadaaan', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1930', 14),
(115, 'Cahaya ilahi ', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1930', 543),
(116, 'Lentera hidup', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1930', 32),
(117, 'Salam Literasi', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1930', 1),
(118, 'Damai dan Perjuangan ', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1930', 12),
(119, 'Cahaya ilahi 2', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1980', 32),
(120, 'Cahaya ilahi 3', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1980', 32),
(121, 'Hijaukan Keadaan ', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1980', 32),
(122, 'Hijaukan Keadaan ', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1980', 14),
(123, 'Lentera hidup 3', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1980', 14),
(124, 'Lentera aja 1', 'Adian deh 2', 'Novel ya 3', 'Fiersa best 4', '1998', 18),
(125, 'Lentera hidup', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1999', 14),
(126, 'Lentera hidup', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1999', 14),
(127, 'Tenangkan Keadaaan', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1999', 14),
(128, 'Tenangkan Keadaaan', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1999', 14),
(129, 'Tenangkan Keadaaan', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1999', 14),
(130, 'Tenangkan Keadaaan', 'Adian Husaini', 'Novel', 'Fiersa Besarri', '1999', 14),
(131, 'Mencoba Sukses Kembali', 'Dadang Suharja', '34521', 'Yayan Ruhiyan', '1920', 9),
(132, 'Hijrah ke London1', 'Briliant Yusuf1', '321', 'dani wira sasmita1', '1921', 19);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `kode_jenisbuku` int(11) NOT NULL,
  `nama_jenisbuku` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_buku`
--

INSERT INTO `jenis_buku` (`kode_jenisbuku`, `nama_jenisbuku`) VALUES
(25, 'Ensiklopedia'),
(26, 'Dongeng'),
(27, 'Biografi'),
(28, 'Karya Ilmiah'),
(29, 'Kamus'),
(31, 'Komik'),
(32, 'Novel'),
(33, 'Jurnal');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(5) NOT NULL,
  `nama_member` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status_member` varchar(32) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `alamat`, `telepon`, `tgl_lahir`, `status_member`, `foto`) VALUES
(123, 'Bilal Afrizal', 'jl.siaga, rt.37 no.71', '081393982465', '1998-04-11', 'tidak aktif', 'bilal.jpg'),
(124, 'Abdul Rahim', 'Jl.Patimura rt.48 No.44', '087797875755', '1997-07-14', 'aktif', 'hope.jpg'),
(125, 'Zefanya Saragi', 'saitnihuta, tarutung', '089623527058', '1998-02-13', 'Aktif', 'zefanya.JPG'),
(126, 'Hany Rosalina Napitupulu', 'Jl.D.I.Panjaitan no.2A', '081263137433', '1994-07-28', 'Aktif', 'hani.jpg'),
(127, 'M.Imron Kurniawan', 'Jl. Letjend S.Parman RT.02 No.40', '085811112222', '1993-05-23', 'Aktif', 'imron.jpg'),
(128, 'Diana Puspita', 'Jl.Prona 1 RT.26 No.58', '082332882612', '1996-05-18', 'Aktif', 'diana.jpg'),
(129, 'Rizqi Dino Triyatmoko', 'Jalakan, RT.01', '082254693245', '1998-08-08', 'No Aktif', 'dino.jpg'),
(130, 'Dani Wira Sasmita', 'Jl. Makmur Jaya, RT.05', '082354042536', '1993-01-04', 'No Aktif', 'dani.jpg'),
(132, 'petra sinaga', 'jl petra sihombing', '085357689878', '1993-01-04', 'Aktif', ''),
(888, 'petra sihombing', 'ada apa dengan cinta', '0909090904', '2019-04-16', 'Aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(3) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_member` int(5) NOT NULL,
  `kd_buku` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_peminjaman`, `tgl_kembali`, `id_member`, `kd_buku`) VALUES
(2, '2019-04-16', '2019-04-19', 123, 111),
(3, '2019-04-16', '2019-04-18', 130, 132);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_peminjaman`
--

CREATE TABLE `transaksi_peminjaman` (
  `id_transaksipeminjaman` int(7) NOT NULL,
  `id_peminjaman` int(5) NOT NULL,
  `kd_buku` int(5) NOT NULL,
  `tardiness` int(5) NOT NULL,
  `denda` int(10) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_peminjaman`
--

INSERT INTO `transaksi_peminjaman` (`id_transaksipeminjaman`, `id_peminjaman`, `kd_buku`, `tardiness`, `denda`, `qty`) VALUES
(1, 1, 111, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `foto`) VALUES
('dani', '55b7e8b895d047537e672250dd781555', 'dani wira sasmita', 'daniwira45@gmail.com', '085357869610', 'admin', ''),
('resi', '6a898eca5bf710c5e2541ca895598e7e', 'resi vanesa ', 'resi@gmail.com', '0852147483699', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`kode_jenisbuku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  ADD PRIMARY KEY (`id_transaksipeminjaman`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  MODIFY `id_transaksipeminjaman` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
