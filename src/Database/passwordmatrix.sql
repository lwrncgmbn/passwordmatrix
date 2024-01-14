-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 14, 2024 at 01:40 PM
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
(16, 'Patricia', 'Patricia123', '$2y$10$i71si7cDGKpCQYKS.yxPd.6zqMI/Faj5kZuraFgc276FCE7oqhrFG', 'DMS'),
(17, 'Lawrence', 'Lawrence123', '$2y$10$zq71O5W20uJ/MKZKLyrmnuY492L0xWV0l.n3WmKzK/5tgVSAYAjai', 'DCS'),
(19, 'Lawrence', 'Lawrence123', 'MDg5ZGE4MDZjY2RjNjVhMTE2MDNiZjE0ODIyMzczZTdkMTBlZTgzMDA4NzdhZjEzYzkzNzhlYWVjZTU4NTJjMw==', 'DTE'),
(20, 'Gumabon', 'GUmabon123', 'YzJlNTkxNzllNzVmMWYzYjk5NDVkMGM5YzkwYTc3ZWEyNjA3YjVhMzdmZDg1NThlZDEzZTNjOWY0ZTNlZTdkYg==', 'DCS'),
(22, 'Lawrence', 'Lawrence123', 'MDg5ZGE4MDZjY2RjNjVhMTE2MDNiZjE0ODIyMzczZTdkMTBlZTgzMDA4NzdhZjEzYzkzNzhlYWVjZTU4NTJjMw==', 'DIT'),
(23, 'Deluz123', 'Deluz123', 'NWZiODliM2E4OTVhZjUxZDdlYTVkYmNhYjNiYTkwYmU2M2I4MWE3NGI4ZjMwZTJhZTE3MTVhMTE=', 'DCS');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
