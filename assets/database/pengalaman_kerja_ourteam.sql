-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 04.40
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
-- Struktur dari tabel `pengalaman_kerja_ourteam`
--

CREATE TABLE `pengalaman_kerja_ourteam` (
  `id` int(1) NOT NULL,
  `id_our_team` int(1) NOT NULL,
  `nama_pengalaman` varchar(250) NOT NULL,
  `tahun_dari` varchar(250) NOT NULL,
  `tahun_sampai` varchar(250) NOT NULL,
  `peskripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengalaman_kerja_ourteam`
--

INSERT INTO `pengalaman_kerja_ourteam` (`id`, `id_our_team`, `nama_pengalaman`, `tahun_dari`, `tahun_sampai`, `peskripsi`) VALUES
(1, 29, 'kerja kelompok', 'sma kelas 1', 'sma kelas 3', 'beban kelompok');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengalaman_kerja_ourteam`
--
ALTER TABLE `pengalaman_kerja_ourteam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengalaman_kerja_ourteam`
--
ALTER TABLE `pengalaman_kerja_ourteam`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
