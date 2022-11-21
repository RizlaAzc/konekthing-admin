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
-- Struktur dari tabel `handle_pekerjaan_ourteam`
--

CREATE TABLE `handle_pekerjaan_ourteam` (
  `id` int(1) NOT NULL,
  `id_our_team` int(1) NOT NULL,
  `nama_project` varchar(250) NOT NULL,
  `tahun_dari` varchar(250) NOT NULL,
  `tahun_sampai` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `handle_pekerjaan_ourteam`
--

INSERT INTO `handle_pekerjaan_ourteam` (`id`, `id_our_team`, `nama_project`, `tahun_dari`, `tahun_sampai`, `deskripsi`) VALUES
(4, 29, 'bikin web weban', 'sma kelas 1', 'sma kelas 3', 'bagian nonton');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `handle_pekerjaan_ourteam`
--
ALTER TABLE `handle_pekerjaan_ourteam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `handle_pekerjaan_ourteam`
--
ALTER TABLE `handle_pekerjaan_ourteam`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
