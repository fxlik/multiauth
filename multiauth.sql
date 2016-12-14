-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 04:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saya', 'saya@gmail.com', '$2y$10$PzyrEh3U8S31duwobh7qgeqR7Xq/dYtXojAq2tB6aEhLLmPSm5Y9u', 'VUOFmfMmCuPENWSFrbgEUJkvPNkWRLbWTjrtDV36pNEdcSlxhYLUvk7gEgAZ', '2016-11-24 07:16:55', '2016-12-12 11:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `response_id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `response_id`, `question_id`, `value`, `created_at`, `updated_at`) VALUES
(183, 11, 65, 'Kota Pontianak', '2016-12-08 06:46:49', '2016-12-08 06:46:49'),
(184, 11, 66, 'Sudah', '2016-12-08 06:46:49', '2016-12-08 06:46:49'),
(185, 11, 67, 'Sudah', '2016-12-08 06:46:50', '2016-12-08 06:46:50'),
(186, 11, 68, 'Sudah', '2016-12-08 06:46:50', '2016-12-08 06:46:50'),
(187, 11, 69, 'Belum', '2016-12-08 06:46:50', '2016-12-08 06:46:50'),
(189, 12, 65, 'Kabupaten Sanggau', '2016-12-08 06:47:11', '2016-12-08 06:47:11'),
(190, 12, 66, 'Sudah', '2016-12-08 06:47:11', '2016-12-08 06:47:11'),
(191, 12, 67, 'Belum', '2016-12-08 06:47:11', '2016-12-08 06:47:11'),
(192, 12, 68, 'Belum', '2016-12-08 06:47:11', '2016-12-08 06:47:11'),
(193, 12, 69, 'Belum', '2016-12-08 06:47:12', '2016-12-08 06:47:12'),
(195, 13, 65, 'Kabupaten Melawi', '2016-12-12 17:49:56', '2016-12-12 17:49:56'),
(196, 13, 66, 'Belum', '2016-12-12 17:49:56', '2016-12-12 17:49:56'),
(197, 13, 67, 'Belum', '2016-12-12 17:49:56', '2016-12-12 17:49:56'),
(198, 13, 68, 'Sudah', '2016-12-12 17:49:56', '2016-12-12 17:49:56'),
(199, 13, 69, 'Belum', '2016-12-12 17:49:56', '2016-12-12 17:49:56'),
(200, 13, 71, 'Belum', '2016-12-12 17:49:57', '2016-12-12 17:49:57'),
(201, 13, 72, 'Belum', '2016-12-12 17:49:57', '2016-12-12 17:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_24_073233_create_admins_table', 1),
('2015_10_29_020019_create_surveys_table', 2),
('2015_10_29_020145_create_questions_table', 2),
('2015_10_31_163905_create_responses_table', 2),
('2015_10_31_164239_create_answers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `survey_id` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `rules` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `survey_id`, `label`, `field`, `type`, `options`, `rules`, `created_at`, `updated_at`) VALUES
(65, 6, 'Nama Daerah', '1', 'select', '["Kota Pontianak","Kabupaten Landak","Kabupaten Mempawah","Kabupaten Melawi","Kabuten Sintang","Kabupaten Sanggau"]', NULL, '2016-12-08 06:41:00', '2016-12-08 06:41:00'),
(66, 6, 'Memiliki kebijakan pelaksanaan e-government yang memuat aspek data dan informasi geospasial', '2', 'radio', '["Sudah","Belum"]', NULL, '2016-12-08 06:41:39', '2016-12-08 06:41:39'),
(67, 6, 'Memiliki Peraturan Daerah (Perda) terkait dengan pemanfaatan dan pengelolaan data geospasial dalam kerangka Infrastruktur Informasi Geospasial.', '3', 'radio', '["Sudah","Belum"]', NULL, '2016-12-08 06:42:07', '2016-12-08 06:42:07'),
(68, 6, 'Memiliki Peraturan Gubernur/Bupati/Walikota terkait dengan pemanfaatan dan pengelolaan data geospasial dalam kerangka Infrastruktur Informasi Geospasial.', '4', 'radio', '["Sudah","Belum"]', NULL, '2016-12-08 06:42:39', '2016-12-08 06:42:39'),
(69, 6, 'Memiliki peraturan untuk mengelola mekanisme berbagi pakai data geospasial antar SKPD dalam kerangka Infrastruktur Informasi Geospasial.', '5', 'radio', '["Sudah","Belum"]', NULL, '2016-12-08 06:44:45', '2016-12-08 06:44:45'),
(71, 6, 'Memiliki peraturan tertulis terkait mekanisme perijinan penggunaan data geospasial oleh masyarakat.', '6', 'radio', '["Sudah","Belum"]', NULL, '2016-12-12 17:32:20', '2016-12-12 17:32:20'),
(72, 6, 'Memiliki alokasi anggaran dalam APBD (kegiatan mandiri atau masuk dalam suatu kegiatan lain) untuk pengadaan/up dating data geospasial yang bersifat rutin untuk mendukung Infrastruktur Informasi Geospasial', '7', 'radio', '["Sudah","Belum"]', NULL, '2016-12-12 17:37:15', '2016-12-12 17:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(10) UNSIGNED NOT NULL,
  `survey_id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `survey_id`, `ip`, `created_at`, `updated_at`) VALUES
(11, 6, '::1', '2016-12-08 06:46:49', '2016-12-08 06:46:49'),
(12, 6, '::1', '2016-12-08 06:47:11', '2016-12-08 06:47:11'),
(13, 6, '::1', '2016-12-12 17:49:55', '2016-12-12 17:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(6, 'Evaluasi Diri Pelaksanaan Simpul Jaringan', 'Evaluasi diri Pelaksanaan Simpul Jaringan di tiap daerah kabupaten/kota di provinsi Kalimantan Barat', '2016-12-08 06:38:55', '2016-12-08 06:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Felik', 'felik.official@gmail.com', '$2y$10$2Swb5g/sMmorPCjpbMMW.O5aSN/3ErjoLOUe9RkpGqozsNtEBrejO', '30480a6NEo7S6UDMdW1ioxT4w9aYPEekWaPOLpVpGkixZGq0Egl9Bn2D1qFg', '2016-11-24 07:15:44', '2016-12-01 23:02:42'),
(2, 'saya', 'adalah@gmail.com', '$2y$10$jjxyPUvM9sQW65OMDy1NcuMIvNFAaqKWXNPjGe78KnUJ8X/duENcO', 'fAqCvLBeomaXk5JVZXm7w9DU0SDdX2nxxt8cxpgwQkY7jSN7mIU0TkZGLo2d', '2016-12-04 03:53:33', '2016-12-04 04:59:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_response_id_foreign` (`response_id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_survey_id_foreign` (`survey_id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responses_survey_id_foreign` (`survey_id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_response_id_foreign` FOREIGN KEY (`response_id`) REFERENCES `responses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_survey_id_foreign` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `responses_survey_id_foreign` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
