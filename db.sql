-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 10:17 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'identifiant du prof',
  `email` varchar(255) NOT NULL,
  `nmrTlfn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ensgrp`
--

CREATE TABLE `ensgrp` (
  `id` int(11) NOT NULL,
  `idens` bigint(20) UNSIGNED DEFAULT NULL,
  `idgrp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'identifiant de l''etudiant',
  `idgrp` int(11) DEFAULT NULL,
  `idniv` int(11) DEFAULT NULL,
  `datenaiss` date DEFAULT NULL,
  `lieunaiss` text,
  `email` varchar(255) DEFAULT NULL,
  `nmrTlfn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `idgrp`, `idniv`, `datenaiss`, `lieunaiss`, `email`, `nmrTlfn`) VALUES
(2, 1, 1, '2019-11-05', 'taher', '', ''),
(8, 2, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(11) NOT NULL,
  `idniv` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupe`
--

INSERT INTO `groupe` (`id`, `idniv`, `numero`) VALUES
(1, 1, 3),
(2, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`id`, `nom`) VALUES
(1, '1CS');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(1) DEFAULT NULL COMMENT '0 si user est un etd/ 1 si user est prof / 2 si user est admin',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `name`, `surname`, `remember_token`, `created_at`, `updated_at`, `email_verified_at`) VALUES
(2, '18/0001', '$2y$10$gjL8tM1ju2YbXWioTvSKreE66ACd/j8w5cbLCCOsZ.FO5aXhx89nG', 0, 'sarah', 'belaoura', NULL, '2019-11-14 19:17:57', '2019-11-14 19:17:57', '0000-00-00 00:00:00'),
(8, '18/0002', '$2y$10$73mQlsIhvg0HquxuGvg3MOOld7WoXz91Vc3YX9eScH6Q/A3gbpUp6', 0, 'sarah', 'belaoura', NULL, '2019-11-27 05:23:25', '2019-11-27 05:23:25', '0000-00-00 00:00:00'),
(9, 'luz69@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Randal Glover', NULL, 'Twk9jcMFCz', '2019-12-25 15:22:43', '2019-12-25 15:22:43', '2019-12-25 15:22:43'),
(10, 'justice34@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Brittany Dietrich', NULL, 'PGgRxIF1pq', '2019-12-25 15:23:16', '2019-12-25 15:23:16', '2019-12-25 15:23:16'),
(11, 'suzanne.erdman@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Raphaelle Murphy', NULL, 'a6EMUVdsBs', '2019-12-25 15:24:39', '2019-12-25 15:24:39', '2019-12-25 15:24:39'),
(12, 'mabelle.johns@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Vidal Carroll', NULL, 'LcrXUIqaSx', '2019-12-25 15:25:50', '2019-12-25 15:25:50', '2019-12-25 15:25:50'),
(13, 'jazmyne31@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Myrtle D\'Amore', NULL, 'LcaEqU1Ro2', '2019-12-25 15:27:09', '2019-12-25 15:27:09', '2019-12-25 15:27:09'),
(14, 'audrey.jast@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Curtis Bosco', NULL, '4SZIEV53UC', '2019-12-25 15:29:16', '2019-12-25 15:29:16', '2019-12-25 15:29:16'),
(15, 'predovic.lilyan@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Alexandre Hettinger', NULL, 'hdqIHre5P0', '2019-12-25 15:29:41', '2019-12-25 15:29:41', '2019-12-25 15:29:41'),
(16, 'joana17@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Jaiden Gleichner', NULL, 'exHPib9kvO', '2019-12-25 16:00:20', '2019-12-25 16:00:20', '2019-12-25 16:00:20'),
(17, 'odell.lemke@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Chloe Kilback', NULL, 'SeEd84d1Kj', '2019-12-25 16:35:54', '2019-12-25 16:35:54', '2019-12-25 16:35:54'),
(18, 'xturcotte@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Giuseppe Bode', NULL, 'p8llksrSnJ', '2019-12-25 16:36:44', '2019-12-25 16:36:44', '2019-12-25 16:36:44'),
(19, 'lilly.thompson@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Dr. Aglae Schroeder II', NULL, 'jpMnKH0cIa', '2019-12-25 16:37:29', '2019-12-25 16:37:29', '2019-12-25 16:37:29'),
(20, 'grayson96@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Effie McClure', NULL, 'AVVV9iBqNg', '2019-12-25 16:38:01', '2019-12-25 16:38:01', '2019-12-25 16:38:01'),
(21, 'mosciski.elsa@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Heaven Abbott', NULL, 'o1ZvsHhOVI', '2019-12-27 16:49:48', '2019-12-27 16:49:48', '2019-12-27 16:49:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD UNIQUE KEY `ID` (`id`);

--
-- Indexes for table `ensgrp`
--
ALTER TABLE `ensgrp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idgrp` (`idgrp`,`idens`),
  ADD KEY `idens` (`idens`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD UNIQUE KEY `ID1_2` (`id`),
  ADD KEY `ID1` (`id`),
  ADD KEY `ID1_3` (`id`),
  ADD KEY `idGrp` (`idgrp`),
  ADD KEY `idNiv` (`idniv`);

--
-- Indexes for table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idNiv` (`idniv`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ensgrp`
--
ALTER TABLE `ensgrp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ensgrp`
--
ALTER TABLE `ensgrp`
  ADD CONSTRAINT `ensgrp_ibfk_1` FOREIGN KEY (`idgrp`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `ensgrp_ibfk_2` FOREIGN KEY (`idens`) REFERENCES `enseignant` (`id`);

--
-- Constraints for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `etudiant_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `etudiant_ibfk_3` FOREIGN KEY (`idgrp`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `etudiant_ibfk_4` FOREIGN KEY (`idniv`) REFERENCES `niveau` (`ID`);

--
-- Constraints for table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`idniv`) REFERENCES `niveau` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
