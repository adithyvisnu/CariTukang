-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Okt 2015 pada 05.27
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ayomaju`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_juragan`
--

CREATE TABLE IF NOT EXISTS `tb_juragan` (
`ID_juragan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_juragan`
--

INSERT INTO `tb_juragan` (`ID_juragan`, `nama`, `alamat`, `telp`, `password`, `level`) VALUES
(1, 'Adithya Visnu', 'Jl. Cihanjuang Gg Bp Sai no 19b RT 01 RW 03 Cimahi', '089655180881', '76fa561a9583e503202de5da03f9958f', 3),
(2, 'Alfan Fauzy', 'Jln. Kembang Mawar Gg. Panday no 15 RT 01/03 Kota Malang, Jawa Timur', '082114009640', 'f22f94bd0590fb3bdb5b359c0ffa9e1c', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keahlian`
--

CREATE TABLE IF NOT EXISTS `tb_keahlian` (
`ID_keahlian` int(11) NOT NULL,
  `keahlian` varchar(255) DEFAULT NULL,
  `keyword` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tb_keahlian`
--

INSERT INTO `tb_keahlian` (`ID_keahlian`, `keahlian`, `keyword`) VALUES
(1, 'Tukang Las Baja', 'Seng Bocor, ganti knalpot'),
(2, 'Tukang Pipa', 'sumur rusak, ganti paralon'),
(3, 'Tukang Kayu', 'ganti kusen, jendela rusak'),
(4, 'Sedot WC', 'WC mampet'),
(5, 'Tukang Bangunan', 'ganti atap, genteng bocor'),
(6, 'Tukang Bangunan Khusus Atap', 'atap bocor, ganti genteng'),
(7, 'Supir', 'Supir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerja`
--

CREATE TABLE IF NOT EXISTS `tb_pekerja` (
`ID_pekerja` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `ID_keahlian` int(11) DEFAULT NULL,
  `bayaran` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT '0',
  `id_penambah` int(11) NOT NULL,
  `level_penambah` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tb_pekerja`
--

INSERT INTO `tb_pekerja` (`ID_pekerja`, `nama`, `alamat`, `telp`, `ID_keahlian`, `bayaran`, `rating`, `id_penambah`, `level_penambah`, `foto`) VALUES
(2, 'Dwi Cahyo', 'Depok dekat Margonda Raya', '089655132212', 4, 'Rp. 500.000 per minggu', 1, 3, 2, '1.JPG'),
(3, 'Alfan Fauzy', 'Jl Malang Mekar Mewangi', '082114009640', 2, 'Rp. 35.000 ', 1, 1, 3, '2.JPG'),
(4, 'Atep Rizal', 'Bandung', '089121231231', 5, 'Rp. 500.000 per 30 menit', 0, 1, 2, '3.JPG'),
(5, 'Dadang', 'Cimahi Cihanjuang Karangmekar', '081234567890', 5, 'Rp. 75.000 per hari', 1, 1, 2, '4.JPG'),
(7, 'Rangga Pratama', 'Bekasi', '081228229991', 3, 'Rp. 50.000 / Hari', 0, 1, 2, '5.JPG'),
(8, 'Badrun', 'Komplek Permata Bandung Barat', '081288183888', 7, 'Rp. 125.000 per hari', 0, 1, 3, 'Liverbird.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perangkat_desa`
--

CREATE TABLE IF NOT EXISTS `tb_perangkat_desa` (
`id` int(4) NOT NULL,
  `nomor_ktp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL DEFAULT '2'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_perangkat_desa`
--

INSERT INTO `tb_perangkat_desa` (`id`, `nomor_ktp`, `alamat`, `nama`, `username`, `password`, `level`) VALUES
(1, '3277031906960024', 'Jln. Cihanjuang Gg Bp Sai no 19b RT 01/03, Cimahi, Jawa Barat', 'Adithya Visnu', 'rt1', '5eb6f7c468ae4d92813a8db00127150e', 2),
(3, '3277081726639102', 'Jl. Cihanjuang Gg Bp Sa''i no 19b RT 02/03', 'Marwan', 'rt2', '5be67878c1507e177321fef4f0b2ebbb', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_review`
--

CREATE TABLE IF NOT EXISTS `tb_review` (
`id_review` int(11) NOT NULL,
  `id_pekerja` int(11) NOT NULL,
  `id_pereview` int(11) NOT NULL,
  `level_pereview` int(2) NOT NULL,
  `review` text NOT NULL,
  `likes` enum('1','0') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_review`
--

INSERT INTO `tb_review` (`id_review`, `id_pekerja`, `id_pereview`, `level_pereview`, `review`, `likes`) VALUES
(1, 5, 2, 1, 'bagus nih, keren', '1'),
(2, 2, 2, 1, 'Biasa saja', '0'),
(3, 2, 2, 1, 'kalau sekarang bagus sih', '1'),
(4, 3, 1, 2, 'Bagus nih keren baget kerjanya', '1'),
(5, 5, 1, 3, 'kurang bagus euy', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_juragan`
--
ALTER TABLE `tb_juragan`
 ADD PRIMARY KEY (`ID_juragan`), ADD UNIQUE KEY `telp` (`telp`);

--
-- Indexes for table `tb_keahlian`
--
ALTER TABLE `tb_keahlian`
 ADD PRIMARY KEY (`ID_keahlian`);

--
-- Indexes for table `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
 ADD PRIMARY KEY (`ID_pekerja`), ADD KEY `ID_keahlian` (`ID_keahlian`);

--
-- Indexes for table `tb_perangkat_desa`
--
ALTER TABLE `tb_perangkat_desa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
 ADD PRIMARY KEY (`id_review`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_juragan`
--
ALTER TABLE `tb_juragan`
MODIFY `ID_juragan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_keahlian`
--
ALTER TABLE `tb_keahlian`
MODIFY `ID_keahlian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
MODIFY `ID_pekerja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_perangkat_desa`
--
ALTER TABLE `tb_perangkat_desa`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
ADD CONSTRAINT `keahlian` FOREIGN KEY (`ID_keahlian`) REFERENCES `tb_keahlian` (`ID_keahlian`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
