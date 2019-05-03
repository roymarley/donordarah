-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2019 pada 03.34
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdonordarah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendonor`
--

CREATE TABLE `tb_pendonor` (
  `id` int(2) NOT NULL,
  `nama_pendonor` varchar(40) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendonor`
--

INSERT INTO `tb_pendonor` (`id`, `nama_pendonor`, `umur`, `golongan_darah`) VALUES
(1, 'laokta roymarley', '18', 'A'),
(2, 'ade prasetyo', '18', '-'),
(3, 'Jacob', '27', 'O'),
(7, 'Nick', '22', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pendonor`
--
ALTER TABLE `tb_pendonor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pendonor`
--
ALTER TABLE `tb_pendonor`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
