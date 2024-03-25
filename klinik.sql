-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 05:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pemeriksaan`
--

CREATE TABLE `daftar_pemeriksaan` (
  `antrian` int(10) NOT NULL,
  `pasien` bigint(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tgl_kontrol` date NOT NULL,
  `layanan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_pemeriksaan`
--

INSERT INTO `daftar_pemeriksaan` (`antrian`, `pasien`, `jenis_kelamin`, `tgl_kontrol`, `layanan`) VALUES
(4, 1209202410980002, 'Pria', '2024-01-05', 1),
(5, 1209202410980002, 'Pria', '2024-01-11', 1),
(6, 1209202410980002, 'Pria', '2024-02-01', 2),
(7, 1209202410980002, 'Pria', '0000-00-00', 1),
(8, 1209202410980002, 'Pria', '0000-00-00', 1),
(9, 1209202410980002, 'Pria', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pelayanan` date NOT NULL,
  `jam_pelayanan` time NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `tgl_pelayanan`, `jam_pelayanan`, `jabatan`) VALUES
(1, 'Vantri', '2023-12-26', '10:00:00', 'Dokter Kepala');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(2) NOT NULL,
  `title_layanan` varchar(100) NOT NULL,
  `desc_layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `title_layanan`, `desc_layanan`) VALUES
(1, 'Layanan Poli Umum', 'Merupakan salah satu layanan yang ada di Klinik Baloi Batam yang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat agar tidak terjadi penularan dan komplikasi penyakit, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan. Pelayanan kesehatan dilakukan oleh dokter dan perawat yang memiliki sertifikat dan kompetensi yang dibutuhkan untuk pelayanan kesehatan primer.'),
(2, 'Layanan Poli Gigi dan Kesehatan Mulut', 'Layanan poli gigi dan kesegatan mulut merupakan salah satu dari jenis layanan di puskesmas yang memberikan pelayanan kesehatan gigi dan mulut berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut.');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `id_shadow` varchar(100) NOT NULL,
  `no_ktp` bigint(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `id_shadow`, `no_ktp`, `nama`, `no_hp`, `jenis_kelamin`, `alamat`, `password`, `status`) VALUES
(36, 'ec1d66bd18b2f0f1', 1209202410980002, 'Vantri A Simanjuntak', '085358904344', 'Pria', 'Kisaran', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Aktif'),
(37, 'bb1da22ad5f02425', 1209202410980003, 'Findy Christy', '085358904343', 'Pria', 'Nias', '4297f44b13955235245b2497399d7a93', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_rekammedis` int(10) NOT NULL,
  `antrian_pemeriksaan` int(10) NOT NULL,
  `dokter_pemeriksa` int(4) NOT NULL,
  `no_kwitansi` int(10) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_rekammedis`, `antrian_pemeriksaan`, `dokter_pemeriksa`, `no_kwitansi`, `catatan`) VALUES
(7, 5, 1, 0, 'asdadsad'),
(418, 5, 1, 0, 'asdadsad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no_ktp` bigint(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no_ktp`, `nama`, `alamat`, `jenis_kelamin`, `status`, `no_hp`, `password`) VALUES
(1209202410980002, 'Vantri A Simanjuntak', 'Kisaran', 'Pria', 'Aktif', '085358904344', 'f6fdffe48c908deb0f4c3bd36c032e72'),
(1209202410980003, 'Findy Christy', 'Nias', 'Pria', 'Aktif', '085358904343', '4297f44b13955235245b2497399d7a93');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_pemeriksaan`
--
ALTER TABLE `daftar_pemeriksaan`
  ADD PRIMARY KEY (`antrian`),
  ADD KEY `layanan` (`layanan`),
  ADD KEY `id_pasien` (`pasien`) USING BTREE;

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_rekammedis`),
  ADD KEY `pasien` (`antrian_pemeriksaan`),
  ADD KEY `dokter_pemeriksa` (`dokter_pemeriksa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no_ktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pemeriksaan`
--
ALTER TABLE `daftar_pemeriksaan`
  MODIFY `antrian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `no_rekammedis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pemeriksaan`
--
ALTER TABLE `daftar_pemeriksaan`
  ADD CONSTRAINT `daftar_pemeriksaan_ibfk_1` FOREIGN KEY (`layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `daftar_pemeriksaan_ibfk_2` FOREIGN KEY (`pasien`) REFERENCES `user` (`no_ktp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`antrian_pemeriksaan`) REFERENCES `daftar_pemeriksaan` (`antrian`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`dokter_pemeriksa`) REFERENCES `dokter` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
