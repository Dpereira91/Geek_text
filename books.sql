-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 01:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `price` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `genre`, `rating`, `price`) VALUES
(0, 'Dale\'s Tales', 'A brief history of Dale\'s life.', 'Biography', 5, '10.10'),
(1, 'Cesar Salads', 'Health and fitness expert, Cesar, shares all his fitness secrets.', 'Health', 4.5, '9.00'),
(2, 'Nicolas\' Life', 'Non-existent.', 'Fiction', 5, 'Free'),
(3, 'Generic Book', 'The generic book for non-readers.', 'General', 5, '15.00'),
(4, 'Book 1', 'Description 1', 'Horror', 4.2, '8.50'),
(5, 'The life of Pi', '3.141 59265 358 9793 2384626 433 83 279 50288 41 971 6939 93 7 510.', 'Education', 3.14, '3.14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
