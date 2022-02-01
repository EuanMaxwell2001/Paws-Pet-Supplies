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
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `paypal_tx` varchar(100) NOT NULL,
  `paid_status` varchar(100) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `paypal_tx`, `paid_status`, `total_amount`, `timestamp`) VALUES
(103, 18, '2G5024413L454802U', 'Completed', 40, '2021-05-16 15:01:34'),
(104, 18, '8Y90452739854264S', 'Completed', 35, '2021-05-16 15:22:59'),
(106, 18, '6VE455669R849531G', 'Completed', 15, '2021-05-16 16:44:50'),
(107, 0, '3U018891X98745051', 'Completed', 40, '2021-05-16 19:28:24'),
(109, 18, '65B60048UE169481Y', 'Completed', 140, '2021-05-17 09:51:36'),
(111, 52, '3A1144231F701812E', 'Completed', 35, '2021-05-19 18:18:43'),
(112, 52, '3NT36945FM740384J', 'Completed', 30, '2021-05-19 18:28:53'),
(113, 52, '8WW762065H646512U', 'Completed', 40, '2021-05-19 18:35:59'),
(114, 55, '88H320602V0510902', 'Completed', 120, '2021-05-19 22:43:14'),
(120, 18, '98R80997JX158433X', 'Completed', 8, '2021-05-20 18:21:33'),
(121, 18, '3KX60214XD814941J', 'Completed', 40, '2021-05-20 18:23:30'),
(122, 58, '4K44190463949691Y', 'Completed', 93, '2021-05-20 19:27:57'),
(123, 18, '89504527YF303093U', 'Completed', 34, '2021-05-21 14:15:58'),
(124, 18, '', 'Pending', 0, '2021-05-21 14:27:18'),
(130, 18, '83014480U54927105', 'Completed', 305, '2021-05-21 22:08:15'),
(131, 18, '3R266140NT540333F', 'Completed', 35, '2021-05-22 06:55:18'),
(133, 18, '6LR17943599603612', 'Completed', 175, '2021-05-22 18:55:17'),
(140, 18, '', 'Pending', 0, '2021-05-23 15:48:31'),
(141, 70, '17C77804VK763905J', 'Completed', 58, '2021-05-23 17:01:00'),
(142, 0, '', 'Pending', 0, '2021-05-23 17:15:54'),
(143, 0, '', 'Pending', 0, '2021-05-23 17:19:53'),
(144, 0, '', 'Pending', 0, '2021-05-23 17:20:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
