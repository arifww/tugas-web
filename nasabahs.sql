-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 03:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `nasabahs`
--

CREATE TABLE `nasabahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `namabelakang` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nasabahs`
--

INSERT INTO `nasabahs` (`id`, `email`, `password`, `nama`, `namabelakang`, `alamat`, `telepon`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'aku@google.com', 'qwertys', 'agus', 'tian', 'Jln. Raya 345', '08111111', '123443dd', '2023-10-07 11:56:11', '2023-10-07 17:03:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nasabahs`
--
ALTER TABLE `nasabahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nasabahs_email_index` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nasabahs`
--
ALTER TABLE `nasabahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
