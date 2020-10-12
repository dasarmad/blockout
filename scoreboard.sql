-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2020 at 03:57 PM
-- Server version: 10.3.24-MariaDB
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
-- Database: `gamerea_cubeoutt`
--

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

CREATE TABLE `scoreboard` (
  `id` bigint(20) NOT NULL,
  `playerName` varchar(255) DEFAULT NULL,
  `gameSet` varchar(20) NOT NULL,
  `gamePit` varchar(20) NOT NULL,
  `gameLevel` tinyint(1) NOT NULL,
  `playerScore` int(11) NOT NULL,
  `playedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `countryName` varchar(255) NOT NULL,
  `ipAddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`id`, `playerName`, `gameSet`, `gamePit`, `gameLevel`, `playerScore`, `playedAt`, `countryName`, `ipAddress`) VALUES
(56, 'sourav_malo', 'BASIC', '5x5x10', 0, 32, '2020-09-03 09:07:31', 'Bangladesh', '103.29.126.246'),
(57, 'MagI', 'EXTENDED', '5x5x10', 0, 594, '2020-09-03 09:13:47', 'Sweden', '95.205.8.2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scoreboard`
--
ALTER TABLE `scoreboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scoreboard`
--
ALTER TABLE `scoreboard`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
