-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 07:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acts`
--

CREATE TABLE `acts` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acts`
--

INSERT INTO `acts` (`id`, `username`, `activity`, `time`) VALUES
(14, 'ADMIN', 'LogIn', '2021-04-23 01:43:28'),
(15, 'ADMIN', 'LogIn', '2021-05-05 01:18:21'),
(16, 'ADMIN', 'LogOut', '2021-05-05 01:18:47'),
(17, 'ADMIN', 'LogIn', '2021-05-06 00:22:57'),
(18, 'ADMIN', 'LogOut', '2021-05-06 00:23:06'),
(19, 'ADMIN', 'LogIn', '2021-05-06 01:19:30'),
(20, 'ADMIN', 'LogOut', '2021-05-06 01:19:37'),
(24, 'ADMIN', 'LogIn', '2021-05-06 03:04:18'),
(25, 'ADMIN', 'LogOut', '2021-05-06 03:17:11'),
(26, 'ADMIN', 'LogIn', '2021-05-06 03:17:48'),
(27, 'ADMIN', 'LogOut', '2021-05-06 03:23:17'),
(28, 'ADMIN', 'LogIn', '2021-05-06 03:23:35'),
(29, 'ADMIN', 'LogOut', '2021-05-06 03:58:58'),
(30, 'ADMIN', 'LogIn', '2021-05-06 03:59:52'),
(31, 'ADMIN', 'LogOut', '2021-05-06 04:02:38'),
(32, 'ADMIN', 'LogIn', '2021-05-06 04:39:07'),
(33, 'ADMIN', 'LogOut', '2021-05-06 04:39:57'),
(34, 'ADMIN', 'LogIn', '2021-05-06 04:40:09'),
(35, 'ADMIN', 'LogOut', '2021-05-06 09:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `otp` int(10) NOT NULL,
  `curdate` varchar(50) NOT NULL,
  `endate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`id`, `username`, `otp`, `curdate`, `endate`) VALUES
(18, 'ADMIN', 449863, '2021-04-23 01:43:19', '2021-04-23 01:48:19'),
(19, 'ADMIN', 74742, '2021-05-05 01:18:11', '2021-05-05 01:23:11'),
(20, 'ADMIN', 993068, '2021-05-05 01:18:16', '2021-05-05 01:23:16'),
(21, 'ADMIN', 300812, '2021-05-06 00:22:51', '2021-05-06 00:27:51'),
(22, 'ADMIN', 669072, '2021-05-06 01:19:25', '2021-05-06 01:24:25'),
(23, 'ADMIN', 356445, '2021-05-06 01:34:28', '2021-05-06 01:39:28'),
(24, 'ADMIN', 176479, '2021-05-06 03:01:06', '2021-05-06 03:06:06'),
(25, 'ADMIN', 577916, '2021-05-06 03:03:57', '2021-05-06 03:08:57'),
(26, 'ADMIN', 174405, '2021-05-06 03:04:13', '2021-05-06 03:09:13'),
(27, 'ADMIN', 838910, '2021-05-06 03:17:43', '2021-05-06 03:22:43'),
(28, 'ADMIN', 705239, '2021-05-06 03:23:29', '2021-05-06 03:28:29'),
(29, 'ADMIN', 894807, '2021-05-06 03:59:47', '2021-05-06 04:04:47'),
(30, 'ADMIN', 886176, '2021-05-06 04:39:02', '2021-05-06 04:44:02'),
(31, 'ADMIN', 392002, '2021-05-06 04:40:05', '2021-05-06 04:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(44, 'ADMIN', 'ADMIN', 'arazamaryjane21@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acts`
--
ALTER TABLE `acts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
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
-- AUTO_INCREMENT for table `acts`
--
ALTER TABLE `acts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
