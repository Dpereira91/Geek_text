-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2017 at 11:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geek_text`
--

CREATE DATABASE geek_text;
USE geek_text;

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `id` varchar(15) NOT NULL,
  `number` varchar(16) NOT NULL,
  `preferred` char(1) NOT NULL,
  `type` varchar(10) NOT NULL,
  `csv_code` varchar(4) NOT NULL,
  `billing_street1` varchar(30) NOT NULL,
  `billing_street2` varchar(30) NOT NULL,
  `billing_city` varchar(20) NOT NULL,
  `billing_state` varchar(20) NOT NULL,
  `billing_zip_code` varchar(5) NOT NULL,
  `billing_short_zip_code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` varchar(15) NOT NULL,
  `address_id` int(6) NOT NULL,
  `preferred` char(1) NOT NULL,
  `street1` varchar(30) NOT NULL,
  `street2` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `short_zip_code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street1` varchar(30) NOT NULL,
  `street2` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `short_zip_code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `name`, `nickname`, `email`, `street1`, `street2`, `city`, `state`, `zip_code`, `short_zip_code`) VALUES
('csanch', 'c', 'Carlos Sanchez', 'Carlitos', 'darilys1991@yahoo.com', '555 SW', '2345 Terrace', 'Hialeah', 'FL', '33267', 'null'),
('dpere1995', 'a', 'Dayana Pereira', 'Dayi', 'dayipl@yahoo.com', '7500 SW', '149th CT', 'Miami', 'FL', '33193', ''),
('dpere326', 'a', 'Darilys Pereira', 'Dari', 'dpere326@yahoo.com', '3421 NW', 'Flagler Terrace', 'Miami', 'FL', '33125', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`id`,`number`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`address_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `address_id` int(6) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
