-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2021 pada 08.42
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_sample`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(175) DEFAULT NULL,
  `nama_lengkap` varchar(85) DEFAULT NULL,
  `tingkat` varchar(75) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `username`, `nama_lengkap`, `tingkat`, `alamat`, `password`, `usia`, `tgl_masuk`, `created_at`, `updated_at`) VALUES
(1, 'ronaldo', 'Ronald Anak Orang', '1', 'disana aja', '$2y$10$Qu30xXtdul0d6pIezIlMS.C4u5UHyMnLvLtspi7nfc7knnwysywJS', 12, '2021-10-01', '2021-10-01 01:39:15', '2021-10-01 01:39:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
