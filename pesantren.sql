-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2019 pada 06.26
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantren`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_hafalan`
--

CREATE TABLE `db_tbl_hafalan` (
  `id_hafalan` varchar(10) NOT NULL,
  `tanggal_hafalan` date NOT NULL,
  `pencapaian_hafalan` int(255) NOT NULL,
  `id_santri` varchar(10) NOT NULL,
  `id_ustad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_pesan`
--

CREATE TABLE `db_tbl_pesan` (
  `id_pesan` varchar(10) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` int(255) NOT NULL,
  `pesan` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_santri`
--

CREATE TABLE `db_tbl_santri` (
  `id_santri` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` int(255) NOT NULL,
  `asal` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_softskill`
--

CREATE TABLE `db_tbl_softskill` (
  `id_softskill` varchar(10) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `id_santri` varchar(10) NOT NULL,
  `pidato` int(255) NOT NULL,
  `imam` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_ustad`
--

CREATE TABLE `db_tbl_ustad` (
  `id_ustad` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` int(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_tbl_hafalan`
--
ALTER TABLE `db_tbl_hafalan`
  ADD PRIMARY KEY (`id_hafalan`),
  ADD KEY `id_santri` (`id_santri`),
  ADD KEY `id_ustad` (`id_ustad`);

--
-- Indeks untuk tabel `db_tbl_pesan`
--
ALTER TABLE `db_tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `db_tbl_santri`
--
ALTER TABLE `db_tbl_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indeks untuk tabel `db_tbl_softskill`
--
ALTER TABLE `db_tbl_softskill`
  ADD PRIMARY KEY (`id_softskill`),
  ADD KEY `id_santri` (`id_santri`);

--
-- Indeks untuk tabel `db_tbl_ustad`
--
ALTER TABLE `db_tbl_ustad`
  ADD PRIMARY KEY (`id_ustad`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `db_tbl_hafalan`
--
ALTER TABLE `db_tbl_hafalan`
  ADD CONSTRAINT `db_tbl_hafalan_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `db_tbl_santri` (`id_santri`),
  ADD CONSTRAINT `db_tbl_hafalan_ibfk_2` FOREIGN KEY (`id_ustad`) REFERENCES `db_tbl_ustad` (`id_ustad`);

--
-- Ketidakleluasaan untuk tabel `db_tbl_pesan`
--
ALTER TABLE `db_tbl_pesan`
  ADD CONSTRAINT `db_tbl_pesan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `db_tbl_ustad` (`id_ustad`),
  ADD CONSTRAINT `db_tbl_pesan_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `db_tbl_santri` (`id_santri`);

--
-- Ketidakleluasaan untuk tabel `db_tbl_softskill`
--
ALTER TABLE `db_tbl_softskill`
  ADD CONSTRAINT `db_tbl_softskill_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `db_tbl_santri` (`id_santri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
