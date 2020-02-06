-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 08:29 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `pre_reg`
--

CREATE TABLE `pre_reg` (
  `pre_id` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `college` text NOT NULL,
  `is_selected` varchar(2) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre_reg`
--

INSERT INTO `pre_reg` (`pre_id`, `name`, `regno`, `tel`, `email`, `college`, `is_selected`, `ts`) VALUES
(1, 'akshaj', '12345678', '1234890', 'akshajverma.oo7@gmail.com', 'MIT, manipal', '1', '2017-02-28 18:38:05'),
(2, 'Harry Potter', '12345671', '123890', 'Harrypotter@gmail.com', 'Gryffindor', '1', '2017-02-28 18:37:34'),
(3, 'Hermione Granger', '12345672', '123890', 'hermione@gmail.com', 'Gryffindor', '0', '2017-02-28 09:49:18'),
(4, 'Hermione Granger', '12345672', '123890', 'hermione@gmail.com', 'Gryffindor', '0', '2017-02-28 09:55:46'),
(5, 'Hermione Granger', '12345672', '123890', 'hermione@gmail.com', 'Gryffindor', '0', '2017-02-28 09:56:01'),
(6, 'Hermione Granger', '12345672', '123890', 'hermione@gmail.com', 'Gryffindor', '0', '2017-02-28 09:56:13'),
(7, 'Hermione Granger', '12345672', '123890', 'hermione@gmail.com', 'Gryffindor', '0', '2017-02-28 09:57:26'),
(8, 'Hermione Granger', '12345672', '123890', 'hermione@gmail.com', 'Gryffindor', '0', '2017-02-28 09:57:57'),
(9, 'shubham', '12345789', '123456', 'sbam@gmail.com', 'IT', '0', '2017-02-28 19:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `ps_final`
--

CREATE TABLE `ps_final` (
  `final_reg_id` smallint(6) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ps_final`
--

INSERT INTO `ps_final` (`final_reg_id`, `id`, `name`, `tel`, `regno`, `ts`) VALUES
(1, 'AvaJ58b546448daea', 'Harry Potter', '123890', '12345671', '2017-02-28 09:43:48'),
(2, 'AvaJ58b5c34ad43d3', 'Harry Potter', '123890', '12345671', '2017-02-28 18:37:34'),
(3, 'AvaJ58b5c38c2736d', 'akshaj', '1234890', '12345678', '2017-02-28 18:38:05'),
(4, 'AvaJ58b5c9d71533c', 'Hermione Granger', '123890', '12345672', '2017-02-28 19:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `ps_login`
--

CREATE TABLE `ps_login` (
  `id` smallint(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `hashed_password` varchar(100) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ps_login`
--

INSERT INTO `ps_login` (`id`, `username`, `hashed_password`, `ts`) VALUES
(1, 'boo', 'boo', '2017-02-28 18:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `sys_admin`
--

CREATE TABLE `sys_admin` (
  `id` smallint(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(100) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_admin`
--

INSERT INTO `sys_admin` (`id`, `username`, `hashed_password`, `ts`) VALUES
(5, 'mycroft', 'lol', '2017-02-14 19:06:51'),
(6, 'shane', '$2y$10$NDJmZDNhNGY5ZWU5M2ExNO.qKhVk8RQgnNhUDMsQs/UVkSlGYU4Dy', '2017-02-03 16:39:07'),
(7, 'book', 'book', '2017-02-15 05:35:58'),
(8, 'mother', '$2y$10$MDJiODkwNDlhYzdjNmI4NO.GoSTn4VcOVTgBg8oxItqNh7B7o1Bji', '2017-02-03 16:39:34'),
(9, 'matt', '$2y$10$Y2VmZjM1OWFmNjZlMDQ1YuLqb2Y5vT3zTrDO8qXwjMoeEERZoS2lW', '2017-02-03 19:11:07'),
(10, 'janitor', '$2y$10$M2NiMDE3NDk3Y2I5Njc4YO2oEDv6KLk.rNrou548zTlePB3BxqSVW', '2017-02-03 19:11:18'),
(11, 'blowfish', '$2y$10$NjQ0OGI1MDIyODI5YWRkM.WO7dRQ.H4aPn66.Wvyt4C9CUy7oYmTK', '2017-02-03 19:11:28'),
(13, 'james', '$2y$10$MTRlNTRhOWYzNzg3ZDkwOOqerU.GZXCTscGLXrF2jOgy.i8Lhw1Im', '2017-02-03 19:21:59'),
(14, 'goku', 'goku', '2017-02-15 05:20:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pre_reg`
--
ALTER TABLE `pre_reg`
  ADD PRIMARY KEY (`pre_id`);

--
-- Indexes for table `ps_final`
--
ALTER TABLE `ps_final`
  ADD PRIMARY KEY (`final_reg_id`);

--
-- Indexes for table `ps_login`
--
ALTER TABLE `ps_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_admin`
--
ALTER TABLE `sys_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pre_reg`
--
ALTER TABLE `pre_reg`
  MODIFY `pre_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ps_final`
--
ALTER TABLE `ps_final`
  MODIFY `final_reg_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ps_login`
--
ALTER TABLE `ps_login`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sys_admin`
--
ALTER TABLE `sys_admin`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
