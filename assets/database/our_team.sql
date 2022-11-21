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
-- Struktur dari tabel `our_team`
--

CREATE TABLE `our_team` (
  `nama` varchar(25) NOT NULL,
  `deskripsi` varchar(25) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id` int(25) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tempat_tanggal_lahir` varchar(250) NOT NULL,
  `kebangsaan` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `telpon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `our_team`
--

INSERT INTO `our_team` (`nama`, `deskripsi`, `gambar`, `id`, `jenis_kelamin`, `tempat_tanggal_lahir`, `kebangsaan`, `status`, `agama`, `alamat`, `email`, `telpon`) VALUES
('karin', 'haloo, saya karin', 'karyawan2131.jpg', 29, 'perempuaan', '12-03-92 jakarta', 'indonesia', 'belum menikah', 'islam', 'jl. kwanagya', 'karin@gmail.com', '0812345678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
