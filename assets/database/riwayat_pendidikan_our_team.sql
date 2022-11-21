-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 04.39
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konekthing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pendidikan_our_team`
--

CREATE TABLE `riwayat_pendidikan_our_team` (
  `id` int(1) NOT NULL,
  `id_our_team` int(128) NOT NULL,
  `type_sekolah` varchar(250) NOT NULL,
  `nama_sekolah` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pendidikan_our_team`
--

INSERT INTO `riwayat_pendidikan_our_team` (`id`, `id_our_team`, `type_sekolah`, `nama_sekolah`, `deskripsi`) VALUES
(11, 29, 'swasta', 'YAJ', 'sekolah dengan pengembangan teknologi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat_pendidikan_our_team`
--
ALTER TABLE `riwayat_pendidikan_our_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat_pendidikan_our_team`
--
ALTER TABLE `riwayat_pendidikan_our_team`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
