-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 11:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simak`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelamin` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `asal` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `namalengkap`, `namauser`, `nim`, `kelamin`, `tempat`, `tanggal`, `asal`, `jurusan`, `pass`, `jam`) VALUES
(1588470657, 'Gevin janitto', 'gevinjanitto49', 1708561084, 'Laki-Laki', 'Bandung', '1999-04-25', 'SMAK Santo Yosephh', 'Teknik Informatika', 'GEVIN345', '05:38:57'),
(1588470662, 'Pasek wahyu Chandra', 'acekgemuy', 1708561075, 'Laki-Laki', 'Karangasem', '2020-05-12', 'SMAK 1 karangasem', 'Teknik Informatika', 'acekgemuy123', '08:33:53'),
(1588470664, 'Ida Bagus Mahendra', 'ajiknoel', 1708561065, 'Laki-Laki', 'Bangli', '2020-05-30', 'SMAK Harapan', 'Teknik Informatika', 'ajik2222', '08:36:47'),
(1588488094, 'I made Satya Vyasa', 'tuwe5555', 1708561058, 'Laki-Laki', 'Denpasar', '2020-05-15', 'SMK TI GLOBAL', 'Teknik Informatika', 'tuwetuwe', '08:41:34'),
(1588488206, 'Agus Wisnawa', 'jarwokkun558', 1708561063, 'Laki-Laki', 'Denpasar', '2020-05-11', 'SMA 1 Denpasar', 'Teknik Informatika', 'kunjarwonia', '08:43:26'),
(1588488285, 'Vella', 'pulsaooopulsa', 1708531021, 'Perempuan', 'Karangasem', '2020-05-23', 'SMAK 1 karangasem', 'Farmasi', 'aceksumberpulsaku', '08:44:45'),
(1588488362, 'silvi', 'silviatuwe', 2147483647, 'Perempuan', 'Badung', '2020-05-06', 'SMAK 1 Denpasar', 'Biologi', 'silsil555', '08:46:02'),
(1588488605, 'Diah Utami Dewi', 'bebebacekgemuy', 1708165115, 'Perempuan', 'Karangasem', '2020-05-13', 'SMAK 1 karangasem', 'Biologi', 'acekloveyou', '08:50:05'),
(1588488652, 'Java', 'javavanjava5555', 1708536151, 'Perempuan', 'Karangasem', '2020-05-20', 'SMAK 1 karangasem', 'Kimia', 'byeacek', '08:50:52'),
(1588488700, 'iik', 'mamaktuwe', 1708561475, 'Perempuan', 'Denpasar', '2020-05-21', 'SMAK 1 Bangli', 'Matematika', 'mamaktuwe', '08:51:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1588488701;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
