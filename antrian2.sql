-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2023 pada 23.55
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `status2` int(11) NOT NULL DEFAULT '0',
  `status3` int(11) NOT NULL DEFAULT '0',
  `status4` int(11) NOT NULL DEFAULT '0',
  `status5` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `status`, `status2`, `status3`, `status4`, `status5`) VALUES
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dysable`
--

CREATE TABLE `dysable` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dysable`
--

INSERT INTO `dysable` (`id`, `name`) VALUES
(1, 'agus'),
(2, 'edu'),
(3, 'adul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loketa`
--

CREATE TABLE `loketa` (
  `kodea` varchar(255) NOT NULL,
  `mejaa` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loketb`
--

CREATE TABLE `loketb` (
  `kodeb` varchar(255) NOT NULL,
  `mejab` varchar(255) NOT NULL,
  `datb` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loketc`
--

CREATE TABLE `loketc` (
  `kodec` varchar(255) NOT NULL,
  `mejac` varchar(255) NOT NULL,
  `datc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loketd`
--

CREATE TABLE `loketd` (
  `koded` varchar(255) NOT NULL,
  `mejad` varchar(255) NOT NULL,
  `datd` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokete`
--

CREATE TABLE `lokete` (
  `kodee` varchar(255) NOT NULL,
  `mejae` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_tabel_arsip`
--

CREATE TABLE `nama_tabel_arsip` (
  `id` int(11) NOT NULL,
  `kolom1` varchar(255) DEFAULT NULL,
  `kolom2` varchar(255) DEFAULT NULL,
  `kolom3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nama_tabel_arsip`
--

INSERT INTO `nama_tabel_arsip` (`id`, `kolom1`, `kolom2`, `kolom3`, `created_at`) VALUES
(1, '', '', '', '2023-12-11 09:39:16'),
(2, '', '', '', '2023-12-11 09:39:16'),
(3, '', '', '', '2023-12-11 09:39:16'),
(4, '', '', '', '2023-12-11 09:39:16'),
(5, '', '', '', '2023-12-11 09:39:16'),
(6, '', '', '', '2023-12-11 09:39:16'),
(7, '', '', '', '2023-12-11 09:39:16'),
(8, '', '', '', '2023-12-11 09:39:16'),
(9, '', '', '', '2023-12-11 09:39:16'),
(10, '', '', '', '2023-12-11 09:39:16'),
(11, '', '', '', '2023-12-11 09:39:16'),
(12, '', '', '', '2023-12-11 09:39:16'),
(13, '', '', '', '2023-12-11 09:39:16'),
(14, '', '', '', '2023-12-11 09:39:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

CREATE TABLE `rekap` (
  `kode` varchar(255) NOT NULL,
  `meja` varchar(255) NOT NULL,
  `dat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap`
--

INSERT INTO `rekap` (`kode`, `meja`, `dat`) VALUES
('A-01', 'Pengaduan', '14/December/2023'),
('A-02', 'Pengaduan', '15/December/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `status`) VALUES
(1, 'fadil', 'fadil100', '123', 0),
(2, 'syam', 'syam101', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dysable`
--
ALTER TABLE `dysable`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loketa`
--
ALTER TABLE `loketa`
  ADD PRIMARY KEY (`kodea`);

--
-- Indeks untuk tabel `loketb`
--
ALTER TABLE `loketb`
  ADD PRIMARY KEY (`kodeb`);

--
-- Indeks untuk tabel `loketc`
--
ALTER TABLE `loketc`
  ADD PRIMARY KEY (`kodec`);

--
-- Indeks untuk tabel `loketd`
--
ALTER TABLE `loketd`
  ADD PRIMARY KEY (`koded`);

--
-- Indeks untuk tabel `lokete`
--
ALTER TABLE `lokete`
  ADD PRIMARY KEY (`kodee`);

--
-- Indeks untuk tabel `nama_tabel_arsip`
--
ALTER TABLE `nama_tabel_arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dysable`
--
ALTER TABLE `dysable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nama_tabel_arsip`
--
ALTER TABLE `nama_tabel_arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
