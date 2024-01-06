-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 06, 2024 at 01:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passwordmatrix`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hashedPass` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `hashedPass`, `department`) VALUES
(5, 'gumabon', 'gumabon123', '$2y$10$tXYqOJGA20Wsn695A9Y8l.tqeJ4gUO.f1Nodj0BRKWyIoef7Mw4GK', 'DTE'),
(12, 'gumabon', 'lawrence', '$2y$10$oMwKIrNj9lXaYnMDCKqUvO5W3F0XU1zhRiNC9ICNUKtLaRi5qkZDS', 'DMS'),
(13, 'Lawdy123123', 'Lawdy123456', '$2y$10$O/NduG50SzPXEwSgmtmoO.Cb2pNLt.0zVMKPrsT7CF10YMo4ChrJy', 'DCS'),
(15, 'gumabon', 'dadadadadadada', '$2y$10$4ewl.QTipcvo8Oo2ueqR9eKqlneih/pqHMJRE1fSTTbYjPJvN6xb6', 'DIT'),
(16, 'Patricia', 'Patricia123', '$2y$10$i71si7cDGKpCQYKS.yxPd.6zqMI/Faj5kZuraFgc276FCE7oqhrFG', 'DMS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
