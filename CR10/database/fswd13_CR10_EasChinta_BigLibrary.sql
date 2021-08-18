-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2021 at 03:13 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_CR10_EasChinta_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd13_CR10_EasChinta_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_CR10_EasChinta_BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `last_name`) VALUES
(1, 'Fyodor', 'Dostoesvki'),
(2, 'Ernest', 'Hemingway'),
(3, 'Mark', 'Twain'),
(4, 'Charles', 'Dickens'),
(5, 'Martin', 'Scorcese'),
(6, 'Wes', 'Anderson'),
(7, 'Quentin', 'Tarantino'),
(8, 'Metallica', 'Metallica'),
(9, 'The Lumineers', 'The Lumineers'),
(10, 'Red Hot Chilli Peppers', 'Red Hot Chilli Peppers');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `short_desc` text NOT NULL,
  `publish_date` date NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `type` enum('Book','CD','DVD') NOT NULL,
  `status` enum('available','reserved') NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `author_id`, `ISBN`, `short_desc`, `publish_date`, `publisher_id`, `type`, `status`, `title`) VALUES
(72, 'https://images-na.ssl-images-amazon.com/images/I/71dUEXcxJzL.jpg', 2, 'HAGSD-DASDD-FWQED', 'A story about an old man fishing.', '1995-08-12', 1, 'Book', 'available', 'The old man and the sea'),
(73, 'https://m.media-amazon.com/images/I/51ONaww2BhL.jpg', 3, 'HJKSA-SDFO-FKFJD', 'The adventures of a young boy.', '1976-08-10', 1, 'Book', 'available', 'The adventures of Tom Sawyer'),
(74, 'https://images-na.ssl-images-amazon.com/images/I/71daWkzZc0L.jpg', 4, 'KJSHA-JURYQ-HDHAJ', 'A story with a twist nobody expected.', '1954-08-11', 1, 'Book', 'available', 'Oliver Twist'),
(75, 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781476787770/for-whom-the-bell-tolls-9781476787770_hr.jpg', 2, 'HAGAJ-JSHDA-HDAHD', 'Another masterpiece from Hemingway!', '1992-08-12', 1, 'Book', 'available', 'For whom the bell tolls'),
(76, 'https://de.web.img3.acsta.net/pictures/19/07/17/12/39/2357668.jpg', 7, 'JHAHG-UIWU-PQOWE', 'Nice movie about old times in Hollywood.', '2018-08-20', 4, 'DVD', 'reserved', 'Once upon a time in Hollywood'),
(77, 'https://m.media-amazon.com/images/I/B1f0-NF97OS._SL1500_.jpg', 6, 'JAHAH-IWUQIU-JDJDK', 'Good movie from Wes Anderson', '2015-08-18', 4, 'DVD', 'available', 'Moonrise kingdom'),
(78, 'https://m.media-amazon.com/images/M/MV5BYjRmODkzNDItMTNhNi00YjJlLTg0ZjAtODlhZTM0YzgzYThlXkEyXkFqcGdeQXVyNzQ1ODk3MTQ@._V1_.jpg', 5, 'OURUW-IURY-URYET', 'Great boxing movie about Jake LaMotta', '1964-08-17', 1, 'DVD', 'available', 'Raging Bull'),
(79, 'https://media1.jpc.de/image/w600/front/0/0602547705723.jpg', 9, 'HAJSD-YRHAK-JKAUD', '3rd Album', '2017-08-11', 3, 'CD', 'reserved', 'The Lumineers - Cleopatra'),
(80, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTll7tsrl6eibcm5pEho7vKk7SAmuKDbqjpEd2NrNRWn_UG14UZDfGkXl4sgyNpQxegkuw&usqp=CAU', 8, 'JAHS-HDGA-JDHAU', 'Death magnetic', '2017-08-10', 2, 'CD', 'available', 'Metallica'),
(81, 'https://i.scdn.co/image/ab6761610000e5eb5815bab04d87f264f06c8939', 10, 'JAHAH-SHHA-JDJAK', 'Chilli songs', '2008-08-24', 2, 'CD', 'available', 'Red Hot Chilli Peppers'),
(82, 'https://img.kytary.com/eshop_ie/velky_v2/na/637327625098570000/85e9fcf5/64771398/ms-red-hot-chili-peppers-californication.jpg', 1, 'dasad', 'asdsadad', '2021-08-11', 1, 'Book', 'available', 'test'),
(83, 'https://media1.jpc.de/image/w600/front/0/0724354038020.jpg', 1, 'dasdsad', 'dasdsada', '2021-08-11', 1, 'Book', 'available', 'edit test'),
(85, 'https://images-na.ssl-images-amazon.com/images/I/A1j7QGUbYRL.jpg', 1, 'adasdad', 'dadsadad', '2021-08-11', 1, 'Book', 'available', 'test1111'),
(87, 'https://kbimages1-a.akamaihd.net/c8f66724-16c7-4e30-ab42-2e205435eb20/1200/1200/False/crime-and-punishment-by-fyodor-dostoyevsky.jpg', 1, 'sda', 'dada', '2021-08-04', 1, 'Book', 'available', 'test2'),
(88, 'https://kbimages1-a.akamaihd.net/c8f66724-16c7-4e30-ab42-2e205435eb20/1200/1200/False/crime-and-punishment-by-fyodor-dostoyevsky.jpg', 1, 'adds', 'earsasa', '2021-08-12', 1, 'Book', 'available', 'test3'),
(89, 'https://cdn.pixabay.com/photo/2014/08/17/16/33/notebook-420011__340.jpg', 1, 'test again', 'test again', '2021-08-12', 1, 'Book', 'available', 'test again'),
(90, 'https://cdn.pixabay.com/photo/2014/08/17/16/33/notebook-420011__340.jpg', 1, 'test again', 'test again', '2021-08-11', 1, 'Book', 'available', 'test again'),
(91, 'https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717__480.jpg', 1, 'test test', 'test test', '2021-08-13', 1, 'Book', 'available', 'test test'),
(93, 'https://cdn.pixabay.com/photo/2018/01/17/18/43/book-3088775__340.jpg', 1, 'adda', 'dadada', '2021-08-05', 1, 'Book', 'available', 'test4'),
(94, 'https://cdn.pixabay.com/photo/2017/10/31/02/35/fantasy-2904098__340.jpg', 1, 'test5', 'test5', '2021-08-10', 1, 'Book', 'available', 'test5'),
(95, 'https://cdn.pixabay.com/photo/2015/11/19/21/11/knowledge-1052013__340.jpg', 5, 'dada', 'dadad', '2021-08-04', 4, 'Book', 'available', 'test6'),
(96, 'https://cdn.pixabay.com/photo/2016/04/09/18/21/photo-book-1318702__340.png', 1, 'image', 'image', '2021-08-12', 1, 'Book', 'available', 'image test'),
(97, 'https://cdn.pixabay.com/photo/2019/10/16/10/12/double-exposure-4554077__340.jpg', 1, 'dads', 'hahah', '2021-08-11', 1, 'Book', 'available', 'test test '),
(98, 'https://cdn.pixabay.com/photo/2015/11/24/21/08/dreamland-1060880__340.jpg', 1, '', 'testtest', '2021-08-18', 1, 'Book', 'available', 'testtest'),
(99, 'https://cdn.pixabay.com/photo/2018/04/22/16/35/fantasy-3341539__340.jpg', 1, 'sdada', 'dadadada', '2021-08-25', 1, 'Book', 'available', 'just changing pic'),
(100, 'https://cdn.pixabay.com/photo/2019/06/09/13/23/skull-4262127__340.jpg', 7, 'ewqeqweqedq', 'sdadadadd', '2021-08-24', 1, 'Book', 'available', 'Last test change pic from update');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `address`) VALUES
(1, 'New York Publishing', 'Albany, NY'),
(2, 'London House Publishing', 'London, UK'),
(3, 'Paris Publishing', 'Paris, France'),
(4, 'Dublin Publishing', 'Dublin, Ireland');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
