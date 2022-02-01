-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2021 at 06:48 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HNCWEBMR7`
--

-- --------------------------------------------------------

--
-- Table structure for table `pawsusers`
--

CREATE TABLE IF NOT EXISTS `pawsusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `country` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `pawsusers`
--

INSERT INTO `pawsusers` (`user_id`, `username`, `email`, `password`, `dob`, `address`, `postcode`, `country`) VALUES
(18, 'Euan', 'euanmax@gmail.com', 'a', '2001-07-09', '34 Home Street', 'EH3 9LZ', 'United Kingdom'),
(55, 'michal', 'heyyy@heyyy.com', 'prunt', '1998-07-06', 'somewhere', 'lol 123', 'United Kingdom'),
(58, 'liamp', 'liampiddcapelleras@gmail.com', 'test', '1992-01-01', 'Pilrig Heights', 'EH6 5BF', 'United Kingdom'),
(59, 'Tommo', 'tom@a.com', 'e', '1989-07-08', '', '', ''),
(60, 'Liam', 'liam@liam.com', 'e', '2000-08-09', 'Edinburgh Castle', 'EH1 2NG', 'United Kingdom'),
(62, 'child', 'kid@kid.com', 'e', '2008-08-09', 'Edinburgh Castle', 'EH1 2NG', 'United Kingdom'),
(69, 'thomas', 'thomasmoore1597@gmail.com', 'TREst!1234', '1997-01-03', '', '', ''),
(70, 'tommy', 'tommy@gmail.com', 'test', '1998-02-23', 'the main street', 'PH5 7xz', 'United Kingdom');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
