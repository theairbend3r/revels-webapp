-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 08:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshops`
--

-- --------------------------------------------------------

--
-- Table structure for table `delegate_info`
--

CREATE TABLE `delegate_info` (
  `del_no` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `college` varchar(15) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infodesk`
--

CREATE TABLE `infodesk` (
  `id` smallint(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `hashed_password` varchar(100) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infodesk`
--

INSERT INTO `infodesk` (`id`, `username`, `hashed_password`, `ts`) VALUES
(2, 'admin', 'admin', '2017-02-21 18:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `sys_admin`
--

CREATE TABLE `sys_admin` (
  `id` smallint(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hashed_password` text NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_admin`
--

INSERT INTO `sys_admin` (`id`, `username`, `hashed_password`, `ts`) VALUES
(15, 'admin', 'admin', '2017-02-21 18:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cost` varchar(15) NOT NULL,
  `total_seats` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `cost`, `total_seats`) VALUES
(1, 'workshop1', '100', 50),
(2, 'workshop2', '110', 60),
(3, 'workshop3', '90', 60),
(4, 'workshop4', '150', 70),
(5, 'workshop5', '200', 20),
(6, 'workshop6', '160', 40),
(7, 'workshop7', '70', 120),
(8, 'workshop8', '80', 80);

-- --------------------------------------------------------

--
-- Table structure for table `workshop_reg`
--

CREATE TABLE `workshop_reg` (
  `wp_id` smallint(6) NOT NULL,
  `del_no` smallint(6) NOT NULL,
  `id` smallint(6) NOT NULL,
  `rct_no` varchar(20) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delegate_info`
--
ALTER TABLE `delegate_info`
  ADD PRIMARY KEY (`del_no`);

--
-- Indexes for table `infodesk`
--
ALTER TABLE `infodesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_admin`
--
ALTER TABLE `sys_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop_reg`
--
ALTER TABLE `workshop_reg`
  ADD PRIMARY KEY (`wp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delegate_info`
--
ALTER TABLE `delegate_info`
  MODIFY `del_no` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `infodesk`
--
ALTER TABLE `infodesk`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sys_admin`
--
ALTER TABLE `sys_admin`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `workshop_reg`
--
ALTER TABLE `workshop_reg`
  MODIFY `wp_id` smallint(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
