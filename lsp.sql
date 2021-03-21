-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 02:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `metaname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `judul`, `slug`, `type`, `position`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '2', '1', '', '2021-03-18 01:18:58', '2021-03-18 01:18:58'),
(2, 'profile', 'Profile', '1', '2', NULL, '2021-03-18 01:39:19', '2021-03-18 02:25:54'),
(3, 'Sertifikasi', 'sertifikasi', '1', '3', NULL, '2021-03-18 01:39:42', '2021-03-18 02:26:03'),
(4, 'Media Informasi', 'media-informasi', '1', '4', NULL, '2021-03-18 01:40:14', '2021-03-18 02:26:11'),
(5, 'Kontak Kami', 'kontak-kami', '2', '5', NULL, '2021-03-18 01:40:50', '2021-03-18 02:25:39'),
(6, 'login', 'login', '2', '6', NULL, '2021-03-18 01:41:05', '2021-03-18 01:41:05'),
(7, 'FAQ', 'faq', '2', '4', NULL, '2021-03-18 03:22:24', '2021-03-18 03:22:44'),
(8, 'Visi Misi', 'visi-misi', '2', '2', NULL, '2021-03-18 03:28:31', '2021-03-18 03:28:42'),
(9, 'Fungsi Tujuan', 'Fungsi-tujuan', '2', '2', NULL, '2021-03-18 03:30:11', '2021-03-18 03:30:11'),
(10, 'Struktur dan Organisasi', 'struktur-organisasi', '2', '2', NULL, '2021-03-18 03:32:33', '2021-03-18 03:32:33'),
(11, 'Latar Belakang', 'latar-belakang', '2', '2', NULL, '2021-03-18 04:10:53', '2021-03-18 04:10:53'),
(12, 'Asesor', 'asesor', '2', '3', NULL, '2021-03-18 06:05:44', '2021-03-18 06:05:44'),
(13, 'Peserta Uji Komptensi', 'peserta-uji', '2', '3', NULL, '2021-03-18 06:08:31', '2021-03-18 06:08:31'),
(14, 'Skema Uji Komptensi', 'skema-uji', '2', '3', NULL, '2021-03-18 06:08:59', '2021-03-18 06:08:59'),
(15, 'Tempat Uji Komptensi', 'tempat-uji', '2', '3', NULL, '2021-03-18 06:09:43', '2021-03-18 06:09:43'),
(16, 'Galeri', 'galeri', '2', '4', NULL, '2021-03-18 06:12:28', '2021-03-18 06:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `judul`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'facebook', '', 'fab fa-facebook', '2021-03-18 01:44:05', '2021-03-18 01:44:05'),
(2, 'twitter', '', 'fab fa-twitter', '2021-03-18 01:44:43', '2021-03-18 01:44:43'),
(3, 'linkedin', '', 'fab fa-linkedin', '2021-03-18 01:45:11', '2021-03-18 01:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sub', '2021-03-18 01:17:17', '2021-03-18 01:17:17'),
(2, 'menu', '2021-03-18 01:17:26', '2021-03-18 01:17:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
