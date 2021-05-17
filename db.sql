-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2021 pada 05.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_difue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `difue`
--

CREATE TABLE `difue` (
  `id` int(11) NOT NULL,
  `username` varchar() NOT NULL,
  `email` varchar() NOT NULL,
  `nama` varchar() NOT NULL,
  `gender` varchar() NOT NULL,
  `alamat` varchar() NOT NULL,
  `password` varchar() NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `difue`
--

INSERT INTO `db_difue` (`id`, `username`, `email`, `nama`, `gender`, `alamat`, `password`) VALUES
(1, 'elia', 'elia@gmai.com', 'elia', 'perempuan', 'banyuwagi', '1234'),
(2, 'elita', 'elita@gmai.com', 'elita', 'perempuan', 'jember', '12345'),

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `difue`
--
ALTER TABLE `difue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `difue`
--
ALTER TABLE `difue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;