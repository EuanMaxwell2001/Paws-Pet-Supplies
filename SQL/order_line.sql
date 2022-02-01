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
-- Table structure for table `order_line`
--

CREATE TABLE IF NOT EXISTS `order_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`id`, `user_id`, `order_id`, `prod_id`, `prod_name`, `prod_price`, `quantity`, `timestamp`) VALUES
(41, 0, 96, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-15 23:15:18'),
(42, 18, 97, 3, 'Royal Canin Veterinary Health Nutrition Urinary Adult Dry Cat Food', 30, 1, '2021-05-15 23:21:28'),
(43, 18, 98, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-16 00:08:04'),
(44, 18, 99, 3, 'Royal Canin Veterinary Health Nutrition Urinary Adult Dry Cat Food', 30, 1, '2021-05-16 00:35:11'),
(45, 18, 100, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-16 00:58:24'),
(46, 18, 101, 3, 'Royal Canin Veterinary Health Nutrition Urinary Adult Dry Cat Food', 30, 1, '2021-05-16 01:24:08'),
(47, 0, 102, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 2, '2021-05-16 08:35:20'),
(48, 18, 103, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-16 15:00:42'),
(49, 18, 104, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-16 15:20:58'),
(50, 50, 105, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 2, '2021-05-16 16:31:16'),
(51, 18, 106, 5, 'Whiskas 1+ Adult Complete Dry Cat Food with Chicken', 15, 1, '2021-05-16 16:43:45'),
(52, 0, 107, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-16 19:20:07'),
(53, 0, 108, 3, 'Royal Canin Veterinary Health Nutrition Urinary Adult Dry Cat Food', 30, 3, '2021-05-17 08:34:26'),
(54, 0, 108, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 2, '2021-05-17 08:34:26'),
(55, 18, 109, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 4, '2021-05-17 09:50:34'),
(56, 0, 110, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-18 13:09:34'),
(57, 52, 111, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-19 18:17:25'),
(58, 52, 112, 3, 'Royal Canin Veterinary Health Nutrition Urinary Adult Dry Cat Food', 30, 1, '2021-05-19 18:27:38'),
(59, 52, 113, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-19 18:34:33'),
(60, 55, 114, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 3, '2021-05-19 22:41:18'),
(61, 0, 115, 3, 'Royal Canin Veterinary Health Nutrition Urinary Adult Dry Cat Food', 30, 1, '2021-05-20 09:34:39'),
(62, 1, 116, 11, 'Wainwrights Luxurious Woven Herringbone Dog Collar', 8, 1, '2021-05-20 11:14:34'),
(63, 56, 117, 20, 'Ferplast Chester Dog Bed Grey', 36, 1, '2021-05-20 13:21:21'),
(64, 56, 117, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-20 13:21:21'),
(65, 57, 118, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-20 14:06:14'),
(66, 57, 118, 12, 'Zee Cat Phantom Cat Collar Multi Coloured', 7, 1, '2021-05-20 14:06:14'),
(67, 1, 119, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-20 15:27:14'),
(68, 18, 120, 11, 'Wainwrights Luxurious Woven Herringbone Dog Collar', 8, 1, '2021-05-20 18:20:50'),
(69, 18, 121, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-20 18:22:56'),
(70, 58, 122, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-20 19:27:10'),
(71, 58, 122, 4, 'Hills Science Plan Dry Adult Cat Food Chicken Flavour', 53, 1, '2021-05-20 19:27:10'),
(72, 18, 123, 5, 'Whiskas 1+ Adult Complete Dry Cat Food with Chicken', 14, 1, '2021-05-21 13:53:30'),
(73, 18, 123, 13, 'Earthbound Soft Country Leather Lead Brown Medium', 20, 1, '2021-05-21 13:53:30'),
(74, 18, 124, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-21 14:27:18'),
(75, 0, 125, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-21 14:35:34'),
(76, 0, 126, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-21 14:35:37'),
(77, 0, 127, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-21 14:38:38'),
(78, 0, 128, 28, 'VetIQ Healthy Bites Immunity Care For Small Animal Treats', 3, 1, '2021-05-21 16:42:09'),
(79, 0, 129, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-21 18:11:57'),
(80, 18, 130, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 3, '2021-05-21 22:06:54'),
(81, 18, 131, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-22 06:50:01'),
(82, 0, 132, 6, 'Harringtons Complete Adult Dry Dog Food with Salmon and Potato', 29, 3, '2021-05-22 17:54:36'),
(83, 18, 133, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 5, '2021-05-22 18:54:41'),
(84, 0, 134, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-22 21:37:30'),
(85, 0, 135, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 3, '2021-05-22 21:37:42'),
(86, 0, 135, 3, 'Royal Canin Veterinary Health Nutrition Urinary Adult Dry Cat Food', 30, 1, '2021-05-22 21:37:42'),
(87, 0, 136, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-22 22:18:35'),
(88, 0, 137, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-22 23:13:04'),
(89, 62, 138, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-23 10:57:48'),
(90, 0, 139, 2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 35, 1, '2021-05-23 11:48:57'),
(91, 18, 140, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-23 15:48:31'),
(92, 70, 141, 6, 'Harringtons Complete Adult Dry Dog Food with Salmon and Potato', 29, 2, '2021-05-23 16:59:49'),
(93, 0, 142, 1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 1, '2021-05-23 17:15:54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
