-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2018 pada 16.15
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `nim` int(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`nim`, `nama`, `email`, `tanggal_lahir`, `jenis_kelamin`, `prodi`, `fakultas`) VALUES
(987654, 'M hasby ihwan', 'hasbyihwan@gmail.com', '0000-00-00', '2018-11-18', 'Desain Interior', 'FIK'),
(3456789, 'putra p zendrato', 'putap@gmail.com', '0000-00-00', '2018-10-08', 'Teknik Telekomunikasi', 'FIT'),
(2147483647, 'ellis kim', 'shinnara@gmail.com', '0000-00-00', '2018-10-12', 'Desain Interior', 'FIK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_jurnal1`
--
ALTER TABLE `t_jurnal1`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
