-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 01:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jk_admin` varchar(40) NOT NULL,
  `telp_admin` varchar(15) NOT NULL,
  `email_admin` varchar(40) NOT NULL,
  `foto_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `admin`
--
DELIMITER $$
CREATE TRIGGER `hapus_admin` AFTER DELETE ON `admin` FOR EACH ROW BEGIN
DELETE FROM berita WHERE id_admin = old.id_admin;
DELETE FROM foto WHERE id_admin = old.id_admin;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id_bimbingan` int(11) NOT NULL,
  `id_dsn` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`id_bimbingan`, `id_dsn`, `id_mhs`) VALUES
(3, 1, 28),
(4, 2, 28);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dsn` int(8) NOT NULL,
  `nidn_dsn` varchar(10) NOT NULL,
  `nama_dsn` varchar(50) NOT NULL,
  `email_dsn` varchar(40) NOT NULL,
  `telp_dsn` varchar(15) NOT NULL,
  `alamat_dsn` varchar(50) NOT NULL,
  `kabkot_dsn` varchar(30) NOT NULL,
  `jk_dsn` varchar(20) NOT NULL,
  `tgllahir_dsn` date NOT NULL,
  `tmplahir_dsn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dsn`, `nidn_dsn`, `nama_dsn`, `email_dsn`, `telp_dsn`, `alamat_dsn`, `kabkot_dsn`, `jk_dsn`, `tgllahir_dsn`, `tmplahir_dsn`) VALUES
(1, '51156515', 'Ida Bagus mahendra', 'ajik@gmail.com', '089656626292', 'jl salawati 2', 'Denpasar', 'Laki - laki', '2020-05-13', 'Denpasar'),
(2, '1551', 'Pasek Wahyu Chandra', 'ajik@gmail.com', '089656626292', 'jl salawati 2', 'Denpasar', 'Laki - laki', '2020-05-13', 'Denpasar');

-- --------------------------------------------------------

--
-- Table structure for table `gabung`
--

CREATE TABLE `gabung` (
  `id_join` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gabung`
--

INSERT INTO `gabung` (`id_join`, `id_mhs`, `id_kelas`) VALUES
(1, 28, 1),
(18, 28, 1),
(19, 1, 9),
(20, 28, 9),
(21, 0, 0),
(22, 0, 0),
(23, 0, 0),
(24, 0, 0),
(25, 0, 0),
(26, 0, 0),
(27, 0, 0),
(28, 0, 0),
(29, 0, 1),
(30, 0, 9),
(31, 0, 1),
(32, 0, 1),
(33, 0, 1),
(34, 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `jam_kelas` varchar(20) NOT NULL,
  `kuota_kelas` int(11) NOT NULL,
  `id_dsn` int(11) NOT NULL,
  `status_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jam_kelas`, `kuota_kelas`, `id_dsn`, `status_kelas`) VALUES
(1, 'Algoritma Pemrograman B', '12.00 - 14.50', 25, 2, 'aktif'),
(9, 'Pengolahan Data Digital A', '13.00 - 14.00', 21, 2, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_mk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_krs`, `semester`, `id_mhs`, `id_mk`) VALUES
(1, 'Ganjil 2020/2021', 28, 1),
(2, 'Ganjil 2020/2021', 28, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(8) NOT NULL,
  `nim_mhs` varchar(10) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `email_mhs` varchar(40) NOT NULL,
  `telp_mhs` varchar(15) NOT NULL,
  `alamat_mhs` varchar(50) NOT NULL,
  `kabkot_mhs` varchar(30) NOT NULL,
  `jk_mhs` varchar(20) NOT NULL,
  `tgllahir_mhs` date NOT NULL,
  `tmplahir_mhs` varchar(30) NOT NULL,
  `fakultas_mhs` varchar(100) NOT NULL,
  `prodi_mhs` varchar(50) NOT NULL,
  `status_mhs` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim_mhs`, `nama_mhs`, `email_mhs`, `telp_mhs`, `alamat_mhs`, `kabkot_mhs`, `jk_mhs`, `tgllahir_mhs`, `tmplahir_mhs`, `fakultas_mhs`, `prodi_mhs`, `status_mhs`) VALUES
(28, '1708561084', 'Gevin Janitto Pradana Putra', 'gevinjanitto@gmail.com', '089686380483', 'jl kusuma dewa no 7', 'Denpasar', 'Laki-laki', '2020-05-08', 'Bandung', 'FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM', 'INFORMATIKA', '');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_mk` int(11) NOT NULL,
  `kode_mk` char(6) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_mk`, `kode_mk`, `nama_mk`, `sks`) VALUES
(1, 'IF1234', 'Pengolahan Data Digital', 3),
(2, 'IF1235', 'Algoritma Pemrograman', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `email_user` varchar(40) NOT NULL,
  `password_user` varchar(25) NOT NULL,
  `id_role` int(11) NOT NULL,
  `waktu_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`email_user`, `password_user`, `id_role`, `waktu_daftar`) VALUES
('admin', 'admin', 1, '2020-05-28'),
('ajik@gmail.com', 'ajik345', 2, '2020-05-03'),
('gevinjanitto@gmail.com', 'gevin345', 3, '2020-05-28');

--
-- Triggers `user_login`
--
DELIMITER $$
CREATE TRIGGER `tambah_user` BEFORE INSERT ON `user_login` FOR EACH ROW BEGIN
IF (new.id_role = '1') THEN
	INSERT INTO admin(email_admin) VALUES(new.email_user);
ELSEIF (new.id_role = '2') THEN
	INSERT INTO dosen(email_dsn) VALUES(new.email_user);
ELSE
	INSERT INTO mahasiswa(email_mhs) VALUES(new.email_user);
END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id_bimbingan`),
  ADD KEY `id_dosen` (`id_dsn`),
  ADD KEY `id_mahasiswa` (`id_mhs`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dsn`);

--
-- Indexes for table `gabung`
--
ALTER TABLE `gabung`
  ADD PRIMARY KEY (`id_join`),
  ADD KEY `id_mahasiswa` (`id_mhs`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_dosen` (`id_dsn`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `id_mk` (`id_mk`),
  ADD KEY `id_mahasiswa` (`id_mhs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id_bimbingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dsn` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gabung`
--
ALTER TABLE `gabung`
  MODIFY `id_join` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
