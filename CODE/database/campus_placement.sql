-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 08:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `dateofsubmit` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Untitled.txt',
  `name1` varchar(100) NOT NULL DEFAULT 'Untitled.txt',
  `name2` varchar(255) NOT NULL,
  `name3` varchar(255) NOT NULL,
  `mime` varchar(50) NOT NULL DEFAULT 'text/plain',
  `mime1` varchar(50) NOT NULL,
  `mime2` varchar(50) NOT NULL,
  `mime3` varchar(50) NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `size1` bigint(50) UNSIGNED NOT NULL,
  `size2` bigint(20) UNSIGNED NOT NULL,
  `size3` bigint(20) UNSIGNED NOT NULL,
  `data` mediumblob NOT NULL,
  `data1` mediumblob NOT NULL,
  `data2` mediumblob NOT NULL,
  `data3` mediumblob NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `mail` varchar(30) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 0,
  `dept` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `id` int(11) NOT NULL,
  `cnm` varchar(100) NOT NULL,
  `cid` int(3) NOT NULL,
  `cond` varchar(10) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `sno` int(5) NOT NULL,
  `pout` varchar(5) NOT NULL,
  `fullfill` int(3) NOT NULL DEFAULT 0,
  `hodsts` int(11) NOT NULL DEFAULT 0,
  `costs` int(11) NOT NULL DEFAULT 0,
  `stud_id_list` varchar(255) DEFAULT NULL,
  `hod_list` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `id` int(5) NOT NULL,
  `fnm` varchar(50) NOT NULL,
  `lnm` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `LinkedIn_ID` varchar(50) DEFAULT NULL,
  `branch` varchar(30) NOT NULL,
  `passout` varchar(5) NOT NULL,
  `sem_I` float(8,2) NOT NULL,
  `sem_II` float(8,2) NOT NULL,
  `sem_III` float(8,2) NOT NULL,
  `sem_IV` float(8,2) NOT NULL,
  `sem_V` float(8,2) NOT NULL,
  `sem_VI` float(8,2) NOT NULL,
  `aggr` float(8,2) NOT NULL,
  `reg_date` date NOT NULL,
  `sts` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `req`
--
ALTER TABLE `req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `req`
--
ALTER TABLE `req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
