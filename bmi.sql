-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2026 at 04:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmi_data`
--

CREATE TABLE `bmi_data` (
  `id` int(11) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `bmi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bmi_data`
--

INSERT INTO `bmi_data` (`id`, `name`, `height`, `weight`, `bmi`) VALUES
(16, 'vihanga', 68, 165, 24.98),
(17, 'vihanga', 68, 165, 24.98),
(18, 'vihanga', 68, 165, 24.98),
(19, 'vihanga', 68, 165, 24.98),
(21, 'yasiru kodikara', 45, 156, 18.49),
(22, 'yasiru kodikara', 56, 157, 22.72),
(23, 'yasiru kodikara', 56, 156, 23.01),
(24, 'AKON', 78, 177, 24.9),
(25, 'vihanga', 68, 165, 24.98),
(26, 'vihanga', 68, 165, 24.98),
(27, '', 0, 0, 0),
(28, 'sithira', 60, 178, 18.94),
(29, 'yasiru kodikara', 56, 156, 23.01),
(30, 'yasiru kodikara', 56, 156, 23.01),
(31, 'test', 45, 453, 2.19),
(32, 'lklklkl', 4, 16, 156.25),
(33, 'awantha', 40, 150, 17.78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmi_data`
--
ALTER TABLE `bmi_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmi_data`
--
ALTER TABLE `bmi_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
