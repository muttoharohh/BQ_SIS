-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 04:11 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bq_sis`
--
CREATE DATABASE IF NOT EXISTS `bq_sis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bq_sis`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_23_090119_create_sdsatus_table', 1),
(2, '2019_08_02_075115_create_sdduas_table', 2),
(3, '2019_08_02_093758_create_sdtigas_table', 3),
(4, '2019_08_02_095456_create_sdempats_table', 4),
(5, '2019_08_02_100717_create_sdlimas_table', 5),
(6, '2019_08_02_101411_create_sdenams_table', 6),
(7, '2019_08_04_083457_create_smpsatus_table', 7),
(8, '2019_08_04_085803_create_smpduas_table', 8),
(9, '2019_08_04_091721_create_smptigas_table', 9),
(10, '2019_08_04_094459_create_smasatus_table', 10),
(11, '2019_08_04_095912_create_smaduas_table', 11),
(12, '2019_08_04_100539_create_smatigas_table', 12),
(13, '2019_08_04_101123_create_soshums_table', 13),
(14, '2019_08_04_101955_create_sainteks_table', 14),
(15, '2019_08_04_110059_create_users_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `sainteks`
--

DROP TABLE IF EXISTS `sainteks`;
CREATE TABLE `sainteks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sainteks`
--

INSERT INTO `sainteks` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/saintek/media1.mp4', 'upload/dokumen/saintek/join.pdf', NULL, '2019-08-08 00:04:00'),
(2, 'Matematika', 'Penambahan', 'upload/video/saintek/media2.mp4', 'upload/dokumen/saintek/join.pdf', NULL, '2019-08-08 00:04:14'),
(3, 'Matematika', 'Perkalian', 'upload/video/saintek/media3.mp4', 'upload/dokumen/saintek/join.pdf', NULL, '2019-08-08 00:04:27'),
(4, 'Matematika', 'Pembagian', 'upload/video/saintek/media4.mp4', 'upload/dokumen/saintek/join.pdf', NULL, '2019-08-08 00:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `sdduas`
--

DROP TABLE IF EXISTS `sdduas`;
CREATE TABLE `sdduas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdduas`
--

INSERT INTO `sdduas` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/sd2/media1.mp4', 'upload/dokumen/sd2/join.pdf', NULL, '2019-08-07 23:50:49'),
(2, 'Matematika', 'Penambahan', 'upload/video/sd2/media2.mp4', 'upload/dokumen/sd2/join.pdf', NULL, '2019-08-07 23:51:16'),
(3, 'Matematika', 'Perkalian', 'upload/video/sd2/media3.mp4', 'upload/dokumen/sd2/join.pdf', NULL, '2019-08-07 23:51:39'),
(4, 'Matematika', 'Pembagian', 'upload/video/sd2/media4.mp4', 'upload/dokumen/sd2/join.pdf', NULL, '2019-08-07 23:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `sdempats`
--

DROP TABLE IF EXISTS `sdempats`;
CREATE TABLE `sdempats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdempats`
--

INSERT INTO `sdempats` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/sd4/media1.mp4', 'upload/dokumen/sd4/join.pdf', NULL, '2019-08-07 23:54:28'),
(2, 'Matematika', 'Penambahan', 'upload/video/sd4/media2.mp4', 'upload/dokumen/sd4/join.pdf', NULL, '2019-08-07 23:54:19'),
(3, 'Matematika', 'Perkalian', 'upload/video/sd4/media3.mp4', 'upload/dokumen/sd4/join.pdf', NULL, '2019-08-07 23:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `sdenams`
--

DROP TABLE IF EXISTS `sdenams`;
CREATE TABLE `sdenams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdenams`
--

INSERT INTO `sdenams` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/sd6/media1.mp4', 'upload/dokumen/sd6/join.pdf', NULL, '2019-08-07 07:39:18'),
(2, 'Matematika', 'Penambahan', 'upload/video/sd6/media2.mp4', 'upload/dokumen/sd6/join.pdf', NULL, '2019-08-07 23:57:36'),
(3, 'Matematika', 'Perkalian', 'upload/video/sd6/media3.mp4', 'upload/dokumen/sd6/join.pdf', NULL, '2019-08-07 23:57:49'),
(5, 'Bahasa Inggris', 'Reading', 'upload/video/sd6/media4.mp4', 'upload/dokumen/sd6/join.pdf', '2019-08-07 07:39:34', '2019-08-07 23:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `sdlimas`
--

DROP TABLE IF EXISTS `sdlimas`;
CREATE TABLE `sdlimas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdlimas`
--

INSERT INTO `sdlimas` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/sd5/media1.mp4', 'upload/dokumen/sd5/join.pdf', NULL, '2019-08-07 23:55:22'),
(2, 'Matematika', 'Penambahan', 'upload/video/sd5/media2.mp4', 'upload/dokumen/sd5/join.pdf', NULL, '2019-08-07 23:56:39'),
(3, 'Matematika', 'Perkalian', 'upload/video/sd5/media3.mp4', 'upload/dokumen/sd5/join.pdf', NULL, '2019-08-07 23:56:52'),
(4, 'Matematika', 'Pembagian', 'upload/video/sd5/media4.mp4', 'upload/dokumen/sd5/join.pdf', NULL, '2019-08-07 23:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `sdsatus`
--

DROP TABLE IF EXISTS `sdsatus`;
CREATE TABLE `sdsatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdsatus`
--

INSERT INTO `sdsatus` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(2, 'Matematika', 'Penambahan', 'upload/video/sd1/media2.mp4', 'upload/dokumen/sd1/join.pdf', NULL, '2019-08-06 07:10:11'),
(14, 'Matematika', 'Pengurangan', 'upload/video/sd1/media1.mp4', 'upload/dokumen/sd1/join.pdf', '2019-08-06 06:56:52', '2019-08-07 23:49:40'),
(15, 'Matematika', 'Pembagian', 'upload/video/sd1/media3.mp4', 'upload/dokumen/sd1/join.pdf', '2019-08-06 07:26:09', '2019-08-07 23:49:59'),
(17, 'Bahasa Indonesia', 'Membaca', 'upload/video/sd1/media4.mp4', 'upload/dokumen/sd1/join.pdf', '2019-08-07 11:26:02', '2019-08-07 23:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `sdtigas`
--

DROP TABLE IF EXISTS `sdtigas`;
CREATE TABLE `sdtigas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdtigas`
--

INSERT INTO `sdtigas` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/sd3/media1.mp4', 'upload/dokumen/sd3/join.pdf', NULL, '2019-08-07 23:52:42'),
(2, 'Matematika', 'Penambahan', 'upload/video/sd3/media2.mp4', 'upload/dokumen/sd3/join.pdf', NULL, '2019-08-07 06:31:30'),
(3, 'Matematika', 'Perkalian', 'upload/video/sd3/media3.mp4', 'upload/dokumen/sd3/join.pdf', NULL, '2019-08-07 23:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `smaduas`
--

DROP TABLE IF EXISTS `smaduas`;
CREATE TABLE `smaduas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smaduas`
--

INSERT INTO `smaduas` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/sma2/media1.mp4', 'upload/dokumen/sma2/join.pdf', NULL, '2019-08-08 00:01:45'),
(2, 'Matematika', 'Penambahan', 'upload/video/sma2/media2.mp4', 'upload/dokumen/sma2/join.pdf', NULL, '2019-08-08 00:01:57'),
(3, 'Matematika', 'Perkalian', 'upload/video/sma2/media3.mp4', 'upload/dokumen/sma2/join.pdf', NULL, '2019-08-08 00:02:13'),
(4, 'Matematika', 'Pembagian', 'upload/video/sma2/media4.mp4', 'upload/dokumen/sma2/join.pdf', NULL, '2019-08-08 00:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `smasatus`
--

DROP TABLE IF EXISTS `smasatus`;
CREATE TABLE `smasatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smasatus`
--

INSERT INTO `smasatus` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/sma1/media1.mp4', 'upload/dokumen/sma1/join.pdf', NULL, '2019-08-08 00:00:35'),
(2, 'Matematika', 'Penambahan', 'upload/video/sma1/media2.mp4', 'upload/dokumen/sma1/join.pdf', NULL, '2019-08-08 00:00:50'),
(3, 'Matematika', 'Perkalian', 'upload/video/sma1/media3.mp4', 'upload/dokumen/sma1/join.pdf', NULL, '2019-08-08 00:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `smatigas`
--

DROP TABLE IF EXISTS `smatigas`;
CREATE TABLE `smatigas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smatigas`
--

INSERT INTO `smatigas` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/sma3/media1.mp4', 'upload/dokumen/sma3/join.pdf', NULL, '2019-08-08 00:02:47'),
(2, 'Matematika', 'Penambahan', 'upload/video/sma3/media2.mp4', 'upload/dokumen/sma3/join.pdf', NULL, '2019-08-08 00:03:02'),
(3, 'Matematika', 'Perkalian', 'upload/video/sma3/media3.mp4', 'upload/dokumen/sma3/join.pdf', NULL, '2019-08-08 00:03:20'),
(4, 'Matematika', 'Pembagian', 'upload/video/sma3/media4.mp4', 'upload/dokumen/sma3/join.pdf', NULL, '2019-08-08 00:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `smpduas`
--

DROP TABLE IF EXISTS `smpduas`;
CREATE TABLE `smpduas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smpduas`
--

INSERT INTO `smpduas` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/smp2/media1.mp4', 'upload/dokumen/sd2/join.pdf', NULL, '2019-08-07 23:59:21'),
(2, 'Matematika', 'Penambahan', 'upload/video/smp2/media2.mp4', 'upload/dokumen/sd2/join.pdf', NULL, '2019-08-07 23:59:34'),
(3, 'Matematika', 'Perkalian', 'upload/video/smp2/media3.mp4', 'upload/dokumen/sd2/join.pdf', NULL, '2019-08-07 23:59:46'),
(4, 'Matematika', 'Pembagian', 'upload/video/smp2/media4.mp4', 'upload/dokumen/smp2/join.pdf', NULL, '2019-08-07 08:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `smpsatus`
--

DROP TABLE IF EXISTS `smpsatus`;
CREATE TABLE `smpsatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smpsatus`
--

INSERT INTO `smpsatus` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/smp1/media1.mp4', 'upload/dokumen/smp1/join.pdf', NULL, '2019-08-07 23:58:25'),
(2, 'Matematika', 'Penambahan', 'upload/video/smp1/media2.mp4', 'upload/dokumen/smp1/join.pdf', NULL, '2019-08-07 23:58:38'),
(3, 'Matematika', 'Perkalian', 'upload/video/smp1/media3.mp4', 'upload/dokumen/smp1/join.pdf', NULL, '2019-08-07 23:58:55'),
(4, 'Matematika', 'Pembagian', 'upload/video/smp1/media4.mp4', 'upload/dokumen/smp1/join.pdf', NULL, '2019-08-07 08:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `smptigas`
--

DROP TABLE IF EXISTS `smptigas`;
CREATE TABLE `smptigas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smptigas`
--

INSERT INTO `smptigas` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/smp3/media1.mp4', 'upload/dokumen/smp3/join.pdf', NULL, '2019-08-08 00:00:03'),
(2, 'Matematika', 'Penambahan', 'upload/video/smp3/media2.mp4', 'upload/dokumen/smp3/join.pdf', NULL, '2019-08-07 09:01:32'),
(3, 'Matematika', 'Perkalian', 'upload/video/smp3/media3.mp4', 'upload/dokumen/smp3/join.pdf', NULL, '2019-08-07 09:01:12'),
(4, 'Matematika', 'Pembagian', 'upload/video/smp3/media4.mp4', 'upload/dokumen/smp3/join.pdf', NULL, '2019-08-08 00:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `soshums`
--

DROP TABLE IF EXISTS `soshums`;
CREATE TABLE `soshums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videopel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soshums`
--

INSERT INTO `soshums` (`id`, `mapel`, `judul`, `videopel`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Pengurangan', 'upload/video/soshum/media1.mp4', 'upload/dokumen/soshum/join.pdf', NULL, '2019-08-08 00:05:26'),
(2, 'Matematika', 'Penambahan', 'upload/video/soshum/media2.mp4', 'upload/dokumen/soshum/join.pdf', NULL, '2019-08-08 00:05:38'),
(3, 'Matematika', 'Perkalian', 'upload/video/soshum/media3.mp4', 'upload/dokumen/soshum/join.pdf', NULL, '2019-08-08 00:05:50'),
(4, 'Matematika', 'Pembagian', 'upload/video/soshum/media2.mp4', 'upload/dokumen/soshum/join.pdf', NULL, '2019-08-08 00:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'saga', 'muttoharoh10@gmail.com', '$2y$10$Z076MVfk3bO2N8KKdmH/reXLDl0Vfw8L3Zgzkw0F22uBARvab8aA6', '2019-08-04 05:03:56', '2019-08-04 05:03:56'),
(2, 'admin', 'admin@gmail.com', '$2y$10$H/lGHjAyZb8Bl0gEFMzfceQhuh9wgAExANXI4S28JOOAHxVwFhV1m', '2019-08-05 07:13:57', '2019-08-05 07:13:57'),
(3, 'saga15', 'saga15@gmail.com', '$2y$10$9v6a3PbGfrGRdcV9/aiD1erXia536lhwJTItFF/jvLHG5ZhwZ5KkK', '2019-08-05 09:10:53', '2019-08-08 01:41:07'),
(5, 'sis', 'sis@gmail.com', '$2y$10$hKs8cYaG/axCUWGUCvvmf.QN/iR23oj6LXoCk6LPzRQNPT1I.lHxG', '2019-08-06 00:42:57', '2019-08-08 01:44:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sainteks`
--
ALTER TABLE `sainteks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdduas`
--
ALTER TABLE `sdduas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdempats`
--
ALTER TABLE `sdempats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdenams`
--
ALTER TABLE `sdenams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdlimas`
--
ALTER TABLE `sdlimas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdsatus`
--
ALTER TABLE `sdsatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdtigas`
--
ALTER TABLE `sdtigas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smaduas`
--
ALTER TABLE `smaduas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smasatus`
--
ALTER TABLE `smasatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smatigas`
--
ALTER TABLE `smatigas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smpduas`
--
ALTER TABLE `smpduas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smpsatus`
--
ALTER TABLE `smpsatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smptigas`
--
ALTER TABLE `smptigas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soshums`
--
ALTER TABLE `soshums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sainteks`
--
ALTER TABLE `sainteks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sdduas`
--
ALTER TABLE `sdduas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sdempats`
--
ALTER TABLE `sdempats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sdenams`
--
ALTER TABLE `sdenams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sdlimas`
--
ALTER TABLE `sdlimas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sdsatus`
--
ALTER TABLE `sdsatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sdtigas`
--
ALTER TABLE `sdtigas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `smaduas`
--
ALTER TABLE `smaduas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `smasatus`
--
ALTER TABLE `smasatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `smatigas`
--
ALTER TABLE `smatigas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `smpduas`
--
ALTER TABLE `smpduas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `smpsatus`
--
ALTER TABLE `smpsatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `smptigas`
--
ALTER TABLE `smptigas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soshums`
--
ALTER TABLE `soshums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
