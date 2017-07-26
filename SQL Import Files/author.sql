SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Table structure for table `books`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bio` varchar(750) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`) VALUES
(0, 'B. V. Larson', 'B. V. Larson is the author of more than fifty books with over two million copies sold. His fiction regularly tops the bestseller charts. He writes in several genres, but most of his work is Science Fiction. Many of his titles have been professionally produced as audiobooks and print as well as ebook form. Eight of them have been translated into other languages and distributed by major publishers in foreign countries. He writes college textbooks in addition to fiction, and his three-book series on computer science is currently in its sixth edition.'),
(1, 'Doug Cantor', 'Doug Cantor is a senior editor at Inc.com. His work has appeared in Bloomberg Businessweek, Popular Science, Esquire, and other publications.'),
(2, 'Tarah Wheeler Van Vlack', 'Tarah Wheeler Van Vlack (BA, MS, CSM, CSD) is co-founder and CEO of Fizzmint, an end-to-end employee management company. She has led projects at Microsoft Game Studios (Halo and Lips), architected systems at Silent Circle, and holds two agile development certifications through the Scrum Alliance. She founded Red Queen Technologies, LLC (web development), Infosec Unlocked (initiative to add diversity in infosec conference speakers), and Hack The People Foundation (nonprofit mentorship initiative focused on underprivileged people in technology). She acquired her startup funds by cleaning out poker rooms in the Northwest and Las Vegas'),
(3, 'Bernd Schoner', 'As a research assistant at MIT\'s Media Laboratory, Bernd worked in Neil Gershenfeld\'s Physics and Media Group and the Things-That-Think research consortium. His research focused on machine-learning techniques to model string instruments, with the ultimate goal of building a Digital Stradivarius. Bernd applied the modeling techniques in a variety of commercial and artistic applications including a digital marching cello and a giant polyphonic floorboard for the Flying Karamazov Brothers.'),
(4, 'Faithe Wempen', 'Faithe Wempen, M.A., is an adjunct instructor of Computer Technology at Indiana University/Purdue University at Indianapolis, and the author of over 120 books on PC hardware and software. She also develops Web sites for businesses and non-profit organizations, and writes and teaches online computer training courses for corporate clients. She is also a Microsoft Office Master Instructor, and enjoys teaching small-group and one-on-one classes in Office applications.'),
(5, 'Heather Cabot', 'Heather Cabot is an award-winning journalist, adjunct professor at Columbia University Graduate School of Journalism and contributor to Women@Forbes. She is a former ABC News correspondent and anchor of World News Now/World News This Morning. Cabot jumped into the digital revolution when she was hired to serve as Web Life Editor for Yahoo! in 2007. During her tenure through 2012, she reported on how the Internet was transforming our everyday lives for Today, GMA, CNN, MSNBC, Fox News Channel and dozens of local TV and radio stations around the country. Cabot is an adviser to several women-led startups and is a member of Golden Seeds.'),
(6, 'John L. Nesheim', 'John Nesheim is an American author, venture capitalist and teaches entrepreneurship for Cornell University and other universities in Asia and Europe. His research findings are used by entrepreneurs, investors, governments, universities, corporations, and Wall Street to increase understanding of entrepreneurial effectiveness. Nesheim is the author of the book High Tech Startup.'),
(7, 'Heather Lyons', 'Heather Lyons is known for writing epic, heartfelt love stories often with a fantastical twist. From Young Adult to New Adult to Adult novels one commonality in all her books is the touching, and sometimes heart-wrenching, romance. In addition to writing, she\'s also been an archaeologist and a teacher. She and her husband and children live in sunny Southern California and are currently working their way through every cupcakery she can find.'),
(8, 'DK', 'DK was founded in London in 1974 and is now the world\'s leading illustrated reference publisher and part of Penguin Random House, formed on July 1, 2013. DK publishes highly visual, photographic non-fiction for adults and children.  DK produces content for consumers in over 87 countries and 62 languages, with offices in Delhi, London, Melbourne, Munich, New York and Toronto.'),
(9, 'Jamie Chan', 'Jamie Chan is the author of Coding Projects in Python and is known for writing books about many other programming languages. Among these are C Sharp, Java, and CSS. She specializes in software development and has published many educational books.'),
(10, 'Gayle Laakmann McDowell', 'Gayle Laakmann McDowell\'s interviewing expertise comes from vast experience on both sides of the desk. She has completed Software Engineering interviews with - and received offers from - Microsoft, Google, Amazon, Apple, IBM, Goldman Sachs, Capital IQ, and a number of other firms.Of these top companies, she has worked for Microsoft, Apple and Google, where she gained deep insight into each company\'s hiring practices.'),
(11, 'Jon Duckett', 'Jon Duckett has been helping companies create innovative digital solutions for over 15 years, designing and delivering web and mobile projects for small businesses and tech startups through to global brands like Diesel, Philips, Nike, Wrangler, and Xerox. During this time, he has has written and co-authored over a dozen books on web design and programming.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
