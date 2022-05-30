-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 05.00
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Imperfect', 'Meira', 'Gramedia', 2018),
(2, 'Garis Waktu', 'Fiersa Besari', 'Media Kita', 2016),
(3, 'Danur', 'Risa Saraswati', 'Bukune', 2011),
(4, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005),
(5, 'Dikta & Hukum', 'Dhia\'an Farah', 'PT Sembilan Cahaya Abadi', 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`, `password`) VALUES
(1, 'Bryan', '123111', 'Banjarmasin', '2022-03-09 13:04:03', '2022-05-03', '1234561'),
(2, 'Dasha', '123112', 'Banjarmasin', '2022-02-15 15:04:03', '2022-05-02', '1234562'),
(3, 'Kinan', '123113', 'Banjarmasin', '2022-03-08 12:10:22', '2022-05-04', '1234563'),
(4, 'Keshi', '123114', 'Jl. Bunga', '2022-05-03 00:00:00', '2022-05-03', '1234564'),
(5, 'Didi', '123115', 'Jl. Melati', '2022-04-21 00:00:00', '2022-05-04', '1234565'),
(6, 'Niki', '123116', 'Jl. Anggrek', '2022-03-05 00:00:00', '2022-05-03', '1234566'),
(7, 'Robert', '123117', 'Jl. Apel', '2022-02-10 00:00:00', '2022-05-11', '1234567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjam` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjam`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-04-17', '2022-04-24'),
(2, '2022-04-18', '2022-04-25'),
(3, '2022-05-03', '2022-05-10'),
(4, '2022-05-07', '2022-05-18'),
(5, '2022-04-06', '2022-04-12'),
(6, '2022-04-14', '2022-04-21'),
(7, '2022-05-10', '2022-05-17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
