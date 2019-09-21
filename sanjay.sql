-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 10:46 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanjay`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `sl_no` int(11) NOT NULL,
  `branch_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`sl_no`, `branch_name`) VALUES
(1, 'gubbi'),
(2, 'koratagere'),
(3, 'tumkur'),
(4, 'gubbi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marketting`
--

CREATE TABLE `marketting` (
  `sl_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `material_name` varchar(15) NOT NULL,
  `volume` int(11) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `branch_name` varchar(15) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `closing_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketting`
--

INSERT INTO `marketting` (`sl_no`, `date`, `material_name`, `volume`, `unit`, `branch_name`, `opening_balance`, `closing_balance`) VALUES
(1, '2017-11-28', 'pen', 5, 'number', 'tumkur', 0, -5),
(2, '2017-11-28', 'paint', 10, 'boxes', 'tumkur', 50, 40),
(3, '2017-11-29', 'book', 2, 'number', 'tumkur', 0, -2),
(4, '2017-12-01', 'book', 3, 'number', 'tumkur', -2, -5),
(5, '2017-12-02', 'pen', 5, 'number', 'gubbi', -5, -10);

--
-- Triggers `marketting`
--
DELIMITER $$
CREATE TRIGGER `date1` BEFORE INSERT ON `marketting` FOR EACH ROW set new.date = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `sl_no` int(11) NOT NULL,
  `material_name` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`sl_no`, `material_name`, `unit`) VALUES
(1, 'pen', 'number'),
(2, 'book', 'number'),
(3, 'A4 sheets', 'sheets'),
(4, 'paint', 'boxes');

-- --------------------------------------------------------

--
-- Table structure for table `recieve`
--

CREATE TABLE `recieve` (
  `sl_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `material_name` varchar(15) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recieve`
--

INSERT INTO `recieve` (`sl_no`, `date`, `material_name`, `unit`, `quantity`) VALUES
(1, '2017-11-28', 'paint', 'boxes', 50);

--
-- Triggers `recieve`
--
DELIMITER $$
CREATE TRIGGER `date` BEFORE INSERT ON `recieve` FOR EACH ROW set new.date = now()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `marketting`
--
ALTER TABLE `marketting`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `recieve`
--
ALTER TABLE `recieve`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marketting`
--
ALTER TABLE `marketting`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recieve`
--
ALTER TABLE `recieve`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
