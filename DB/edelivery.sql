-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 04:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edelivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `trucktable`
--

CREATE TABLE `trucktable` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `pickup` set('Kaluthara','Colombo','Gampaha') NOT NULL,
  `dropdown` set('Kaluthara','Colombo','Gampaha') NOT NULL,
  `weight` varchar(255) NOT NULL,
  `state` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tp` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `province` set('Central','Eastern','North Central','Northern','North Western','Sabaragamuwa','Southern','Uva','Western') NOT NULL,
  `usertype` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`firstname`, `lastname`, `username`, `email`, `tp`, `password`, `province`, `usertype`) VALUES
('Achintha ', 'Lakshan', 'admin', 'admin@gmail.com', '1234567890', 'admin', 'Central', 'admin'),
('Amal', 'Perera', 'user', 'user@gmail.com', '1234568790', 'user', 'Central', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trucktable`
--
ALTER TABLE `trucktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trucktable`
--
ALTER TABLE `trucktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
