-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 09:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hware`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(16) NOT NULL,
  `item_code` varchar(16) DEFAULT NULL,
  `item_name` varchar(64) DEFAULT NULL,
  `item_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_code`, `item_name`, `item_price`) VALUES
(1, '137sdkb23', 'Red Horse', 90),
(2, '564fgnf44', 'San Miguel Beer 1L', 87),
(3, '865fsvs55', 'Red Horse Stallion', 35),
(4, '325csgn98', 'Bacardi Gold 1L', 800),
(5, '768vsgh97', 'Coke 1L', 35.99),
(6, '322fjds42', 'Sprite 1L', 35.99),
(8, '677dbdf46', 'Royal Sakto', 12),
(9, '066mfjt54', 'Coke Sakto', 12),
(10, '132jklf07', 'Emperador Light 1L', 125.89),
(11, '006fnas68', 'Tanduay Light 700mL', 95),
(12, '225ygff65', 'Pepsi 1L', 35);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `uname` varchar(32) DEFAULT NULL,
  `time_in` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `uname`, `time_in`) VALUES
(1, 'admin', '2019-09-21 01:09:36'),
(2, 'admin', '2019-09-21 01:10:33'),
(3, 'admin', '2019-09-21 01:10:51'),
(4, 'admin', '2019-09-21 01:11:12'),
(5, 'overide', '2019-09-21 01:18:21'),
(6, 'admin', '2019-09-21 02:40:24'),
(7, 'admin', '2019-09-21 02:42:58'),
(8, 'admin', '2019-09-21 02:43:28'),
(9, 'admin', '2019-09-21 02:50:25'),
(10, 'admin', '2019-09-21 02:55:10'),
(11, 'admin', '2019-09-21 02:55:35'),
(12, 'overide', '2019-09-21 03:11:45'),
(13, 'admin', '2019-09-21 03:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'overide', 'm@nual0verid3'),
(2, 'admin', 'admin'),
(8, 'anna', 'banana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
