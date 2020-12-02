-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 09.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendidikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayatpendidikan`
--

CREATE TABLE `riwayatpendidikan` (
  `id` int(11) NOT NULL,
  `sd` varchar(50) NOT NULL,
  `smp` varchar(50) NOT NULL,
  `sma` varchar(50) NOT NULL,
  `ptn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayatpendidikan`
--

INSERT INTO `riwayatpendidikan` (`id`, `sd`, `smp`, `sma`, `ptn`) VALUES
(18, 'SDN BANARAN 1 BABAT', 'SMP N 3 BABAT', 'SMA MUHHAMMADYAH 1 BABAT', 'UPN VTERAN JATIM : S1'),
(19, 'SDN BABAT 3', 'SMP N 2 BABAT', 'MAN 1 BABAT', 'UNISLA : D3'),
(20, 'SDN BABAT 7', 'SMP 2 PUCUK', 'SMA N 1 BAURENO', 'UM SURABAYA : S2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayatpendidikan`
--
ALTER TABLE `riwayatpendidikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayatpendidikan`
--
ALTER TABLE `riwayatpendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
