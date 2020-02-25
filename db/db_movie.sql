-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2020 at 02:09 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `show_time`
--

DROP TABLE IF EXISTS `show_time`;
CREATE TABLE IF NOT EXISTS `show_time` (
  `show_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `time_value` varchar(40) NOT NULL COMMENT 'noon,second,etc',
  PRIMARY KEY (`show_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show_time`
--

INSERT INTO `show_time` (`show_id`, `movie_id`, `time_value`) VALUES
(1, 1, 'Noon'),
(2, 1, 'Matinee'),
(3, 1, 'First'),
(4, 1, 'Second'),
(5, 2, 'Noon'),
(6, 2, 'Matinee'),
(7, 2, 'First'),
(8, 2, 'Second'),
(9, 3, 'Noon'),
(10, 3, 'Matinee'),
(11, 3, 'First'),
(12, 3, 'Second'),
(14, 4, 'Noon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

DROP TABLE IF EXISTS `tbl_bookings`;
CREATE TABLE IF NOT EXISTS `tbl_bookings` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(255) NOT NULL,
  `seats_booked` int(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `total` int(255) NOT NULL,
  `movie_date` varchar(255) NOT NULL,
  `movie_time` varchar(255) NOT NULL,
  `movie_id` int(50) NOT NULL,
  `user_id` int(20) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`book_id`, `transaction_id`, `seats_booked`, `amount`, `total`, `movie_date`, `movie_time`, `movie_id`, `user_id`, `booking_date`) VALUES
(1, 32223232, 36, 0, 0, '2019-06-29', '08:00', 8, 1, '2019-06-29'),
(2, 275319492, 2, 4000, 8000, '2019-06-29', '08:00', 8, 1, '2019-05-30 19:35:51'),
(3, 81838208, 2, 5000, 10000, '2019-06-01', '10:00', 1, 2, '2019-05-31 12:33:07'),
(4, 88443380, 18, 5000, 90000, '2019-06-01', '10:00', 1, 3, '2019-06-06 19:43:18'),
(5, 47363824, 1, 2000, 2000, '2019-09-12', '12:00', 2, 1, '2019-08-08 20:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `phone`, `dob`, `date`) VALUES
(1, 'bimbo', 'bimbo', 'Soneye', 'Oluwasina', 'advancoplanet@gmail.com', '08141656572', '1993-03-05', '2019-05-29 18:03:06'),
(2, 'osars', 'osars', 'Soneye', 'Oluwasina', 'advancoplanet@gmail.com', '8141656572', '8199-06-22', '2019-05-31 09:35:42'),
(3, 'fontbaba', 'font', 'font', 'awesome', 'font@mail.com', '08123456789', '0001-01-01', '2019-06-06 19:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie`
--

DROP TABLE IF EXISTS `tbl_movie`;
CREATE TABLE IF NOT EXISTS `tbl_movie` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(100) NOT NULL,
  `genre` varchar(500) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `release_date` date NOT NULL,
  `actors` text NOT NULL,
  `directors` varchar(255) NOT NULL,
  `age_restriction` int(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `duration` varchar(150) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `rating` int(20) NOT NULL COMMENT '0 means active ',
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movie`
--

INSERT INTO `tbl_movie` (`movie_id`, `movie_name`, `genre`, `desc`, `release_date`, `actors`, `directors`, `age_restriction`, `image`, `duration`, `video_url`, `rating`) VALUES
(1, 'Aladdin', 'Adventure', 'askkkkkkkkkkkkkk', '2019-06-01', 'WIll Smith', 'John Smith', 18, 'aladdin_ver2.jpg', '120min', 'https://www.youtube.com/embed/ImeVy1rDHz4', 1),
(2, 'Hobbs and Shaw', 'Action', 'saaaaaaaaaaaaaaaaaaaaa', '2019-08-02', 'jason statam, the rock', 'John Smith', 18, '50618325_2328246480765217_2306485043007719624_n.jpg', '120min', 'https://www.youtube.com/embed/ImeVy1rDHz4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE IF NOT EXISTS `tbl_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `name`, `cast`, `news_date`, `description`, `attachment`) VALUES
(3, 'The Mummy', 'Tom Cruiz', '2017-06-15', 'Thought safely entombed in a crypt deep beneath the desert, an ancient princess whose destiny was unjustly taken from her is awakened in the modern era', 'news_images/mummy.jpg'),
(5, 'Transformers: The Last Knight', ' Mark Wahlberg , Isabela Moner ', '2017-07-21', 'Humans are at war with the Transformers, and Optimus Prime is gone. The key to saving the future lies buried in the secrets of the past and the hidden history of Transformers on Earth', 'news_images/tra.jpg'),
(6, 'Tiyan', 'Privthi Raj,Indrajith', '2017-10-18', 'Tiyaan is an upcoming Indian Malayalam film written by Murali Gopy and directed by Jiyen Krishnakumar.', 'news_images/tiyan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

DROP TABLE IF EXISTS `tbl_registration`;
CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`user_id`, `name`, `email`, `phone`, `age`, `gender`) VALUES
(1, 'rahul', '', '9037500119', 23, 'gender'),
(2, 'rahul', 'rahulreghunath11@gmail.com', '9037500119', 23, 'gender'),
(3, 'vishnu', 'vishnut300@gmail.com', '8156820497', 22, 'gender'),
(4, 'bhimbho', 'advancoplanet@gmail.com', '9037500119', 30, 'gender');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_screens`
--

DROP TABLE IF EXISTS `tbl_screens`;
CREATE TABLE IF NOT EXISTS `tbl_screens` (
  `screen_id` int(11) NOT NULL AUTO_INCREMENT,
  `screen_name` varchar(110) NOT NULL,
  PRIMARY KEY (`screen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_screens`
--

INSERT INTO `tbl_screens` (`screen_id`, `screen_name`) VALUES
(1, 'Screen 1'),
(2, 'Screen 2'),
(3, 'Screen 1'),
(4, 'Screen1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shows`
--

DROP TABLE IF EXISTS `tbl_shows`;
CREATE TABLE IF NOT EXISTS `tbl_shows` (
  `show_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL COMMENT 'show time id',
  `time` text NOT NULL,
  `date` text NOT NULL,
  `scene` varchar(200) NOT NULL,
  `capacity` int(250) NOT NULL,
  `amount` int(255) NOT NULL,
  PRIMARY KEY (`show_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shows`
--

INSERT INTO `tbl_shows` (`show_id`, `movie_id`, `time`, `date`, `scene`, `capacity`, `amount`) VALUES
(1, 11, '12:00', '2019-08-28', '0', 40, 4000),
(2, 11, '00:00', '2019-08-28', '0', 40, 4000),
(3, 8, '08:00', '2019-06-29', '0', 40, 4000),
(4, 3, '01:00', '2019-08-21', '0', 40, 4000),
(5, 3, '01:00', '2019-08-21', '0', 40, 4000),
(6, 3, '12:20', '0222-02-22', '0', 22, 4000),
(7, 12, '12:00', '0222-02-22', '0', 22, 4000),
(8, 1, '10:00', '2019-06-01', '0', 400, 5000),
(9, 2, '12:00', '2019-09-12', 'Green Hall', 200, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theatre`
--

DROP TABLE IF EXISTS `tbl_theatre`;
CREATE TABLE IF NOT EXISTS `tbl_theatre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_theatre`
--

INSERT INTO `tbl_theatre` (`id`, `name`, `address`, `place`, `state`, `pin`) VALUES
(2, 'Nayanam', 'Adoor', 'Adoor', 'Kerala', 691523),
(3, 'Nadam', 'Adoor', 'Adoor, Kerala, India', 'Kerala', 691523),
(4, 'Smitha', 'Adoor', 'adoor', 'Kerala', 691523),
(5, 'Smitha', 'Adoor', 'adoor', 'Kerala', 691523),
(6, 'rty', 'ryty', 'rty', 'tryt', 545),
(7, 'rty', 'ryty', 'rty', 'tryt', 545),
(8, 'rty', 'ryty', 'rty', 'tryt', 545),
(9, 'dgd', 'dgf', 'Mannady, Chennai, Tamil Nadu, India', 'Tamil Nadu', 600001),
(10, 'vxcv', 'sdfs', 'Mannady, Prakasam Road, George Town, Chennai, Tamil Nadu, India', 'Tamil Nadu', 600001),
(11, '', '', '', '', 0),
(12, '', '', '', '', 0),
(13, 'rye', 'yetyy', 'Yeyeye Hotel, Changchun, Jilin, China', 'Jilin Sheng', 130012),
(14, 'Trinity Movies', 'Pathanamthtta', 'Pathanamthitta, Kerala, India', 'Kerala', 691554);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
