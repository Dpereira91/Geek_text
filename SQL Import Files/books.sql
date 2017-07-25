SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `published_year` varchar(4) NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `genre`, `rating`, `price`, `published_year`, `author`) VALUES
(0, 'Dale\'s Tales', 'A brief history of Dale\'s life.', 'Biography', 5, '10.10', '2017', 'B. V. Larson'),
(1, 'Cesar Salads', 'Health and fitness expert, Cesar, shares all his fitness secrets.', 'Health', 4.5, '9.00', '2017', 'Doug Cantor'),
(2, 'Nicolas\' Life', 'Non-existent.', 'Fiction', 5, 'Free', '2010', 'Tarah Wheeler Van Vlack'),
(3, 'Generic Book', 'The generic book for non-readers.', 'General', 5, '15.00', '1964', 'Bernd Schoner'),
(4, 'Book 1', 'Description 1', 'Horror', 4.2, '8.50', '1956', 'Faithe Wempen'),
(5, 'The life of Pi', '3.141 59265 358 9793 2384626 433 83 279 50288 41 971 6939 93 7 510.', 'Education', 3.14, '3.14', '1995', 'Heather Cabot'),
(6, 'The Mockingjay', 'Best selling novel of how to care for your bird', 'fiction', 4, '6.77', '2015', 'John L. Nesheim'),
(7, 'New Title', 'New Description', 'New Genre', 5, '10.80', '1987', 'Heather Lyons'),
(9, 'El Principito', 'blah blah', 'fiction', 2.2, '34.55', '1988', 'Jamie Chan'),
(10, 'ABC', 'Abc des', 'General', 1.5, '60.99', '2016', 'DK'),
(11, 'The Big Book of Hacks', 'Fire up your soldering iron, charge up that drill, and get ready to hack! From a tiny theremin to a watermelon keg, from an automatic cat feeder to a glowing mousepad, the ingenious and hilarious projects in The Big Book of Hacks are perfect for aspiring makers. And it\'s all brought to you by the DIY masters at Popular Science magazine.', 'Technology', 4.5, '15.00', '2012', 'Doug Cantor'),
(12, 'Women in Tech', 'Geared toward women who are considering getting into tech, or those already in a tech job who want to take their career to the next level, this book combines practical career advice and inspiring personal stories from successful female tech professionals Brianna Wu (founder, Giant Spacekat), Angie Chang (founder, Women 2.0), Keren Elazari (TED speaker and cybersecurity expert), Katie Cunningham (Python educator and developer), Miah Johnson (senior systems administrator), Kristin Toth Smith (tech executive and inventor), and Kamilah Taylor (mobile and social developer).', 'Computing', 4.9, '13.99', '2016', 'Tarah Wheeler Van Vlack'),
(13, 'Tech Entrepreneur\'s Survival Guide', 'In The Tech Entrepreneur\'s Survival Guide, Bernd shares what he learned and what he wished he knew at the time. He explains the major phases in a technology company\'s life cycle, helping entrepreneurs avoid common pitfalls and survive crises when they strike. He guides readers from the initial bootstrapping process through venture-capital financing and provides valuable advice on how to sell a technology company profitably--even in a challenging economic environment. Every chapter presents solutions to realworld issues that could otherwise have fatal consequences for a tech venture.', 'Business', 4, '17.99', '2014', 'Bernd Schoner'),
(14, 'Office 2016 for Seniors', 'Keep up with the latest Office technologies, and learn the fundamentals of Microsoft Office 2016!Office 2016 For Seniors For Dummies is the ideal resource for learning the fundamentals of the Microsoft Office suite. You\'ll explore the functionality of Word, Excel, PowerPoint, and Outlook, establishing basic knowledge that you can build upon as you continue to experiment with Office\'s applications. Larger font and image sizes mean you can easily read the content—and text that gets back to basics walks you through everything you need to know to use these programs in a variety of environments.', 'Computing', 3.5, '8.99', '2016', 'Faithe Wempen'),
(15, 'Geek Girl Rising', 'Meet the women who haven\'t asked for permission from Silicon Valley to chase their dreams. They are going for it -- building the next generation of tech start-ups, investing in each other\'s ventures, crushing male hacker stereotypes and rallying women and girls everywhere to join the digital revolution. Geek Girl Rising isn\'t about the famous tech trailblazers you already know, like Sheryl Sandberg and Marissa Mayer. Instead, veteran journalists Heather Cabot and Samantha Walravens introduce readers to the fearless female entrepreneurs and technologists fighting at the grassroots level for an ownership stake in the revolution that\'s changing the way we live, work and connect to each other.', 'Education', 3.4, '12.99', '2017', 'Heather Cabot'),
(16, 'High Tech Start Up', 'This revised and updated edition of Nesheim\'s underground Silicon Valley bestseller incorporates twenty-three case studies of successful start-ups, including tables of wealth showing how much money founders and investors realized from each venture.', 'Education', 4, '19.99', '2000', 'John L. Nesheim'),
(17, 'Kids Get Coding', 'How can you stay safe while surfing the Internet? You need to be an Internet superhero! Find out how information is used online and how you can protect your identity while also enjoying the Internet.', 'Computing', 4.6, '15.99', '2016', 'Heather Lyons'),
(18, 'Coding with Scratch', 'Perfect for beginner coders ages 6–9, this highly visual workbook builds basic programming skills using Scratch, a free computer coding programming language, and will take kids from browsing to building.', 'Computing', 5, '9.99', '2015', 'DK'),
(19, 'Coding Projects in Python', 'Using fun graphics and easy-to-follow instructions, this straightforward, this visual guide shows young learners how to build their own computer projects using Python, an easy yet powerful free programming language available for download.', 'Computing', 3.7, '10.99', '2017', 'Jamie Chan'),
(20, 'Cracking the Coding Interview', 'Cracking the Coding Interview, 6th Edition is here to help you through this process, teaching you what you need to know and enabling you to perform at your very best. I\'ve coached and interviewed hundreds of software engineers. The result is this book. Learn how to uncover the hints and hidden details in a question, discover how to break down a problem into manageable chunks, develop techniques to unstick yourself when stuck, learn (or re-learn) core computer science concepts, and practice on 189 interview questions and solutions.', 'Computing', 5, '39.99', '2015', 'Gayle Laakmann McDowell'),
(21, 'Tech World', 'The Galactics arrived with their Battle fleet in 2052. Rather than being exterminated under a barrage of hell-burners, Earth joined a vast Empire that spanned the Milky Way. Our only worthwhile trade goods are our infamous mercenary legions, elite troops we sell to the highest alien bidder. In the third book in the series, James McGill is deployed on another alien world. His third interstellar tour is different in every way. Rather than meeting up with a primitive society, this time he’s headed to an advanced world. Tau Ceti, better known as Tech World, is the central trading capital of Frontier 921. McGill figures he’s lucked out. The assignment looks dull but luxurious. Tau Ceti boasts a planet-wide city with a trillion inhabitants, all of whom are only interested in making a few credits. But all is not well on Tech World. The Empire is crumbling, an invasion is coming, and McGill’s easy ride through life and death has come to an end. Tech World is a military science fiction novel by bestselling author B. V. Larson.', 'Science Fiction', 5, '10.50', '2014', 'B. V. Larson'),
(22, 'HTML & CSS', 'A full-color introduction to the basics of HTML and CSS from the publishers of Wrox! Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.', 'Computing', 3.2, '24.99', '2011', 'Jon Duckett');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
