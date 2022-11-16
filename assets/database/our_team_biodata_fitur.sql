-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2022 pada 04.27
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
-- Struktur dari tabel `our_team_biodata_fitur`
--

CREATE TABLE `our_team_biodata_fitur` (
  `id` int(1) NOT NULL,
  `id_our_team` int(1) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tempat_tanggal_lahir` varchar(250) NOT NULL,
  `kebangsaan` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `our_team_biodata_fitur`
--

INSERT INTO `our_team_biodata_fitur` (`id`, `id_our_team`, `nama`, `jenis_kelamin`, `tempat_tanggal_lahir`, `kebangsaan`, `status`, `agama`, `alamat`, `telepon`, `email`) VALUES
(2, 13, 'nana', 'perempuaan', '3-12-97 depok', 'indonesia', 'belum menikah', 'islam', 'jl.aaammm', '56687877', 'nana@gmail.com'),
(3, 20, 'mijee', 'perempuaan', '23-4-2000 bandung', 'indonesia', 'belum menikah', 'islam', 'jl.aaammm', '089765433124', 'mijee@gmail.com'),
(4, 1, 'karin', 'perempuaan', '12-03-92 jakarta', 'indonesia', 'belum menikah', 'islam', 'jl. kwanagya', '08976543312', 'karin@gmail.com'),
(5, 1, 'karin', 'perempuaan', '12-03-92 jakarta', 'indonesia', 'belum menikah', 'islam', 'jl. kwanagya', '089765433124', 'karin@gmail.com'),
(6, 1, 'karin', 'perempuaan', '12-03-92 jakarta', 'indonesia', 'belum menikah', 'islam', 'jl. kwanagya', '08976', 'karin@gmail.com'),
(11, 12, 'karina', 'perempuaan', '12-03-92 jakarta', 'canada', 'belum menikah', 'islam', 'jl.kwangya', '089765433124', 'karin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `our_team_biodata_fitur`
--
ALTER TABLE `our_team_biodata_fitur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `our_team_biodata_fitur`
--
ALTER TABLE `our_team_biodata_fitur`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
