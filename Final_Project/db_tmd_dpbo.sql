-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 04:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tmd_dpbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tscore`
--

CREATE TABLE `tscore` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `standing` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tscore`
--

INSERT INTO `tscore` (`id`, `username`, `score`, `standing`) VALUES
(1, 'cek', 10, 1),
(2, 'ce1', 60, 4),
(3, 'test', 40, 3),
(4, 'as', 10, 1),
(5, 'baru', 550, 27),
(6, 'halo', 170, 10),
(7, 'bay', 10, 1),
(8, 'test1', 50, 2),
(9, 'test2', 130, 6),
(10, 'tes3', 500, 23),
(11, 'testbaru', 140, 10),
(12, 'bayu', 130, 6),
(13, 'alien', 50, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tscore`
--
ALTER TABLE `tscore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tscore`
--
ALTER TABLE `tscore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
