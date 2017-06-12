-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 08:07 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `id` varchar(15) NOT NULL,
  `number` varchar(19) NOT NULL,
  `preferred` char(1) NOT NULL,
  `type` varchar(15) NOT NULL,
  `csv_code` varchar(4) NOT NULL,
  `exp_month` int(2) NOT NULL,
  `exp_year` int(4) NOT NULL,
  `billing_street1` varchar(30) NOT NULL,
  `billing_street2` varchar(30) NOT NULL,
  `billing_city` varchar(20) NOT NULL,
  `billing_state` varchar(20) NOT NULL,
  `billing_zip_code` varchar(5) NOT NULL,
  `billing_short_zip_code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`id`, `number`, `preferred`, `type`, `csv_code`, `exp_month`, `exp_year`, `billing_street1`, `billing_street2`, `billing_city`, `billing_state`, `billing_zip_code`, `billing_short_zip_code`) VALUES
('admin1', '1111-2222-3333-4444', 'Y', 'MasterCard', '123', 4, 2019, '3421 Nw flagler Terrace', 'null', 'Miami Beach', 'FL', '33124', 'null'),
('mcabrera1', '1234-3456-4567-1', 'N', 'AmericanExpress', '111', 3, 2021, '11541 NW Flagler Terrace', 'null', 'Miami Beach', 'FL', '33172', 'null'),
('mcabrera1', '4444-5555-6666-7', 'Y', 'MasterCard', '3457', 5, 2018, 'some crazy street', 'null', 'miami Beach', 'fl', '33245', 'null');

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

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `address_id`, `preferred`, `street1`, `street2`, `city`, `state`, `zip_code`, `short_zip_code`) VALUES
('admin', 14, '1', '1015 SW', 'NULL', 'Miami', 'GA', '52525', 'NULL'),
('admin', 15, '0', '2020 NW', 'NULL', 'Hialeah', 'FL', '41413', 'NULL'),
('admin', 16, '0', '3035 SW', 'NULL', 'Coral Gables', 'FL', '33135', 'NULL'),
('dpere326', 17, '1', '', 'none', 'Miami', 'fl', '', 'NULL'),
('dpere326', 18, '0', '11541 NW F', 'NULL', 'Miami', 'FL', '33127', 'NULL'),
('dpere326', 19, '0', '12345', 'NULL', 'Miami', 'Fl', '33245', 'NULL'),
('dpere326', 20, '0', '5678', 'NULL', 'Test', 'Fl', '34567', 'NULL'),
('dpere326', 21, '0', '1234', 'NULL', 'Tampa', 'Fl', '23456', 'NULL'),
('mcabrera1', 22, '1', '3453 SW 3123th Ct', ' ', 'Miami', 'Fl', '33183', 'NULL'),
('admin1', 23, '1', 'my street ', '234', 'Miami', 'FL', '33125', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `avatar` int(11) NOT NULL DEFAULT '0',
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

INSERT INTO `user` (`id`, `password`, `name`, `nickname`, `avatar`, `email`, `street1`, `street2`, `city`, `state`, `zip_code`, `short_zip_code`) VALUES
('admin', 'gedAh0TT0RZX2', 'admin', 'hello', 0, 'admin@gmail.com', '0001 SW', 'Admin Ave', 'Miami', 'FL', '64636', 'null'),
('admin1', 'ge7IUFTo/i2RU', 'Admin Account', 'adm', 7, 'adm@yahoo.com', 'my street ', '234', 'Miami', 'FL', '33125', 'null'),
('dpere326', 'gebxt2oUKU50A', 'Darilys Pereira', 'Dari', 2, 'darilys1991@yahoo.com', '3421 NW Flalger', 'none', 'Miami', 'Fl', '33125', 'null'),
('mcabrera1', 'gebxt2oUKU50A', 'Mari Cab', 'yula', 6, 'mcabre@yahoo.com', '3453 SW 3123th Ct', ' ', 'Miami', 'Fl', '33183', 'null');

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
  ADD PRIMARY KEY (`address_id`);

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
  MODIFY `address_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
