-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 03:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simakk`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `namalengkap` varchar(50) DEFAULT NULL,
  `kelamin` enum('Laki-laki','Perempuan','','') DEFAULT NULL,
  `tempat` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha','Kong Hu Cu') DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `fakultas` enum('FEB','FK','FH','FT','FP','FEB','FAPET','FMIPA','FTP','FISIP') DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `namalengkap`, `kelamin`, `tempat`, `tanggal`, `alamat`, `agama`, `telp`, `fakultas`, `prodi`) VALUES
('1706521082', 'Java', 'Perempuan', 'Karangasem', '1999-03-22', 'jl apae kaden', 'Buddha', '087675453265', 'FEB', 'ekonomi'),
('170756262', 'Puspita Dewi', 'Perempuan', 'Denpasar', '1999-12-13', 'Denpasar', 'Katolik', '089767564545', 'FT', 'Sipil'),
('1708441055', 'IIK mamak Tuwe', 'Perempuan', 'Karangasem', '1999-12-31', 'Bukit Jimbaran', 'Protestan', '0861612616', 'FISIP', 'HI'),
('1708531085', 'Vella Acek Gemuy', 'Perempuan', 'Karangasem', '1999-11-01', 'Bukit Jimbaran', 'Hindu', '0817666264', 'FK', 'dokter'),
('1708561063', 'Agus Wisnawa', 'Laki-laki', 'Denpasar', '1998-04-08', 'jl padang sambian', 'Hindu', '0894996162', 'FMIPA', 'Informatika'),
('1708561065', 'Ida Bagus Mahendra', 'Laki-laki', 'Denpasar', '1999-12-15', 'jl p salawati', 'Hindu', '08161616969', 'FMIPA', 'Informatika'),
('1708561074', 'Ida Ayu Prasanthi', 'Perempuan', 'Denpasar', '1999-12-13', 'jl bypass n0 98', 'Kong Hu Cu', '089765345265', 'FP', 'pertanian'),
('1708561075', 'Putu Pasek Wahyu Chandra Putra', 'Laki-laki', 'Karangasem', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '081453278666', 'FMIPA', 'Informatika'),
('1708561077', 'I Made Satya Vyasa', 'Laki-laki', 'Denpasar', '1999-08-09', 'Bukit Jimbaran', 'Hindu', '087777777777', 'FMIPA', 'Informatika'),
('1708561084', 'Gevin Janitto Pradana Putra', 'Laki-laki', 'Bandung', '1999-04-25', 'jl kusuma dewa no 7', 'Protestan', '089686380483', 'FMIPA', 'Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
