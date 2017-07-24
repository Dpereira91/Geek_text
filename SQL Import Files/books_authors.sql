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
  `description` varchar(500) NOT NULL,
  `genre` varchar(15) NOT NULL,
  `rating` float NOT NULL,
  `price` varchar(6) NOT NULL,
  `published_year` varchar(4) NOT NULL
  `author` varchar(20) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `genre`, `rating`, `price`, `published_year`, `author`, `photo`) VALUES
(0, 'Tech World', 'The Galactics arrived with their Battle fleet in 2052. Rather than being exterminated under a barrage of hell-burners, Earth joined a vast Empire that spanned the Milky Way. Our only worthwhile trade goods are our infamous mercenary legions, elite troops we sell to the highest alien bidder. In the third book in the series, James McGill is deployed on another alien world. His third interstellar tour is different in every way. Rather than meeting up with a primitive society, this time he’s headed to an advanced world. Tau Ceti, better known as Tech World, is the central trading capital of Frontier 921. McGill figures he’s lucked out. The assignment looks dull but luxurious. Tau Ceti boasts a planet-wide city with a trillion inhabitants, all of whom are only interested in making a few credits. But all is not well on Tech World. The Empire is crumbling, an invasion is coming, and McGill’s easy ride through life and death has come to an end. Tech World is a military science fiction novel by bestselling author B. V. Larson.', 'Science Fiction', 5, '10.50', '2014', 'B. V. Larson', '/images/tech_world.jpg'),
(1, 'The Big Book of Hacks', 'Fire up your soldering iron, charge up that drill, and get ready to hack! From a tiny theremin to a watermelon keg, from an automatic cat feeder to a glowing mousepad, the ingenious and hilarious projects in The Big Book of Hacks are perfect for aspiring makers. And it\'s all brought to you by the DIY masters at Popular Science magazine.', 'Technology', 4.5, '15.00', '2012', 'Doug Cantor', '/images/big_book.jpg'),
(2, 'Women in Tech', 'Geared toward women who are considering getting into tech, or those already in a tech job who want to take their career to the next level, this book combines practical career advice and inspiring personal stories from successful female tech professionals Brianna Wu (founder, Giant Spacekat), Angie Chang (founder, Women 2.0), Keren Elazari (TED speaker and cybersecurity expert), Katie Cunningham (Python educator and developer), Miah Johnson (senior systems administrator), Kristin Toth Smith (tech executive and inventor), and Kamilah Taylor (mobile and social developer).', 'Computing', 4.9, '13.99', '2016', 'Tarah Wheeler Van Vlack', '/images/women_in_tech.jpg'),
(3, 'Tech Entrepreneur\'s Survival Guide', 'In The Tech Entrepreneur\'s Survival Guide, Bernd shares what he learned and what he wished he knew at the time. He explains the major phases in a technology company\'s life cycle, helping entrepreneurs avoid common pitfalls and survive crises when they strike. He guides readers from the initial bootstrapping process through venture-capital financing and provides valuable advice on how to sell a technology company profitably--even in a challenging economic environment. Every chapter presents solutions to realworld issues that could otherwise have fatal consequences for a tech venture.', 'Business', 4, '17.99', '2014', 'Bernd Schoner', '/images/tech_entrepreneur.jpg'),
(4, 'Office 2016 for Seniors', 'Keep up with the latest Office technologies, and learn the fundamentals of Microsoft Office 2016!Office 2016 For Seniors For Dummies is the ideal resource for learning the fundamentals of the Microsoft Office suite. You\'ll explore the functionality of Word, Excel, PowerPoint, and Outlook, establishing basic knowledge that you can build upon as you continue to experiment with Office\'s applications. Larger font and image sizes mean you can easily read the content—and text that gets back to basics walks you through everything you need to know to use these programs in a variety of environments.', 'Computing', 3.5, '8.99', '2016', 'Faithe Wempen', '/images/office_2016.jpg'),
(5, 'Geek Girl Rising', 'Meet the women who haven\'t asked for permission from Silicon Valley to chase their dreams. They are going for it -- building the next generation of tech start-ups, investing in each other\'s ventures, crushing male hacker stereotypes and rallying women and girls everywhere to join the digital revolution. Geek Girl Rising isn\'t about the famous tech trailblazers you already know, like Sheryl Sandberg and Marissa Mayer. Instead, veteran journalists Heather Cabot and Samantha Walravens introduce readers to the fearless female entrepreneurs and technologists fighting at the grassroots level for an ownership stake in the revolution that\'s changing the way we live, work and connect to each other.', 'Education', 3.4, '12.99', '2017', 'Heather Cabot', '/images/geek_girl.jpg'),
(6, 'High Tech Start Up', 'This revised and updated edition of Nesheim\'s underground Silicon Valley bestseller incorporates twenty-three case studies of successful start-ups, including tables of wealth showing how much money founders and investors realized from each venture.', 'Education', 4, '19.99', '2000', 'John L. Nesheim', '/images/high_tech.jpg'),
(7, 'Kids Get Coding', 'How can you stay safe while surfing the Internet? You need to be an Internet superhero! Find out how information is used online and how you can protect your identity while also enjoying the Internet.', 'Computing', 4.6, '15.99', '2016', 'Heather Lyons', '/images/kids_coding.jpg'),
(8, 'Coding with Scratch', 'Perfect for beginner coders ages 6–9, this highly visual workbook builds basic programming skills using Scratch, a free computer coding programming language, and will take kids from browsing to building.', 'Computing', 5, '9.99', '2015', 'DK', '/images/coding_scratch.jpg'),
(9, 'Coding Projects in Python', 'Using fun graphics and easy-to-follow instructions, this straightforward, this visual guide shows young learners how to build their own computer projects using Python, an easy yet powerful free programming language available for download.', 'Computing', 3.7, '10.99', '2017', 'Jamie Chan', '/images/coding_projects.jpg'),
(10, 'Cracking the Coding Interview', 'Cracking the Coding Interview, 6th Edition is here to help you through this process, teaching you what you need to know and enabling you to perform at your very best. I\'ve coached and interviewed hundreds of software engineers. The result is this book. Learn how to uncover the hints and hidden details in a question, discover how to break down a problem into manageable chunks, develop techniques to unstick yourself when stuck, learn (or re-learn) core computer science concepts, and practice on 189 interview questions and solutions.', 'Computing', 5, '39.99', '2015', 'Gayle Laakmann McDowell', '/images/cracking_code.jpg'),
(11, 'HTML & CSS', 'A full-color introduction to the basics of HTML and CSS from the publishers of Wrox! Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.', 'Computing', 3.2, '24.99', '2011', 'Jon Duckett', '/images/html_css.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`) VALUES
(0, 'B. V. Larson', 'B. V. Larson is the author of more than fifty books with over two million copies sold. His fiction regularly tops the bestseller charts. He writes in several genres, but most of his work is Science Fiction. Many of his titles have been professionally produced as audiobooks and print as well as ebook form. Eight of them have been translated into other languages and distributed by major publishers in foreign countries. He writes college textbooks in addition to fiction, and his three-book series on computer science is currently in its sixth edition.', '/images/bv_larson.jpg'),
(1, 'Doug Cantor', 'Doug Cantor is a senior editor at Inc.com. His work has appeared in Bloomberg Businessweek, Popular Science, Esquire, and other publications.', '/images/doug_cantor.jpg'),
(2, 'Tarah Wheeler Van Vlack', 'Tarah Wheeler Van Vlack (BA, MS, CSM, CSD) is co-founder and CEO of Fizzmint, an end-to-end employee management company. She has led projects at Microsoft Game Studios (Halo and Lips), architected systems at Silent Circle, and holds two agile development certifications through the Scrum Alliance. She founded Red Queen Technologies, LLC (web development), Infosec Unlocked (initiative to add diversity in infosec conference speakers), and Hack The People Foundation (nonprofit mentorship initiative focused on underprivileged people in technology). She acquired her startup funds by cleaning out poker rooms in the Northwest and Las Vegas', '/images/tarah_wheeler.jpg'),
(3, 'Bernd Schoner', 'As a research assistant at MIT\'s Media Laboratory, Bernd worked in Neil Gershenfeld\'s Physics and Media Group and the Things-That-Think research consortium. His research focused on machine-learning techniques to model string instruments, with the ultimate goal of building a Digital Stradivarius. Bernd applied the modeling techniques in a variety of commercial and artistic applications including a digital marching cello and a giant polyphonic floorboard for the Flying Karamazov Brothers.', '/images/bernd_schoner.jpg'),
(4, 'Faithe Wempen', 'Faithe Wempen, M.A., is an adjunct instructor of Computer Technology at Indiana University/Purdue University at Indianapolis, and the author of over 120 books on PC hardware and software. She also develops Web sites for businesses and non-profit organizations, and writes and teaches online computer training courses for corporate clients. She is also a Microsoft Office Master Instructor, and enjoys teaching small-group and one-on-one classes in Office applications.', '/images/faithe_wempen.jpg'),
(5, 'Heather Cabot', 'Heather Cabot is an award-winning journalist, adjunct professor at Columbia University Graduate School of Journalism and contributor to Women@Forbes. She is a former ABC News correspondent and anchor of World News Now/World News This Morning. Cabot jumped into the digital revolution when she was hired to serve as Web Life Editor for Yahoo! in 2007. During her tenure through 2012, she reported on how the Internet was transforming our everyday lives for Today, GMA, CNN, MSNBC, Fox News Channel and dozens of local TV and radio stations around the country. Cabot is an adviser to several women-led startups and is a member of Golden Seeds.', '/images/heather_cabot.jpg'),
(6, 'John L. Nesheim', 'John Nesheim is an American author, venture capitalist and teaches entrepreneurship for Cornell University and other universities in Asia and Europe. His research findings are used by entrepreneurs, investors, governments, universities, corporations, and Wall Street to increase understanding of entrepreneurial effectiveness. Nesheim is the author of the book High Tech Startup.', '/images/john_nesheim.jpg'),
(7, 'Heather Lyons', 'Heather Lyons is known for writing epic, heartfelt love stories often with a fantastical twist. From Young Adult to New Adult to Adult novels—one commonality in all her books is the touching, and sometimes heart-wrenching, romance. In addition to writing, she\'s also been an archaeologist and a teacher. She and her husband and children live in sunny Southern California and are currently working their way through every cupcakery she can find.', '/images/heather_lyons.jpg'),
(8, 'DK', 'DK was founded in London in 1974 and is now the world\'s leading illustrated reference publisher and part of Penguin Random House, formed on July 1, 2013. DK publishes highly visual, photographic non-fiction for adults and children.  DK produces content for consumers in over 87 countries and 62 languages, with offices in Delhi, London, Melbourne, Munich, New York and Toronto.', '/images/DK_logo.jpg'),
(9, 'Jamie Chan', 'Jamie Chan is the author of Coding Projects in Python and is known for writing books about many other programming languages. Among these are C Sharp, Java, and CSS. She specializes in software development and has published many educational books.', '/images/jamie_chan.jpg')
(10, 'Gayle Laakmann McDowell', 'Gayle Laakmann McDowell\'s interviewing expertise comes from vast experience on both sides of the desk. She has completed Software Engineering interviews with - and received offers from - Microsoft, Google, Amazon, Apple, IBM, Goldman Sachs, Capital IQ, and a number of other firms.Of these top companies, she has worked for Microsoft, Apple and Google, where she gained deep insight into each company\'s hiring practices.', '/images/gayle_laakman.jpg'),
(11, 'Jon Duckett', 'Jon Duckett has been helping companies create innovative digital solutions for over 15 years, designing and delivering web and mobile projects for small businesses and tech startups through to global brands like Diesel, Philips, Nike, Wrangler, and Xerox. During this time, he has has written and co-authored over a dozen books on web design and programming.', '/images/john_duckett.jpg');

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
-- Indexes for table `authors`
--
ALTER TABLE `authors`
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
