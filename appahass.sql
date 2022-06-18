-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2022 at 04:46 AM
-- Server version: 5.7.18
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appahass`
--

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `group_materi` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `nama_materi`, `group_materi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'PANDUAN LKH.PDF', 'LKH', '2022-03-19 01:11:16', '2022-03-19 01:11:16', NULL),
(8, 'PANDUAN AHASS SYSTEM.PDF', 'ASY', '2022-03-19 01:11:41', '2022-03-19 01:11:41', NULL),
(18, '2.1 ASMO ID - PENDAFTARAN VIA DEKSTOP (KENDARAAN SUDAH TERDAFTAR).pdf', 'ASMO ID', '2022-03-22 20:59:09', '2022-03-22 20:59:09', NULL),
(19, '2.2 ASMO ID - PENDAFTARAN VIA DEKSTOP (KONSUMEN BELUM TERDAFTAR).pdf', 'ASMO ID', '2022-03-22 20:59:09', '2022-03-22 20:59:09', NULL),
(20, '1. JUKLAK AHASS SYSTEM - MASTER DATA JASA.pdf', 'ASY', '2022-03-22 21:00:03', '2022-03-22 21:00:03', NULL),
(21, '2. JUKLAK AHASS SYSTEM - MASTER DATA SPAREPART.pdf', 'ASY', '2022-03-22 21:00:03', '2022-03-22 21:00:03', NULL),
(22, '3. JUKLAK AHASS SYSTEM - MASTER DATA VENDOR.pdf', 'ASY', '2022-03-22 21:00:03', '2022-03-22 21:00:03', NULL),
(23, '4. JUKLAK AHASS SYSTEM - MASTER DATA KARYAWAN.pdf', 'ASY', '2022-03-22 21:00:03', '2022-03-22 21:00:03', NULL),
(24, 'TOOL DOWNLOAD ITI.pdf', 'ITI', '2022-03-22 22:09:41', '2022-03-22 22:09:41', NULL),
(25, 'TOOL DOWNLOAD SNI.pdf', 'SNI', '2022-03-22 22:09:56', '2022-03-22 22:09:56', NULL),
(26, '1. JUKLAK AHASS SYSTEM - MASTER DATA JASA.pdf', 'ASY', '2022-03-30 01:43:57', '2022-03-30 01:43:57', NULL),
(27, '2. JUKLAK AHASS SYSTEM - MASTER DATA SPAREPART.pdf', 'ASY', '2022-03-30 01:43:57', '2022-03-30 01:43:57', NULL),
(28, '3. JUKLAK AHASS SYSTEM - MASTER DATA VENDOR.pdf', 'ASY', '2022-03-30 01:43:57', '2022-03-30 01:43:57', NULL),
(29, '4. JUKLAK AHASS SYSTEM - MASTER DATA KARYAWAN.pdf', 'ASY', '2022-03-30 01:43:57', '2022-03-30 01:43:57', NULL),
(30, '5. JUKLAK AHASS SYSTEM - MASTER DATA PIT.pdf', 'ASY', '2022-03-30 01:43:57', '2022-03-30 01:43:57', NULL),
(31, '6. JUKLAK AHASS SYSTEM - MASTER DATA PIT MEKANIK.pdf', 'ASY', '2022-03-30 01:43:57', '2022-03-30 01:43:57', NULL),
(33, 'PANDUAN MOTIONH2.pdf', 'NSP', '2022-05-26 23:00:03', '2022-05-26 23:00:03', NULL),
(34, 'AHM-SNI-2022-0007_27-May-2022_09-35-14.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(35, 'AHM-SNI-2022-0008_27-May-2022_09-35-22.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(36, 'AHM-SNI-2022-0009_27-May-2022_09-35-29.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(37, 'AHM-SNI-2022-0010_27-May-2022_09-35-35.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(38, 'AHM-SNI-2022-0011_27-May-2022_09-35-39.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(39, 'AHM-SNI-2022-0013_27-May-2022_09-36-19.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(40, 'AHM-SNI-2022-0014_27-May-2022_09-36-46.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(41, 'AHM-SNI-2022-0015_27-May-2022_09-36-59.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(42, 'AHM-SNI-2022-0012_27-May-2022_09-37-29.pdf', 'SNI', '2022-05-26 23:01:46', '2022-05-26 23:01:46', NULL),
(44, 'ITI_INFORMASI_PENAMBAHAN_RUBBER_BATTERY_24-Mar-2022_08-20-59.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(45, 'ITI_INFORMASI_PENGAJUAN_KLAIM_FUEL_PUMP_24-Mar-2022_08-22-15.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(46, 'ITI_Download_Panduan_Part_No_24-Mar-2022_08-22-32.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(47, 'ITI_IDENTIFIKASI_MASALAH_DRIVE_PULLEY_24-Mar-2022_08-23-00.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(48, 'ITI_IDENTIFIKASI_MASALAH_OUTER_COMP_CLUTCH_24-Mar-2022_08-23-31.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(49, 'ITI_ALUR_PENANGANAN_BATTERY_24-Mar-2022_08-22-25.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(50, 'ITI_ALUR_KABEL_DLC_24-Mar-2022_08-20-36.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(51, 'ALUR_PENANGANAN_BATTERY_24-Mar-2022_08-20-23.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(52, 'IK_Pengemasan_Part_Claim_Mudah_Pecah_24-Mar-2022_08-21-09.pdf', 'ITI', '2022-05-26 23:02:27', '2022-05-26 23:02:27', NULL),
(53, 'Alur Penanganan Claim di AHASS.PDF', 'CLAIM', '2022-05-27 02:01:18', '2022-05-27 02:01:18', NULL),
(54, 'Kebijakan Penanggungjawab Claim dan LKH di AHASS.PDF', 'CLAIM', '2022-05-27 02:01:18', '2022-05-27 02:01:18', NULL),
(55, 'Ketentuan garansi Sepeda Motor Honda.PDF', 'CLAIM', '2022-05-27 02:01:18', '2022-05-27 02:01:18', NULL),
(56, 'Warranty Claim Policy 2018_For AHASS.PDF', 'CLAIM', '2022-05-27 02:01:18', '2022-05-27 02:01:18', NULL),
(57, 'Warranty Operasional Manual Odner (WOMO).PDF', 'CLAIM', '2022-05-27 02:01:18', '2022-05-27 02:01:18', NULL),
(58, 'Guidance Material Promosi & Publikasi AHASS.PDF', 'NSP', '2022-05-27 02:02:50', '2022-05-27 02:02:50', NULL),
(59, 'Panduan download apk Motion H2.PDF', 'NSP', '2022-05-27 02:02:50', '2022-05-27 02:02:50', NULL),
(60, 'Panduan Penggunaan Motion H2.PDF', 'NSP', '2022-05-27 02:02:50', '2022-05-27 02:02:50', NULL),
(61, 'User ID Motion H2.PDF', 'NSP', '2022-05-27 02:02:50', '2022-05-27 02:02:50', NULL),
(62, 'Cara memilih kode part utama.PDF', 'LKH', '2022-05-31 00:41:56', '2022-05-31 00:41:56', NULL),
(63, 'Cara memilih tanggal dan jam kejadian.PDF', 'LKH', '2022-05-31 00:41:56', '2022-05-31 00:41:56', NULL),
(64, 'Cara mencari Rank.PDF', 'LKH', '2022-05-31 00:41:56', '2022-05-31 00:41:56', NULL),
(65, 'Cara mencari symptom code .PDF', 'LKH', '2022-05-31 00:41:56', '2022-05-31 00:41:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1644987945, 1),
(2, '2022-04-21-025247', 'App\\Database\\Migrations\\Users', 'default', 'App', 1650509871, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nm_group`
--

CREATE TABLE `nm_group` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_materi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nm_group`
--

INSERT INTO `nm_group` (`id`, `group_materi`) VALUES
(1, 'LKH'),
(2, 'ASY'),
(3, 'CLAIM'),
(4, 'ITI'),
(5, 'SNI'),
(6, 'ASMO ID'),
(7, 'NSP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `role`, `created_at`, `updated_at`) VALUES
('admin11', '$2y$10$pTSjSLMPNbIGoyVedo3p8OHQwEMrqwr1rCyvUlM7f2EJvAwYCib5K', 'Super Admin', 1, '2022-05-30 01:09:39', '2022-06-17 00:00:00'),
('ahass.jateng', '$2y$10$rwixlmSWZJVfQqliE.p/c.Ue6Vj9g4fAPTkSzZQmekU6nsK2399Ee', 'Ahass Jateng', 2, '2022-06-17 20:39:49', '2022-06-17 20:39:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nm_group`
--
ALTER TABLE `nm_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nm_group`
--
ALTER TABLE `nm_group`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
