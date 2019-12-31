-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2019 pada 06.30
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
-- Struktur dari tabel `db_tbl_admin`
--

CREATE TABLE `db_tbl_admin` (
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_tbl_admin`
--

INSERT INTO `db_tbl_admin` (`username`, `email`, `nama`, `password`) VALUES
('M3118076', 'rike@gmail.com', 'RIKE AQILA NURFI', 'cantik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_hafalan`
--

CREATE TABLE `db_tbl_hafalan` (
  `id_hafalan` varchar(10) NOT NULL,
  `tanggal_hafalan` date NOT NULL,
  `surah` varchar(255) NOT NULL,
  `juz` int(255) NOT NULL,
  `pencapaian_hafalan` int(255) NOT NULL,
  `id_santri` varchar(10) NOT NULL,
  `id_ustad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_tbl_hafalan`
--

INSERT INTO `db_tbl_hafalan` (`id_hafalan`, `tanggal_hafalan`, `surah`, `juz`, `pencapaian_hafalan`, `id_santri`, `id_ustad`) VALUES
('HA00001', '2019-09-12', 'Al - Baqarah', 1, 2, 'SANTR0001', 'UST0004'),
('HA00002', '2019-09-17', 'Al - Baqarah', 1, 3, 'SANTR0001', 'UST0004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_pelanggaran`
--

CREATE TABLE `db_tbl_pelanggaran` (
  `id_pelanggaran` varchar(10) NOT NULL,
  `id_santri` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggaran` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_tbl_pelanggaran`
--

INSERT INTO `db_tbl_pelanggaran` (`id_pelanggaran`, `id_santri`, `tanggal`, `pelanggaran`, `keterangan`) VALUES
('PG00001', 'SANTR0001', '2019-09-09', 'Merokok', 'Pada malam hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_santri`
--

CREATE TABLE `db_tbl_santri` (
  `id_santri` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_tbl_santri`
--

INSERT INTO `db_tbl_santri` (`id_santri`, `nama`, `kelas`, `asal`, `email`, `password`) VALUES
('SANTR0001', 'RIko Isnaini', '10', 'boyolali', 'riko@gmail.com', 'riko'),
('SANTR0002', 'Ritonawa Uga', '10', 'batam', 'uga@mail.com', 'elek'),
('SANTR0012', 'lala manis', '12', 'omahlu', 'omah@mail.com', 'sisiap'),
('SANTR0111', 'Ryanito Filza', '12', 'Karanganyar', 'ito@santri.com', 'itoito');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tbl_softskill`
--

CREATE TABLE `db_tbl_softskill` (
  `id_softskill` varchar(10) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `id_santri` varchar(10) NOT NULL,
  `id_ustad` varchar(20) NOT NULL,
  `pidato` int(255) NOT NULL,
  `imam` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_tbl_softskill`
--

INSERT INTO `db_tbl_softskill` (`id_softskill`, `tanggal_pelaksanaan`, `id_santri`, `id_ustad`, `pidato`, `imam`) VALUES
('SK00001', '2019-01-09', 'SANTR0001', 'UST0001', 6, 7),
('SK00002', '2019-09-12', 'SANTR0002', 'UST0004', 3, 4),
('SK00003', '2019-09-13', 'SANTR0002', 'UST0004', 1, 1);

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
-- Dumping data untuk tabel `db_tbl_ustad`
--

INSERT INTO `db_tbl_ustad` (`id_ustad`, `nama`, `nip`, `password`, `email`) VALUES
('UST0001', 'Tufel', 1234567890, '12345', 'tufel@staff.pesantren.com'),
('UST0002', 'riski', 109432294, '12345', 'riski@admin.com'),
('UST0003', 'Risky Miusdi', 2147483647, '12345', 'riski@ustad.com'),
('UST0004', 'Tufeil Noor', 987654321, 'tufeil', 'tufeil@ustad.com'),
('UST0005', 'Rendi Jaka', 2147483647, 'rendi', 'rendi@ustad.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_tbl_admin`
--
ALTER TABLE `db_tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `db_tbl_hafalan`
--
ALTER TABLE `db_tbl_hafalan`
  ADD PRIMARY KEY (`id_hafalan`),
  ADD KEY `id_santri` (`id_santri`),
  ADD KEY `id_ustad` (`id_ustad`);

--
-- Indeks untuk tabel `db_tbl_pelanggaran`
--
ALTER TABLE `db_tbl_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `id_santri` (`id_santri`);

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
  ADD KEY `id_santri` (`id_santri`),
  ADD KEY `id_ustad` (`id_ustad`);

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
-- Ketidakleluasaan untuk tabel `db_tbl_pelanggaran`
--
ALTER TABLE `db_tbl_pelanggaran`
  ADD CONSTRAINT `db_tbl_pelanggaran_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `db_tbl_santri` (`id_santri`);

--
-- Ketidakleluasaan untuk tabel `db_tbl_softskill`
--
ALTER TABLE `db_tbl_softskill`
  ADD CONSTRAINT `db_tbl_softskill_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `db_tbl_santri` (`id_santri`),
  ADD CONSTRAINT `db_tbl_softskill_ibfk_2` FOREIGN KEY (`id_ustad`) REFERENCES `db_tbl_ustad` (`id_ustad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
