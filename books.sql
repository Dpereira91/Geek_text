-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2017 at 03:00 AM
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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `genre` varchar(15) NOT NULL,
  `rating` float NOT NULL,
  `price` varchar(6) NOT NULL,
  `published_year` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `genre`, `rating`, `price`, `published_year`) VALUES
(0, 'Dale\'s Tales', 'A brief history of Dale\'s life.', 'Biography', 5, '10.10', '2017'),
(1, 'Cesar Salads', 'Health and fitness expert, Cesar, shares all his fitness secrets.', 'Health', 4.5, '9.00', '2017'),
(2, 'Nicolas\' Life', 'Non-existent.', 'Fiction', 5, 'Free', '2010'),
(3, 'Generic Book', 'The generic book for non-readers.', 'General', 5, '15.00', '1964'),
(4, 'Book 1', 'Description 1', 'Horror', 4.2, '8.50', '1956'),
(5, 'The life of Pi', '3.141 59265 358 9793 2384626 433 83 279 50288 41 971 6939 93 7 510.', 'Education', 3.14, '3.14', '1995'),
(7, 'New Title', 'New Description', 'New Genre', 5, '10.80', '1987'),
(9, 'El Principito', 'blah blah', 'fiction', 2.2, '34.55', '1988'),
(10, 'ABC', 'Abc des', 'General', 1.5, '60.99', '2016');

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
('admin1', '1111-2222-3333-4444', 'N', 'MasterCard', '123', 4, 2019, '3421 Nw flagler Terrace', 'null', 'Miami Beach City', 'FL', '33124', 'null'),
('admin1', '2222-2222-2222-2222', 'N', 'AmericanExpress', '123', 4, 2022, 'Some random Street', 'null', 'Miami', 'FL', '33125', 'null'),
('admin1', '3333-4444-5555-6666', 'Y', 'MasterCard', '234', 7, 2019, '3431 Nw', 'null', 'Miami', 'FL', '3125', 'null'),
('admin1', '5555-6666-7777-8888', 'N', 'AmericanExpress', '123', 4, 2020, '3456 Sw', 'null', 'Miami', 'Fl', '33125', 'null'),
('amesa', '1111-1111-1111-1111', 'Y', 'MasterCard', '123', 6, 2016, '3421 M', 'null', 'Miami', 'fl', '33125', 'null'),
('mcabrera1', '1111-1111-1111-1111', 'Y', 'MasterCard', '234', 7, 2015, '34214', 'null', 'Miami', 'FL', '32145', 'null'),
('mcabrera1', '2222-2222-2222-2222', 'N', 'AmericanExpress', '123', 3, 2019, '3455', 'null', 'Miami', 'fl', '33245', 'null');

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
('admin1', 23, '1', 'my street ', '234', 'Miami', 'FL', '33125', 'NULL'),
('mcabrera1', 24, '0', 'test', 'NULL', 'Miamia', 'FL', '33245', 'NULL'),
('mcabrera1', 27, '0', 'test1', 'NULL', 'maimi', 'Fl', '23457', 'NULL'),
('mcabrera1', 28, '1', 'new address', 'NULL', 'Miami', 'fl', '33456', 'NULL'),
('amesa', 31, '1', '3576', 'NULL', 'Sw 3rd', 'Miami', '33256', 'NULL');

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
('admin1', 'ge7IUFTo/i2RU', 'Admin Account', 'adm', 5, 'adm@yahoo.com', 'my street ', '234', 'Miami', 'FL', '33125', 'null'),
('amesa', 'gef9IRiNIRcCQ', 'Armando', 'DjShao', 3, 'a@gmail.com', '3421 Nw ', 'Flagler', 'Miami', 'Fl', '33125', 'null'),
('dpere326', 'gebxt2oUKU50A', 'Darilys Pereira', 'Dari', 2, 'darilys1991@yahoo.com', '3421 NW Flalger', 'none', 'Miami', 'Fl', '33125', 'null'),
('mcabrera1', 'gebxt2oUKU50A', 'Mari Cab', 'yula12345', 10, 'mcabre@yahoo.com', '3453 SW 3123th Ct', ' ', 'Miami', 'Fl', '33183', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `address_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
